<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
       
        return view('clients.home'  , $data);
    }

}
