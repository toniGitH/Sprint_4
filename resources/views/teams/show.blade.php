@extends('layouts.teamsCrudPage_layout')

@section('title', 'Datos del equipo ' . $team->name)

@section('content')

    <div class="container mx-auto mt-32 md:mt-20">

        <div class="bg-slate-200 opacity-90 w-1/2 mx-auto p-6 flex flex-col justify-center items-center mt-12 gap-y-4 rounded-lg">
            <p class="text-xl font-bold text-slate-500 text-center">NOMBRE DEL EQUIPO</p>
            <p class="text-3xl font-bold text-center">{{$team->name}}</p>
            <p class="text-xl font-bold text-slate-500 text-center">CIUDAD</p>
            <p class="text-2xl font-bold text-center">{{$team->city}}</p>
            
            <div class="mt-3 w-full gap-4 lg:w-1/2 flex flex-col lg:flex-row justify-between items-center mx-auto">
                <a href="{{route('teams.edit', $team)}}">
                    <button class="p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-green-500 hover:text-white">Editar equipo</button>
                </a>
                <form action="{{route('teams.destroy', $team)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="p-2 rounded-md transition-colors duration-300 ease-in-out bg-white hover:bg-red-500 hover:text-white">Eliminar equipo</button>
                </form>
            </div>
        </div>

        @if (session('warning'))
            <div class="w-4/6 alert alert-info mx-auto mt-8 bg-red-500 text-center mb-6 py-4 rounded-xl text-white font-semibold">
                {{ session('warning') }}
            </div>
        @endif
        
    </div>
    
@endsection