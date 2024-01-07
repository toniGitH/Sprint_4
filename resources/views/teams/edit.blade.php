@extends('layouts.crudPage_layout')

@section('title', 'Editar el equipo ' . $team->name)

@section('content')
    <h1>Aquí está el formulario para editar un curso</h1>
    
    <form action="" method="">

        

        {{-- Campo para el nombre del equipo y mensaje de validación --}}
        <label>
            Nombre del equipo:<br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="name" value="{{old('name', $team->name)}}">
        </label>
            @error('name')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}
        
        {{-- Campo para la categoría del curso y mensaje de validación --}}
        <label>
            Ciudad del equipo:
            <br>{{-- Eliminar <br> y aplicar css --}}
            <input type="text" name="city" value="{{old('city', $team->city)}}">
        </label>
            @error('city')
                <br><span>*{{$message}}</span><br>
            @enderror
        <br><br>{{-- Eliminar <br> y aplicar css --}}
        
        {{-- Boton/input de tipo submit para enviar el formulario --}}
        <button type="submit">ACTUALIZAR</button>

    </form>

@endsection