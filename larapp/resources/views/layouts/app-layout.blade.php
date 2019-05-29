<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','LARAPP')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >

    </head>
    <body>
        @include('particulars.navbar')

        <div class="container">
            @include('particulars.messages')
            @yield('content') 
        </div>          
    </body>
</html>