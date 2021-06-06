<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reid - Fashion eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('home_pages/assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('home_pages/assets/css/style.css')}}">

</head>

<body>

    @include('home_pages.layout.header')
    
    @yield('home_pages')

    @include('home_pages.layout.modal')

    @include('home_pages.layout.footer')



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('home_pages/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('home_pages/assets/js/main.js')}}"></script>



</body>

</html>