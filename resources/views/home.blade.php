@extends('layouts.staticPage_layout')

@section('title', 'Home')

@section('content')

    <main class="flex-grow flex flex-col justify-center items-center h-full mt-24 mb-10">

        <div class="flex flex-col md:flex-row justify-center items-center w-3/5 md:w-4/5 lg:w-3/5 p-2 mt-10">
            <a href="{{route('teams.index')}}">
                <div class="flex justify-center items-center p-2 m-3 bg-black opacity-75 border-white border-2 rounded-lg">
                    <div class="flex flex-col items-center pt-2">
                            <img src="{{ asset('img/clipboard.png') }}" class="w-3/5 transform hover:scale-150 transition-transform duration-500 mx-auto my-auto">
                        <div class="text-center relative bg-white w-4/5 my-3 rounded">
                            <h2 class="text-black text-xl font-semibold p-1">GESTIÓN DE EQUIPOS</h2>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('games.index')}}">
                <div class="flex justify-center items-center p-2 m-3 bg-black opacity-75 border-white border-2 rounded-lg">
                    <div class="flex flex-col items-center pt-2">
                        <img src="{{ asset('img/game.png') }}" class="w-3/5 transform hover:scale-150 transition-transform duration-500 mx-auto my-auto">
                        <div class="text-center relative bg-white w-4/5 my-3 rounded">
                            <h2 class="text-black text-xl font-semibold p-1">GESTIÓN DE PARTIDOS</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        {{-- <h1>ESTA ES LA PÁGINA PRINCIPAL</h1>

        <p>Aquí van dos cuadrados con dos imágenes que representarán estos dos enlaces:</p>

        <ul>
            <li><a href="{{route('teams.index')}}">GESTIÓN DE EQUIPOS</a></li>
            <br><br>
            <li><a href="{{route('games.index')}}">GESTIÓN DE PARTIDOS</a></li>
        </ul> --}}
        
    </main>
    
@endsection