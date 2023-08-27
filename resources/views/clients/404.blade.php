<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('clients_assets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/responsive.css')}}">
</head>
<body>
    <div class="ltn__404-area ltn__404-area-1 mb-120" style="    min-height: 90vh;
    display: flex;
    align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-inner text-center">
                        <h1 class="error-404-title">404</h1>
                        <h2>Page Not Found!</h2>
                        <!-- <h3>Oops! Looks like something going rong</h3> -->
                        <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="btn-wrapper">
                            <a href="{{route('home')}}" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> BACK TO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
