@extends('layouts.teamsCrudPage_layout')

@section('title', 'Editar ' . $team->name)

@section('content')
    
    <div class="container mx-auto mt-32 md:mt-20">

        <div class="bg-slate-200 opacity-90 w-5/6 md:w-1/2 mx-auto p-6 flex flex-col justify-center items-center mt-12 gap-y-4 rounded-lg">
            
            <p class="text-center text-2xl mb-4 font-bold">EDITAR EQUIPO</p>
    
            <form action="{{route('teams.update', $team)}}" method="POST" class="flex flex-col w-3/4 gap-y-6">

                {{-- Directiva de generación de token --}}
                @csrf
                {{-- Directiva para informar de que se usará el método PUT --}}
                @method('PUT')

                {{-- Input para el nombre del equipo y mensaje de validación --}}
                <div class="flex flex-col relative pb-5 lg:pb-0">
                    <label for="nameid" class="text-center mb-1">Nombre del equipo</label>
                    <input type="text" name="name" id="nameid" value="{{old('name', $team->name)}}" class="mb-6 rounded-sm">
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-full text-red-600">
                        @error('name')*{{$message}}@enderror
                    </div>
                </div>

                {{-- Input para la ciudad del equipo y mensaje de validación --}}
                <div class="flex flex-col relative pb-5 lg:pb-0">
                    <label for="cityid" class="text-center mb-1">Ciudad del equipo</label>
                    <input type="text" name="city" id="cityid" value="{{old('city', $team->city)}}" class="mb-6 rounded-sm">
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-full text-red-600">
                        @error('city')*{{$message}}@enderror
                    </div>
                </div>
                
                {{-- Boton de tipo submit para enviar el formulario --}}
                {{-- <button type="submit">ACTUALIZAR EQUIPO</button> --}}
                <button type="submit" class="w-3/4 lg:w-1/3 mx-auto p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-green-500 hover:text-white">ACTUALIZAR</button>

            </form>

        </div>

    </div>

@endsection