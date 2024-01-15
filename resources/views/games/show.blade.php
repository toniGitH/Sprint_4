@extends('layouts.gamesCrudPage_layout')

@section('title', 'Datos del partido')

@section('content')

    <div class="container mx-auto mt-32 md:mt-20">

        <div class="bg-slate-200 opacity-90 mx-auto p-6 flex flex-col justify-center items-center mt-12 gap-y-4 rounded-lg w-10/12 md:w-1/2">
            <p class="text-xl font-bold text-slate-500 text-center">JORNADA <span class="text-black font-bold">{{$game->gameweek}}</span></p>
            <p class="text-xl font-bold text-slate-500 text-center">FECHA <span class="text-black font-bold">{{$game->date}}</span></p>
            <div class="flex-col md:flex-row justify-between items-center p-6 w-11/12 bg-white rounded-lg">
                <p class="font-bold text-center w-full text-lg md:text-4xl">{{$game->local->name}} <span class="bg-gray-500 rounded-full ml-2 p-2 text-white">{{$game->local_score}}</span></p>
                <p class="text-lg font-semibold text-center pb-1">vs</p>
                <p class="font-bold text-center text-lg md:text-4xl">{{$game->visitor->name}} <span class="bg-gray-500 rounded-full ml-2 p-2 text-white">{{$game->visitor_score}}</span></p>
            </div>

            <div class="mt-3 gap-4 flex flex-col lg:flex-row justify-between items-center mx-auto w-full lg:w-1/2">
                <a href="{{route('games.edit', $game)}}">
                    <button class="p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-green-500 hover:text-white">Editar partido</button>
                </a>
                <form action="{{route('games.destroy', $game)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-red-500 hover:text-white">Eliminar partido</button>
                </form>
            </div>
        </div>

        @if (session('warning'))
            <div class="w-4/6 alert alert-info mx-auto mt-8 bg-red-500 text-center mb-6 py-4 rounded-xl text-white font-semibold">
                {{ session('warning') }}
            </div>
        @endif
        
    </div>

@endsection