@extends('layouts.crudPage_layout')

@section('title', 'Datos del equipo ' . $team->name)

@section('content')

    <h1>Aquí es donde aparecen los datos del equipo {{$team->name}}</h1>
    <p><strong>Nombre: </strong>{{$team->name}}</p>
    <p><strong>Ciudad: </strong>{{$team->city}}</p>
    
    @if (session('warning'))
        <div class="alert alert-info">
            {{ session('warning') }}
        </div>
    @endif

    <br><br>
    <a href="{{route('teams.edit', $team)}}"><button>Editar equipo</button></a>
    <br><br>
    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar equipo</button>
    </form>

@endsection