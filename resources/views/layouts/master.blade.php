<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="meowtech.">
    <meta name="description" content="MEOWTECH.">
    <meta name="description" content="meowtechvn.">
    <meta name="description" content="TECHNOLOGY COMPANIES IN VIETNAM.">
    <meta name="description" content="MeowTech.">
    <meta name="description" content="MEOWTECH CO., LTD.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2EDYP4WHHD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2EDYP4WHHD');
        </script>

    {{-- Style common --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/green-audio-player.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/vendor/odometer-theme-default.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('storage/assets/css/app.css') }}">

    <script src="{{ asset('storage/js/jquery-3.6.3.min.js') }}" type="text/javascript"></script>
</head>
<body class="sticky-header">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    @yield('scripts')
</body>
</html>
