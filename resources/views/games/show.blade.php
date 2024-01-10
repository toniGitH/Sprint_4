@extends('layouts.crudPage_layout')

@section('title', 'Datos del partido')

@section('content')

    {{-- ATENCIÓN: ELIMINAR ESTILOS EN LÍNEA Y SUSTITUIR POR TAILWIND --}}

    <div style="display:flex; flex-direction:column; align-items:center; background-color: grey; margin: 10px; padding: 10px;">
        <h1>Datos del partido</h1>
        <h2>Jornada número: {{$game->gemeweek}}</h2>
        <span>Fecha del partido: {{$game->date}}</span>
        <span>Jornada número: {{$game->gemeweek}}</span>
        <h3 style="font-weight:bold">{{$game->local->name}} {{$game->local_score}} - {{$game->visitor_score}} {{$game->visitor->name}} </h3>
    </div>
    <br><br>
    <a href="{{route('games.edit', $game)}}"><button>Editar partido</button></a>
    <br><br>
    <form action="{{route('games.destroy', $game)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar partido</button>
    </form>
@endsection