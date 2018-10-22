<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>QutCode |Home</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}

    </head>
    <body>
        <div id="app">
            @include('_partials.start')
            @include('_partials.services')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            const app = new Vue({
            el: '#app',
            data: {}
            });
        </script>
    </body>
</html>
