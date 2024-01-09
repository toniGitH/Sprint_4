@extends('layouts.crudPage_layout')

@section('title', 'Crear Partido')

@section('content')
    <h1>Aquí está el formulario para crear un partido</h1>
    
    <form action="{{route('games.store')}}" method="POST">

        {{-- Directiva de generación de token --}}
        @csrf

        <label>
            Jornada:
            <select name="gameweek">
              @for ($i = 1; $i <= 20; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
              @endfor
            </select>
        </label>
        <br><br>
        <label>
            Fecha:
            <input type="date" name="date">
        </label>
        <br><br>
        @php
            $teams = App\Models\Team::all();
        @endphp
        <label>
            Equipo Local:
            <select name='local_team_id'>
                @foreach ($teams as $team)
                  <option value='{{ $team->id }}'>{{ $team->name }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Goles marcados:
            <input type='number' name='local_score' value='' min='0' max='99' placeholder='local'>
        </label>
        <br><br>
        <label>
            Equipo Local:
            <select name='visitor_team_id'>
                @foreach ($teams as $team)
                  <option value='{{ $team->id }}'>{{ $team->name }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Goles marcados:
            <input type='number' name='visitor_score' value='' min='0' max='99' placeholder='visit'>
        </label>

        <button type="submit">GUARDAR</button>

    </form>

@endsection