<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/admin/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Edumin - Bootstrap Admin Dashboard</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/jqvmap/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/skin-2.css') }}">
    @yield('css')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/dashboard') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets') }}/logo.png" width="200px" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        @include('layout.navbar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('body')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/"
                        target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dlabnav-init.js') }}"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/admin/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Chart sparkline plugin files -->
    <script src="{{ asset('assets/admin/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Demo scripts -->
    <script src="{{ asset('assets/admin/js/dashboard/dashboard-3.js') }}"></script>

    <!-- Svganimation scripts -->
    <script src="{{ asset('assets/admin/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ asset('assets/admin/js/styleSwitcher.js') }}"></script>

     @yield('script')
</body>

</html>
