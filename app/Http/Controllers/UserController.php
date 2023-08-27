<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function account()
    {
        if (session()->has('id')) {
            $user = User::find(session()->get('id'));
            $orders = Order::all()->where('customer_id', session()->get('id'));
            return view('clients.account', compact('user', 'orders'));
        }
        return redirect('/login');
    }


    public function updateAccount(Request $request)
    {

        // $request->validate([
        //     'name' => 'string|required|min:2',
        //     'email' => 'string|email|max:100',
        //     'password' => 'string|required|confirmed|min:6',
        //     'newPassword' => 'string|required|confirmed|min:6',
        //     'newPassword_confirmation' => 'string|required|confirmed|min:6'
        // ]);
        // return $request;
        $user= User::find(session()->get('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');


        if(Hash::check($request->input('password'), $user->password)){
            $user->password=Hash::make($request->input('newPassword'));
            $user->save();
            return redirect()->back()->with('success','Updatae Infor Success');


        } else{
            return redirect()->back()->with('errors','Incorrect passsword');

        }

    }
}
