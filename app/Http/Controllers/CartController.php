<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = DB::table('accessories')->join('carts', 'carts.accessory_id', 'accessories.id')
            ->select('accessories.name', 'accessories.price', 'accessories.image', 'carts.*')
            ->where('carts.customer_id', session()->get('id'))->get();
        // $carts = DB::table('carts')->where('carts.customer_id', session()->get('id'))->get();
        return view('clients.cart', compact('cartItems'));
        // return session()->all();
        // Dd(session()->all());
    }
    public function addToCart(Request $request)
    {
        if (session()->has('id')) {
            $item = new Cart();
            $item->quanity = $request->input('quantity');
            $item->accessory_id = $request->input('id');
            $item->customer_id = session()->get('id');
            $item->save();
            return redirect()->back()->with('success', 'Item added');
        } else {
            return redirect('/login')->with('error', 'Please Login');
        }
    }
    public function updateCart(Request $request)
    {

        if (session()->has('id')) {
            $item = Cart::find($request->input('id'));
            $item->quanity = $request->input('quantity');
            $item->save();
            return redirect()->back()->with('success', 'Item update');
        } else {
            return redirect('/login')->with('error', 'Please Login');
        }
    }
    public function deleteCartItem($id)
    {
        $item = Cart::find($id);
        session()->forget('cart', $id);
        $item->delete();

        return redirect()->back()->with('success', 'Item has been deleteed ');
    }
}
