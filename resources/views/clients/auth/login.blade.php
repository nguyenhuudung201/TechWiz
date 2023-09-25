<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{asset('clients_assets/images/logo4.png')}}" type="image/x-icon" />
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/responsive.css')}}">
</head>
<body>
    <div class="ltn__login-area" style="min-height: 100vh;
    display: flex;
    align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1>Sign In <br>To  Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="{{ route('login') }}"  method="POST" class="ltn__form-box contact-form-box">
                            @csrf
                            <input type="text" name="email" placeholder="Email*">
                            <input type="password" name="password" placeholder="Password*">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                    <p style="color:red;">{{ $error }}</p>
                                    @endforeach
                                @endif

                                @if(Session::has('error'))
                                    <p style="color:red;">{{ Session::get('error') }}</p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center">
                        <h4>DON'T HAVE AN ACCOUNT?</h4>
                        <p>Add items to your wishlistget personalised recommendations <br>
                            check out more quickly track your orders register</p>
                        <div class="btn-wrapper">
                            <a href="{{route('register')}}" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
