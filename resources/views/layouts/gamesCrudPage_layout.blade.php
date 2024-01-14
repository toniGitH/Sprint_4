<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite('resources/css/app.css') {{-- Con esta línea se añade la hoja de estilos de css/app --}}
        @vite('resources/css/cruds.css') {{-- Con esta línea se añade la hoja de estilos css/cruds --}}
    </head>
    <body class="min-h-screen flex flex-col ">

        @include('layouts.partials.gamesCrudPage_header')

        @yield('content')

        @include('layouts.partials.crudPage_footer')

    </body>
</html>