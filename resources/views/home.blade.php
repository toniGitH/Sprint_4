@extends('layouts.staticPage_layout')

@section('title', 'Home')

@section('content')

    <main class="flex-grow flex flex-col h-full mt-24 mb-10">
        
        <h1>ESTA ES LA PÁGINA PRINCIPAL</h1>

        <p>Aquí van dos cuadrados con dos imágenes que representarán estos dos enlaces:</p>

        <ul>
            <li><a href="{{route('teams.index')}}">GESTIÓN DE EQUIPOS</a></li>
            <br><br>
            <li><a href="{{route('games.index')}}">GESTIÓN DE PARTIDOS</a></li>
        </ul>
        
    </main>
    
@endsection