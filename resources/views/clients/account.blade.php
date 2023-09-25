@extends('clients.layouts.app')


@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">My Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- PRODUCT TAB AREA START -->
                <div class="ltn__product-tab-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ltn__tab-menu-list mb-50">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
                                        <a href="/logout">Logout <i class="fas fa-sign-out-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="liton_tab_1_1">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>Hello <strong>
                                                @if (session('user'))
                                                    {{session('user')}}
                                                @else
                                                {{session()->get('username')}}
                                                @endif

                                                </strong>

                                            <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_2">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($orders as $order)
                                                        <tbody>
                                                            <tr>
                                                                <td>{{$order->id}}</td>
                                                                <td>{{$order->created_at}}</td>
                                                                <td>{{$order->status}}</td>
                                                                <td>${{$order->bill}}</td>
                                                            </tr>

                                                        </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="liton_tab_1_5">
                                        <div class="ltn__myaccount-tab-content-inner mb-50">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <div class="ltn__form-box">
                                            @if(Session::has('success'))
                                                    <p style="color:blue;">{{ Session::get('success') }}</p>
                                                 @endif
                                                 @if($errors->any())
                                                 @foreach($errors->all() as $error)
                                                 <p style="color:red;">{{ $error }}</p>
                                                 @endforeach
                                             @endif

                                                <form action="{{ route('updateAccount') }} " method="POST">
                                                    @csrf
                                                    <div class="row mb-50">

                                                        <div class="col-md-6">
                                                            <label>User Name:</label>
                                                            <input type="text" name="name" value="{{$user->name}}" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label> Email:</label>
                                                            <input type="email" name="email" value="{{$user->email}}">
                                                        </div>

                                                    </div>
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Current password (leave blank to leave unchanged):</label>
                                                                <input type="password" name="password">
                                                                <label>New password (leave blank to leave unchanged):</label>
                                                                <input type="password" name="newPassword">
                                                                <label>Confirm new password:</label>
                                                                <input type="password"  name="newPassword_confirmation">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT TAB AREA END -->
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->

@endsection
