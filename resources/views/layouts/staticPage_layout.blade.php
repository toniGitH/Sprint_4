<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        {{-- @vite('resources/css/app.css') --}} {{-- Con esta línea se añade la hoja de estilos css/app --}}
        {{-- @vite('resources/css/statics.css') --}} {{-- Con esta línea se añade la hoja de estilos css/statics --}}
        <style>
            /*             
            body{
                background-image: url("{{ asset('img/futbol.jpg') }}"); 
            } */
        </style>
    </head>
    <body>

        @include('layouts.partials.staticPage_header')

        @yield('content')

        @include('layouts.partials.staticPage_footer')

    </body>
</html>