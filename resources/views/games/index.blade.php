@extends('layouts.gamesCrudPage_layout')

@section('title', 'Indice de partidos')

@section('content')

<div class="container pb-16 mt-32 mx-auto relative md:static md:w-3/4">
    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-5 md:bottom-20">{{$games->links('vendor.pagination.simple-tailwind')}}</div>
    <div class="flex flex-col text-white items-center mb-4 md:grid grid-cols-12 gap-10 mt-14 md:mt-8">
            @foreach ($games as $game)
                <a href="{{route('games.show', $game->id)}}" class="items-center bg-black opacity-90 border-slate-600 hover:border-slate-300 border-2 rounded-md w-2/3 md:w-full col-span-12 md:col-span-6 ">
                    <div class="text-center pt-4 pb-1 group">
                        <p class="font-semibold text-sm md:text-lg ">Jornada {{$game->gameweek}}</p>
                        <p class="font-semibold text-sm md:text-lg ">{{$game->local->name}} vs {{$game->visitor->name}}</p>
                        <p class="text-slate-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Gestionar partido</p>
                    </div>
                </a>
            @endforeach
    </div>
</div>

    {{-- <ul style="display:flex">
        @foreach ($games as $game)
        <a href="{{route('games.show', $game->id)}}" style="text-decoration: none; color:white">
            <li style="display:flex; flex-direction:column; align-items:center; background-color: grey; margin: 10px; padding: 10px; list-style:none;">
                <span>Jornada: {{$game->gameweek}}</span>
                <span>Fecha del partido: {{$game->date}}</span>
                <span>{{$game->local->name}} vs {{$game->visitor->name}}</span>
                <span>{{$game->local_score}} - {{$game->visitor_score}}</span>
            </li>
        </a>
        @endforeach
    </ul> --}}

    <a href="{{route('games.create')}}">Crear Partido</a>

    {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
    {{-- {{$teams->links()}} --}}

@endsection