<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loadRegister()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('clients.auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Your Registration has been successfull.');
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('clients.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email', 'password');
        if (Auth::attempt($userCredential)) {

            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error', 'Username & Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('admins.dashboard');
    }


    public function redirectDash()
    {
        $redirect = '';

        if (Auth::user() && Auth::user()->role == 1) {
            $redirect = '/admin/dashboard';
            session()->put('id', Auth::user()->id);
            session()->put('username', Auth::user()->name);
            session()->put('email', Auth::user()->email);
        } else {
            $redirect = '/account';
            session()->put('id', Auth::user()->id);
            session()->put('username', Auth::user()->name);
            session()->put('email', Auth::user()->email);
            // $carts = DB::table('carts')->where('carts.customer_id', Auth::user()->id)->get();

            $carts = DB::table('accessories')->join('carts', 'carts.accessory_id', 'accessories.id')
                ->select('accessories.name', 'accessories.price', 'accessories.image', 'carts.*')
                ->where('carts.customer_id', Auth::user()->id)->get();
            session()->put('cart', $carts);
            $total = 0;
            $count = 0;
            if ($carts != null) {
                foreach ($carts as $cartItem) {
                    $total += $cartItem->price * $cartItem->quanity;
                }
                $count = $carts->count();
            }
            session()->put('total', $total);
            session()->put('total_count', $count);
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
