@extends('layouts.gamesCrudPage_layout')

@section('title', 'Crear Partido')

@section('content')
    
<div class="container mx-auto mt-32 md:mt-20">

    <div class="bg-slate-200 opacity-90 w-5/6 md:w-11/12 mx-auto p-6 flex flex-col justify-center items-center mt-12 gap-y-4 rounded-lg">
        
        <p class="text-center text-2xl mb-4 font-bold">ALTA DE UN NUEVO PARTIDO</p>

        <form action="{{route('games.store')}}" method="POST" class="flex flex-col w-11/12 gap-y-6 bg-red-300">

            {{-- Rescatamos los equipos desde el modelo Team para poder usar sus propiedades (name) en el formulario --}}
            @php
            $teams = App\Models\Team::all();
            @endphp

            {{-- Directiva de generación de token --}}
            @csrf

            <div class="grid grid-cols-12">

                {{-- Input para la jornada y mensaje de validación --}}
                <label for="gameweekidid" class="col-span-2">Jornada</label>
                <select name="gameweek" id="gameweekid" class="col-span-4">
                    <option value="">--</option>
                    @for ($i = 1; $i <= 24; $i++)
                        <option value="{{ $i }}" {{ old('gameweek') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                <div class="text-red-600 col-span-6">@error('gameweek')*{{$message}}@enderror</div>

                {{-- Input para la fecha y mensaje de validación --}}
                <label for="dateid" class="col-span-2">Fecha</label>
                <input type="date" name="date" value="{{ old('date') }}" class="col-span-4">
                <div class="text-red-600 col-span-6">@error('date')*{{$message}}@enderror</div>

                {{-- Input para el equipo local y mensaje de validación --}}
                <label for="localteamid" class="col-span-2">Equipo Local</label>
                <select name='local_team_id' id="localteamid" class="col-span-4">
                    <option value="" {{ old('local_team_id') == "" ? 'selected' : '' }}>Selecciona el equipo local</option>
                    @foreach ($teams as $team)
                        <option value='{{ $team->id }}' {{ old('local_team_id') == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
                <div class="text-red-600 col-span-6">@error('local_team_id')*{{$message}}@enderror</div>

                {{-- Input para la anotación local y mensaje de validación --}}
                <label for="localscoreid" class="col-span-2">Goles</label>
                <input type='number' name='local_score' value='{{ old("local_score") }}' min='0' max='99' placeholder='local' class="col-span-4">
                <div class="text-red-600 col-span-6">@error('local_score')*{{$message}}@enderror</div>

                {{-- Input para el equipo visitante y mensaje de validación --}}
                <label for="visitorteamid" class="col-span-2">Equipo Visitante</label>
                <select name='visitor_team_id' id="visitorteamid" class="col-span-4">
                    <option value="" {{ old('visitor_team_id') == "" ? 'selected' : '' }}>Selecciona el equipo visitante</option>
                    @foreach ($teams as $team)
                        <option value='{{ $team->id }}' {{ old('visitor_team_id') == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
                <div class="text-red-600 col-span-6">@error('visitor_team_id')*{{$message}}@enderror</div>

                {{-- Input para la anotación visitante y mensaje de validación --}}
                <label for="visitorscoreid" class="col-span-2">Goles</label>
                <input type='number' name='visitor_score' value='{{ old("visitor_score") }}' min='0' max='99' placeholder='visit' class="col-span-4">
                <div class="text-red-600 col-span-6">@error('visitor_score')*{{$message}}@enderror</div>
            </div>

            {{-- Botón de tipo submit para enviar el formulario --}}
            <button type="submit">GUARDAR</button>

        </form>

@endsection