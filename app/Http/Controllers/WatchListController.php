<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WatchList;
use Illuminate\Http\Request;

class WatchListController extends Controller
{
    public function index()
    {
        return view('clients.wishlist');
    }
    public function addToWatchList(Request $request)
    {
        if (session()->has('id')) {
            $item = new WatchList();

            $item->accessory_id = $request->input('id');
            $item->customer_id = session()->get('id');
            $item->token = session()->get('id');
            $item->save();
            return redirect()->back()->with('success', 'Item added');
        } else {
            return redirect('/login')->with('error', 'Please Login');
        }
    }

    public function deleteWishList($id){
        $item = WatchList::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item has been deleteed ');
    }
}
