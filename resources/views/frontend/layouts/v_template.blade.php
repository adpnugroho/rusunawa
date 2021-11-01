<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Primary Meta Tags -->
    <title>@yield('title')</title>
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    @yield('meta')
    <!-- Favicons -->
    <link href="{{ asset('template-frontend') }}/assets/img/favicon.ico" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('template-frontend') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('template-frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    @yield('css')
    <!-- Template Main CSS File -->
    <link href="{{ asset('template-frontend') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>
    @include('frontend.layouts.v_header')
    @yield('content')
    @include('frontend.layouts.v_footer')
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('template-frontend') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('template-frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template-frontend') }}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('template-frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    @yield('js')
    <!-- Template Main JS File -->
    <script src="{{ asset('template-frontend') }}/assets/js/main.js"></script>
</body>

</html>
