@extends('layouts.gamesCrudPage_layout')

@section('title', 'Indice de partidos')

@section('content')

    {{-- ATENCIÓN: ELIMINAR ESTILOS EN LÍNEA Y SUSTITUIR POR TAILWIND --}}
    
    <h1>Este es el índice de la página de Partidos</h1>

    <ul style="display:flex">
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
    </ul>

    <a href="{{route('games.create')}}">Crear Partido</a>

    {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
    {{-- {{$teams->links()}} --}}

@endsection