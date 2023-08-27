<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>102 Garden</title>
    <link rel="shortcut icon" href="{{asset('clients_assets/images/logo4.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('clients_assets/css/responsive.css')}}">
</head>
  <body>
    <!--[if lte IE 9]>
				<p class="browserupgrade">You are using an
					<strong>outdated</strong> browser. Please
					<a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
				</p>
				<![endif]-->
    <!-- Add your site or application content here -->
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
      <!-- HEADER AREA START (header-4) -->
        @include('clients.blocks.header')
      <!-- HEADER AREA END -->
      <!-- Utilize Cart Menu Start -->

      <!-- SLIDER AREA START (slider-6) -->
      @yield('content')
      <!-- FOOTER AREA START -->
        @include('clients.blocks.footer')
      <!-- FOOTER AREA END -->

      <!-- MODAL AREA END -->
    </div>
    <!-- Body main wrapper end -->
    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
      <div class="preloader-inner">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <!-- preloader area end -->
    <!-- All JS Plugins -->
    <script src="{{asset('clients_assets/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('clients_assets/js/main.js')}}"></script>
  </body>
</html>
