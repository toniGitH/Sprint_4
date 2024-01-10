@extends('layouts.crudPage_layout')

@section('title', 'Crear Partido')

@section('content')
    <h1>Aquí está el formulario para crear un partido</h1>
    
    <form action="{{route('games.store')}}" method="POST">

        {{-- Rescatamos los equipos desde el modelo Team para poder usar sus propiedades (name) en el formulario --}}
        @php
            $teams = App\Models\Team::all();
        @endphp

        {{-- Directiva de generación de token --}}
        @csrf

        {{--Input para la jornada y su correspondiente mensaje de validación  --}}
        <label>
            Jornada:
            <select name="gameweek">
                <option value="">--</option>
              @for ($i = 1; $i <= 20; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
              @endfor
            </select>
        </label>
        @error('gameweek')
            {{$message}}
        @enderror
        <br><br>

        {{--Input para la fecha y su correspondiente mensaje de validación  --}}
        <label>
            Fecha:
            <input type="date" name="date">
        </label>
        @error('date')
            {{$message}}
        @enderror
        <br><br>

        {{--Input para el equipo local y su correspondiente mensaje de validación  --}}
        <label>
            Equipo Local:
            <select name='local_team_id'>
                <option value="">Selecciona el equipo local</option>
                @foreach ($teams as $team)
                  <option value='{{ $team->id }}'>{{ $team->name }}</option>
                @endforeach
            </select>
        </label>
        @error('local_team_id')
            {{$message}}
        @enderror
        <br><br>

        {{--Input para la anotación local y su correspondiente mensaje de validación  --}}
        <label>
            Goles marcados:
            <input type='number' name='local_score' value='' min='0' max='99' placeholder='local'>
        </label>
        @error('local_score')
        {{$message}}
        @enderror
        <br><br>

        {{--Input para el equipo visitante y su correspondiente mensaje de validación  --}}
        <label>
            Equipo Visitante:
            <select name='visitor_team_id'>
                <option value="">Selecciona el equipo visitante</option>
                @foreach ($teams as $team)
                  <option value='{{ $team->id }}'>{{ $team->name }}</option>
                @endforeach
            </select>
        </label>
        @error('visitor_team_id')
        {{$message}}
        @enderror
        <br><br>

        {{--Input para la anotación visitante y su correspondiente mensaje de validación  --}}
        <label>
            Goles marcados:
            <input type='number' name='visitor_score' value='' min='0' max='99' placeholder='visit'>
        </label>
        @error('visitor_score')
        {{$message}}
        @enderror
        <br><br>
        
        {{--Botón de tipo submit para enviar el formulario  --}}
        <button type="submit">GUARDAR</button>

    </form>

@endsection