<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

 
        @yield('title')
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class=" w-full">
       <div class=" w-full" id="app">
        @yield('contnent')
       </div>
       
       @yield('scripts')
    </body>
</html>
