@extends('layouts.staticPage_layout')

@section('title', 'Home')

@section('content')
    <h1>ESTA ES LA PÁGINA PRINCIPAL</h1>

    <p>Aquí van dos cuadrados con dos enlaces:</p>

    <ul>
        <li><a href="{{route('teams.index')}}">GESTIÓN DE EQUIPOS</a></li>
        <li>ENLACE A GESTIÓN DE PARTIDOS</li>
    </ul>
@endsection