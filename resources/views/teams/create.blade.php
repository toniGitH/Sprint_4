@extends('layouts.crudPage_layout')

@section('title', 'Crear Equipo')

@section('content')
    <h1>Aquí está el formulario para crear un equipo</h1>
    
    <form action="" method="">
        
        {{-- Directiva de generación de token --}}
        @csrf

        {{-- Campo para el nombre del equipo y mensaje de validación --}}
        <label>
            Nombre del equipo:<br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="name" value="{{old('name')}}">
        </label>
            @error('name')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}

        {{-- Campo para la ciudad del equipo y mensaje de validación --}}
        <label>
            Ciudad del equipo:
            <br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="city" value="{{old('city')}}">
        </label>
            @error('city')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}
        
        {{-- Boton/input de tipo submit para enviar el formulario --}}
        <button type="submit">GUARDAR</button>

    </form>

@endsection