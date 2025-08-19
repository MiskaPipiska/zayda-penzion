<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "IT Products")</title>
    {{--    <meta name="keywords" content="">--}}
    {{--    <meta name="description" content="">--}}

    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield("styles")
</head>
<body>

@include('partials.header')
<main>
    @yield('content')
</main>
@include('partials.footer')

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/venobox.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>
</html>
