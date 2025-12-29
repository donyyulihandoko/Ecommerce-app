<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Best Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">

    <!-- Title -->
    <title>{{ $title ?? config('APP_NAME') }}</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">

</head>

<body>

    <div class="page-wrapper">

        @include('components.sidebar-wrapper')

        <div class="main-container">

            @include('components.header')

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                @yield('content')
                <!-- Content wrapper end -->

                <!-- App Footer start -->
                <div class="app-footer">
                    <span>© Arise admin 2023</span>
                </div>
                <!-- App footer end -->

            </div>
            <!-- Content wrapper scroll end -->
        </div>
    </div>



    <!-- *************
************ Required JavaScript Files *************
************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>

    <!-- *************
************ Vendor Js Files *************
************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/sales/salesGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/sales/revenueGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/sales/taskGraph.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
