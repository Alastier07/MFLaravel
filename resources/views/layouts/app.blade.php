<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>{{ config('app.name', 'DORA') }}</title>
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('inc.nav')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
