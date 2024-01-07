@extends('layouts.crudPage_layout')

@section('title', 'Datos del equipo ' . $team->name) <!-- Aquí no lleva endsection porque no pongo contenido dentro, sólo el parámetro title -->

@section('content')

    <h1>Aquí es donde aparecen los datos del equipo {{$team->name}}</h1>
    <p><strong>Nombre: </strong>{{$team->name}}</p>
    <p><strong>Ciudad: </strong>{{$team->city}}</p>

@endsection