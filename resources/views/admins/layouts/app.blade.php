
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin Pro</title>
        <link href="{{asset('admin_assets/css/style.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/litepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/styles.css')}}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script src="{{asset('admin_assets/js/all.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/feather.min.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        @include('admins.blocks.nav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admins.blocks.siderbar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @include('admins.blocks.header')
                    <!-- Main page content-->
                    @yield('content')
                </main>
                @include('admins.blocks.footer')
            </div>
        </div>
        <script data-cfasync="false" src="{{asset('admin_assets/js/email-decode.min.js')}}">
        </script><script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/scripts.js')}}"></script>
        <script src="{{asset('admin_assets/js/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/chart-area-demo.js')}}"></script>
        <script src="{{asset('admin_assets/js/chart-bar-demo.js')}}"></script>
        <script src="{{asset('admin_assets/js/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/datatables-simple-demo.js')}}"></script>
        <script src="{{asset('admin_assets/js/bundle.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/litepicker.js')}}"></script>

        <script src="{{asset('admin_assets/js/sb-customizer.js')}}"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
        <script >
            (function() {
                var js = "window['__CF$cv$params']={r:'7f4399584a2fb46d',t:'MTY5MTYyMTg1Ni4yMTEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');
                _0xh.height = 1;
                _0xh.width = 1;
                _0xh.style.position = 'absolute';
                _0xh.style.top = 0;
                _0xh.style.left = 0;
                _0xh.style.border = 'none';
                _0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);

                function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');
                        _0xj.innerHTML = js;
                        _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    }
                }
                if (document.readyState !== 'loading') {
                    handler();
                } else if (window.addEventListener) {
                    document.addEventListener('DOMContentLoaded', handler);
                } else {
                    var prev = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(e) {
                        prev(e);
                        if (document.readyState !== 'loading') {
                            document.onreadystatechange = prev;
                            handler();
                        }
                    };
                }
            })(); < /script><script defer src="{{asset('admin_assets/js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854')}} " integrity="
        sha512 - bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM / 9 hPSAI / 4 qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg == " data-cf-beacon='{"
        rayId ":"
        7 f4399584a2fb46d ","
        token ":"
        6e2 c2575ac8f44ed824cef7899ba8463 ","
        version ":"
        2023.7 .0 ","
        si ":100}' crossorigin="
        anonymous "> </script>
</body>
</html>
