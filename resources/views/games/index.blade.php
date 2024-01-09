@extends('layouts.crudPage_layout')

@section('title', 'Indice de partidos')

@section('content')

    <h1>Este es el índice de la página de Partidos</h1>

    <ul>
        @foreach ($games as $game)
            <li>
                {{$game->gameweek}}
                {{$game->local->name}} vs {{$game->visitor->name}}
            </li>
        @endforeach
    </ul>

    {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
    {{-- {{$teams->links()}} --}}

@endsection