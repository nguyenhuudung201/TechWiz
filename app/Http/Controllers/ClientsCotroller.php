<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\Cart;
use App\Models\Order;
use App\Models\WatchList;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientsCotroller extends Controller
{
    public function index()
    {
        $accessories=Accessory::all();
        return view('clients.home' ,compact('accessories'));
    }

    public function cart()
    {
        return view('clients.cart');
    }

    public function contact_us()
    {
        return view('clients.contact_us');
    }

    public function about_us()
    {
        return view('clients.about_us');
    }

    public function shop()
    {
        return view('clients.shop');
    }

    public function blog()
    {
        return view('clients.blog');
    }
    public function Error()
    {
        return view('clients.404');
    }

    public function wishlist()
    {
        $cartItems = DB::table('accessories')->join('watch_lists', 'watch_lists.accessory_id', 'accessories.id')
            ->select('accessories.name', 'accessories.price', 'accessories.image', 'watch_lists.*')
            ->where('watch_lists.customer_id', Auth::user()->id)->get();
        return view('clients.wishlist', compact('cartItems'));
    }
    public function checkout()
    {
        $carts = DB::table('accessories')->join('carts', 'carts.accessory_id', 'accessories.id')
            ->select('accessories.name', 'accessories.price', 'accessories.image', 'carts.*')
            ->where('carts.customer_id', Auth::user()->id)->get();
        $total = 0;
        $count = 0;
        if ($carts != null) {
            foreach ($carts as $cartItem) {
                $total += $cartItem->price * $cartItem->quanity;
            }
            $count = $carts->count();
        }

        return view('clients.checkout', compact('total', 'count', 'carts'));
    }
    public function checkoutAcction(Request $request)
    {

        if (session()->has('id')) {

            $item = new Order();

            $item->status = "Pending";

            $item->customer_id = session()->get('id');
            // $request->validate([
            //     'email' => 'string|required|email',
            //     'name' => 'string|required',
            //     'phone' => 'integer|required',
            //     'name' => 'string|required',
            // ]);
            $item->bill = $request->input('bill');
            $item->address = $request->input('address');
            $item->email =  session()->get('email');
            $item->phone = $request->input('phone');
            $item->name = $request->input('name');

            if ($item->save()) {
                $carts = Cart::where('customer_id', session()->get('id'))->get();
                foreach ($carts as $cart) {
                    $accessory = Accessory::find($cart->accessory_id);
                    $orderItem = new OrderItem();
                    $orderItem->accessory_id = $cart->accessory_id;
                    $orderItem->quantity = $cart->quanity;
                    $orderItem->price = $accessory->price;
                    $orderItem->quantity = $cart->quanity;
                    $orderItem->order_id = $item->id;
                    $orderItem->save();
                    $cart->delete();
                }
            } else {
                return redirect()->back()->with('error', 'Error Not Save Cart');
            }

            return redirect()->back()->with('success', 'Your order success');
        } else {
            return redirect('/login')->with('error', 'Please Login');
        }
    }
}
