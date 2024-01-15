@extends('layouts.gamesCrudPage_layout')

@section('title', 'Crear Partido')

@section('content')
    
<div class="container mx-auto mt-32 md:mt-12">

    <div class="bg-slate-200 opacity-90 w-11/12 sm:w-10/12 md:w-9/12 lg:w-7/12 mx-auto p-2 flex flex-col justify-center items-center mt-12 mb-2 gap-y-2 rounded-lg">
        
        <p class="text-center text-2xl mb-1 font-bold">ALTA DE UN NUEVO PARTIDO</p>

        <form action="{{route('games.store')}}" method="POST" class="flex flex-col items-center w-3/4 md:w-3/4 lg:w-8/12 xl:w-8/12 gap-y-2">

            {{-- Rescatamos los equipos desde el modelo Team para poder usar sus propiedades (name) en el formulario --}}
            @php
            $teams = App\Models\Team::all();
            @endphp

            {{-- Directiva de generación de token --}}
            @csrf

            <div class="container">

                {{-- Input para la jornada y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex">
                        <label for="gameweekidid" class="mr-3">Jornada</label>
                        <select name="gameweek" id="gameweekid">
                            <option value="">--</option>
                            @for ($i = 1; $i <= 24; $i++)
                                <option value="{{ $i }}" {{ old('gameweek') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="text-red-600 absolute bottom-2 left-0">@error('gameweek')*{{$message}}@enderror</div>
                </div>
                
                {{-- Input para la fecha y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex">
                        <label for="dateid" class="col-span-2 text-end mr-2">Fecha</label>
                        <input type="date" name="date" value="{{ old('date') }}" class="col-span-4">
                    </div>
                    <div class="text-red-600 col-span-6 absolute bottom-2 left-0">@error('date')*{{$message}}@enderror</div>
                </div>
                
                {{-- Input para el equipo local y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex flex-col sm:flex-row">
                        <label for="localteamid" class="col-span-2 mr-2">Equipo Local</label>
                        <select name='local_team_id' id="localteamid" class="col-span-4">
                            <option value="" {{ old('local_team_id') == "" ? 'selected' : '' }}>Selecciona el equipo local</option>
                            @foreach ($teams as $team)
                                <option value='{{ $team->id }}' {{ old('local_team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-red-600 col-span-6 absolute bottom-2 left-0">@error('local_team_id')*{{$message}}@enderror</div>
                </div>

                {{-- Input para la anotación local y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex">
                        <label for="localscoreid" class="col-span-2 text-end mr-2">Goles local</label>
                        <input type='number' name='local_score' value='{{ old("local_score") }}' min='0' max='99' placeholder='--' class="col-span-4">
                    </div>
                    <div class="text-red-600 col-span-6 absolute bottom-2 left-0">@error('local_score')*{{$message}}@enderror</div>
                </div>

                {{-- Input para el equipo visitante y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex flex-col sm:flex-row">
                        <label for="visitorteamid" class="col-span-2 mr-2">Equipo Visitante</label>
                        <select name='visitor_team_id' id="visitorteamid" class="col-span-4">
                            <option value="" {{ old('visitor_team_id') == "" ? 'selected' : '' }}>Selecciona el equipo visitante</option>
                            @foreach ($teams as $team)
                                <option value='{{ $team->id }}' {{ old('visitor_team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-red-600 col-span-6 absolute bottom-2 left-0">@error('visitor_team_id')*{{$message}}@enderror</div>
                </div>

                {{-- Input para la anotación visitante y mensaje de validación --}}
                <div class="flex flex-col pb-7 relative items-start">
                    <div class="flex">
                        <label for="visitorscoreid" class="col-span-2 text-end mr-2">Goles visitante</label>
                        <input type='number' name='visitor_score' value='{{ old("visitor_score") }}' min='0' max='99' placeholder='--' class="col-span-4">
                    </div>
                    <div class="text-red-600 col-span-6 absolute bottom-2 left-0">@error('visitor_score')*{{$message}}@enderror</div>
                </div>
    
            </div>

            {{-- Botón de tipo submit para enviar el formulario --}}
            <button type="submit" class="w-full lg:w-2/3 mx-auto p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-green-500 hover:text-white">CREAR PARTIDO</button>

        </form>

    </div>

</div>

@endsection