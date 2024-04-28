@php
    $settings = getSettings();
    $social_media_link = getSocialMediaLink();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="name" content="@yield('name', $settings->app_name)">
    <meta name="keywords" content="@yield('keywords', $settings->app_name)">
    <meta name="description" content="@yield('description', $settings->app_name)">
    <meta name="author" content="{{ $settings->app_name }}">
    <title>{{ $settings->app_name }} - @yield('pageTitle', $settings->app_name)</title>

    <!-- Web Manifest -->
    <link rel="manifest" href="{{ public_asset('assets/frontend/js/manifest.json') }}">

    <meta name="theme-color" content="#7AB730" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:site_name" content="{{ $settings->app_name }}" />
    <meta property="og:image" content="{{ public_asset($settings->header_image) }}" />
    <meta property="og:image" content="{{ public_asset($settings->header_image) }}" />
    <meta property="og:title" content="@yield('ogTitle', $settings->app_name)" />
    <meta property="og:description" content="@yield('ogDescription', $settings->app_name)" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ URL::current() }}" />
    <meta name="twitter:title" content="@yield('twitterTitle', $settings->app_name)" />
    <meta name="twitter:description" content="@yield('twitterDescription', $settings->app_name)" />
    <meta name="twitter:image" content="{{ public_asset($settings->header_image) }}" />
    <meta name="twitter:creator" content="@gaurav_tiwari" />
    <meta name="twitter:site" content="@gaurav_tiwari" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ URL::current() }}" />

    <!-- Favicon -->
    <link href="{{ public_asset('assets/frontend/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/assets/frontend/css/style.css') }}" rel="stylesheet">
    @stack('styles')
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @stack('scripts')

</body>

</html>
