<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
        {{-- <link href="{{ resource('sass/custom.scss') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>{{config('app.name', 'Donate')}}</title>
    </head>
    <body >
        {{-- dir="rtl" --}}
        <div id="app">
            @include('include.navbar')
            <div class="container">
                @include('include.messages')
                @yield('content')
            </div>
        </div>
        <footer>
            <div>
                @include('include.footer')
            </div>
        </footer>
            
        
    </body>
</html>
