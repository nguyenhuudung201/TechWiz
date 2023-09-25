<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('clients_assets/images/logo4.png')}}" type="image/x-icon" />
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('clients_assets/css/font-icons.css')}}">
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
                        <h1>Register <br>Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="{{ route('register') }}" method="POST" class="ltn__form-box contact-form-box">
                            @csrf
                            <input type="text" name="name" placeholder="Name">
                            {{-- <input type="text" name="lastname" placeholder="Last Name"> --}}
                            <input type="email" name="email" placeholder="Email*">
                            <input type="password" name="password" placeholder="Password*">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password*">
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
                            <div class="btn-wrapper text-center mb-3">
                                <button class="theme-btn-1 btn reverse-color btn-block" value="Register" type="submit">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                            <div class="go-to-btn mt-50">
                                <a href="{{ route('login')}}">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
