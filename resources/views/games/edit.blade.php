@extends('layouts.crudPage_layout')

@section('title', 'Editar partido')

@section('content')
    <h1>Aquí está el formulario para editar un partido</h1>
    
    <form action="" method="">

        {{-- Directiva de generación de token --}}
        @csrf

        {{-- Campo para la jornada y mensaje de validación --}}
        <label>
            Jornada:
            <select name="gameweek">
                <option value="">--</option>
                @for ($i = 1; $i <= 20; $i++)
                    <option value="{{ $i }}" {{ old('gameweek', $game->gameweek) == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </label>
        
        
        {{-- Boton/input de tipo submit para enviar el formulario --}}
        <button type="submit">ACTUALIZAR</button>

    </form>

@endsection