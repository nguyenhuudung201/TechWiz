@extends('clients.layouts.app')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Checkout</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="ltn__checkout-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__checkout-inner">

                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Billing Details</h4>
                        <div class="ltn__checkout-single-content-info">
                            <form action="{{ route('checkoutAcction')}}" method="GET">
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="name" placeholder="Name" value="{{session()->get('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" placeholder="email address" value="{{session()->get('email')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="phone number" required>
                                            <input type="hidden" name="bill" value="{{$total}}">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-lg-12 col-md-12">
                                        <h6>Address</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <input type="text" name="address" placeholder="Enter Address" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label class="checkbox-inline">
                                            @if($errors->any())
                                            @foreach($errors->all() as $error)
                                                <p style="color:red;">{{ $error }}</p>
                                                @endforeach
                                            @endif
                                        </label>
                                        <label class="checkbox-inline">
                                            @if(Session::has('success'))
                                                <p style="color:green;">{{ Session::get('success') }}</p>
                                            @endif
                                        </label>
                                    </div>

                                </div>

                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="shoping-cart-total mt-50">
                    <h4 class="title-2">Cart Totals</h4>
                    <table class="table">
                        <tbody>
                            @foreach ($carts as $item)
                            <tr>
                                <td> {{substr($item->name,0,30)}}<strong>× {{$item->quanity}}</strong></td>
                                <td>${{$item->price*$item->quanity}}</td>
                            </tr>

                            @endforeach


                            <tr>
                                <td>Vat</td>
                                <td>$00.00</td>
                            </tr>
                            <tr>
                                <td><strong>Order Total</strong></td>
                                <td><strong>${{$total}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->
@endsection
