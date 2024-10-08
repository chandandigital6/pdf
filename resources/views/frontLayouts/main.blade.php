<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dr. Johnson</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('asset/img/favicon.ico')}}" rel="icon">
    <link href="{{asset('asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Nunito:600,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('asset/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/vendor/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('asset/css/hover-style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Top Header Start -->
@include('frontLayouts.topbar')

@include('frontLayouts.header')
<!-- Header End -->

@yield('content')

<!-- Footer Start -->
@include('frontLayouts.footer')
<!-- Footer end -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('asset/vendor/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/vendor/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/vendor/stickyjs/sticky.js')}}"></script>
<script src="{{asset('asset/vendor/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('asset/vendor/superfish/superfish.min.js')}}"></script>
<script src="{{asset('asset/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/vendor/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

<!-- Main Javascript File -->
<script src="{{asset('asset/js/main.js')}}"></script>

</body>
</html>
