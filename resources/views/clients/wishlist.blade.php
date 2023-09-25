@extends('clients.layouts.app')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Wishlist</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<div class="liton__wishlist-area mb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        @if(Session::has('success'))
                        <p style="color:green;">{{ Session::get('success') }}</p>
                        @endif
                        
                        @if(Session::has('errors'))
                        @foreach($errors->all() as $error)
                        <p style="color:red;">{{ Session::get('error') }}</p>
                        @endforeach
                        @endif
                        <table class="table">
                            <thead>
                                <th class="cart-product-remove">Remove</th>
                                <th class="cart-product-image">Image</th>
                                <th class="cart-product-info">Name</th>
                                <th class="cart-product-price">Price</th>
                            </thead>
                            <tbody>
                                @php
                                $total=0;
                                @endphp
                                @foreach ($cartItems as $cartItem)
                                <tr class="row">
                                    <td class="cart-product-remove col-3 pl-3"><a href="{{URL::to('deleteWishList/'.$cartItem->id)}}">x</a></td>
                                    <td class="cart-product-image col-3">
                                        <a href="{{URL::to('single/accessory/'.$cartItem->accessory_id)}}"><img src="{{ asset('images/product/' .  $cartItem->image) }}" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info col-3">
                                        <h4><a href="{{URL::to('single/accessory/'.$cartItem->accessory_id)}}" style="width= 50px">{{substr($cartItem->name,0,30)}}</a></h4>
                                    </td>
                                    <td class="cart-product-price col-3 text-center">{{$cartItem->price}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
