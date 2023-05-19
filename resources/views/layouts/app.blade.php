<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="SOS CARTE Mobile APP">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="bootstrap, wallet, banking, sos carte, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="manifest" href="__manifest.json">
    <title>@yield('title')</title>

    @include('panels/styles')
    @livewireStyles
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</head>

<body class="@if (Route::is('contact') || Route::is('orders.show') ) {{ 'bg-white' }} @endif" >
    @yield('content')
    @include('panels.scripts')
</body>

</html>
