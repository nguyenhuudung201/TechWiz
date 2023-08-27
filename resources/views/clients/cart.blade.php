@extends('clients.layouts.app')
@section('content')

<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Cart</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        @if (session()->has('success'))
                        <div>
                            {{session()->get('success')}}
                        </div>
                        @endif
                        <table class="table">
                            <thead>
                                <th class="cart-product-remove">Remove</th>
                                <th class="cart-product-image">Image</th>
                                <th class="cart-product-info">Product</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-quantity">Update</th>
                                <th class="cart-product-subtotal">Subtotal</th>
                            </thead>
                            <tbody>
                                @php
                                $total=0;
                                @endphp
                                @foreach ($cartItems as $cartItem)
                                <tr>
                                    <td class="cart-product-remove"><a href="{{URL::to('deleteCartItem/'.$cartItem->id)}}">x</a></td>
                                    <td class="cart-product-image">
                                        <a href="{{URL::to('single/accessory/'.$cartItem->accessory_id)}}"><img src="{{ asset('images/product/' .  $cartItem->image) }}" alt="#"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="{{URL::to('single/accessory/'.$cartItem->accessory_id)}}" style="width= 50px">{{substr($cartItem->name,0,30)}}</a></h4>
                                    </td>
                                    <td class="cart-product-price">{{$cartItem->price}}</td>
                                    <td class="cart-product-quantity">
                                        <form style="display:flex;" action="{{URL::to('updateCart')}}" method="POST">
                                            @csrf
                                            <div class="cart-plus-minus">
                                                <input type="number" value="{{$cartItem->quanity}}" name="quantity" class="cart-plus-minus-box">
                                            </div>
                                            <input class="display: none" type="hidden" name="id" value="{{$cartItem->id}}">
                                            <input style="margin-left: 20px" type="submit" name="update" value="Update">
                                        </form>
                                    </td>
                                    <td class="cart-product-subtotal">${{$cartItem->price*$cartItem->quanity}}</td>
                                </tr>
                                @php
                                $total+=($cartItem->price*$cartItem->quanity);
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="shoping-cart-total mt-50">
                        <h4>Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td>${{$total}}</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handing</td>
                                    <td>$15.00</td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>$00.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>${{$total + 15}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrapper text-right">
                            <a href="/checkout" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->
@endsection
