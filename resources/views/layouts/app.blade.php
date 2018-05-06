<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('layouts/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/responsive.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('Cart-icon.png') }}" rel="shortcut icon" type="image/x-icon">
</head>
<body>
    <!-- /header -->
    @include("layouts.elements.top")

    <!-- /slider -->
    @include("layouts.elements.slide")

    <section>
        <div class="container">
            
        </div>
    </section>

    <!-- footer -->
    @include("layouts.elements.footer")

    <!-- Scripts -->
    <script src="{{ asset('layouts/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('layouts/js/contact.js') }}"></script>
    <script src="{{ asset('layouts/js/gmaps.js') }}"></script>
    <script src="{{ asset('layouts/js/html5shiv.js') }}"></script>
    <script src="{{ asset('layouts/js/jquery.js') }}"></script>
    <script src="{{ asset('layouts/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('layouts/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('layouts/js/main.js') }}"></script>
    <script src="{{ asset('layouts/js/price-range.js') }}"></script>
</body>
</html>
