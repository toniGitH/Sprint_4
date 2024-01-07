@extends('layouts.crudPage_layout')

@section('title', 'Indice de equipos')

@section('content')

    <h1>Este es el índice de la página de Equipos</h1>

    <ul>
        @foreach ($teams as $team)
            <li>
                {{$team->name}}
            </li>
        @endforeach
    </ul>

    <a href="{{route('teams.create')}}">Crear Equipo</a>

    {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
    {{-- {{$teams->links()}} --}}

@endsection