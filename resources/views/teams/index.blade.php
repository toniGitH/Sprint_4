@extends('layouts.crudPage_layout')

@section('title', 'Indice de equipos')

@section('content')

    <h1>Este es el índice de la página de Equipos</h1>
    
    {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
    {{-- {{$teams->links()}} --}}

@endsection