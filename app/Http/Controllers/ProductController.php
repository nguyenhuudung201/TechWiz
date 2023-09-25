<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Product Detail"
        ];
        return view('clients.product-details', $data);
    }
}
