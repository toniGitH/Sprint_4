<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite('resources/css/app.css') {{-- Con esta línea se añade la hoja de estilos css/app --}}
        @vite('resources/css/statics.css') {{-- Con esta línea se añade la hoja de estilos css/statics --}}
        <style>         
            body{
                background-image: url("{{ asset('img/balon_bn.jpg') }}");
                background-repeat: no-repeat; /* Evita que la imagen se repita */
                background-size: cover; /* Hace que la imagen se adapte a toda la pantalla, manteniendo la proporción */
                
            }
        </style>
    </head>
    <body class="min-h-screen flex flex-col ">

        @include('layouts.partials.staticPage_header')

        @yield('content')

        @include('layouts.partials.staticPage_footer')

    </body>
</html>