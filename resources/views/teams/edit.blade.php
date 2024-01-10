@extends('layouts.crudPage_layout')

@section('title', 'Editar el equipo ' . $team->name)

@section('content')
    <h1>Aquí está el formulario para editar un equipo</h1>
    
    <form action="{{route('teams.update', $team)}}" method="POST">

        {{-- Directiva de generación de token --}}
        @csrf
        {{-- Directiva para informar de que se usará el método PUT --}}
        @method('PUT')

        {{-- Campo para el nombre del equipo y mensaje de validación --}}
        <label>
            Nombre del equipo:<br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="name" value="{{old('name', $team->name)}}">
        </label>
            @error('name')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}
        
        {{-- Campo para la ciudad del equipo y mensaje de validación --}}
        <label>
            Ciudad del equipo:
            <br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="city" value="{{old('city', $team->city)}}">
        </label>
            @error('city')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}
        
        {{-- Boton de tipo submit para enviar el formulario --}}
        <button type="submit">ACTUALIZAR</button>

    </form>

@endsection