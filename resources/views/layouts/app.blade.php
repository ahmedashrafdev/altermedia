<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>aletrmedia</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> --}}
    </head>
    <body>
        <div id="app">
            @include('layouts.header')
            @include('layouts.nav')
            <main>
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        @stack('js')
    </body>
</html>
