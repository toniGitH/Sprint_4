<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite('resources/css/app.css') {{-- Con esta línea se añade la hoja de estilos de css/app --}}
        @vite('resources/css/cruds.css') {{-- Con esta línea se añade la hoja de estilos css/cruds --}}
        <style>         
            body::before {
            content: "";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('img/balon_bn.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: black;
            opacity: 0.6;
            z-index: -1;
        }
        </style>
    </head>
    <body class="min-h-screen flex flex-col ">

        @include('layouts.partials.teamsCrudPage_header')

        @yield('content')

        @include('layouts.partials.crudPage_footer')

    </body>
</html>