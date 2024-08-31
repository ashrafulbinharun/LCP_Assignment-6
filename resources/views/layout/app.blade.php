<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') || {{ env('APP_NAME', 'Lariv') }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @vite('resources/css/app.css')
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> href improve
        your experience and security.
      </p>
    <![endif]-->

    @include('components.preloader')
    @include('components.back-to-top')
    @include('components.background')
    @include('components.header')
    @include('components.mobile-menu')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/typer.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
