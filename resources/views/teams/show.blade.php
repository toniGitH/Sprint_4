@extends('layouts.teamsCrudPage_layout')

@section('title', 'Datos del equipo ' . $team->name)

@section('content')

    <div class="container mt-20 mx-auto">

        <div class="bg-slate-200 opacity-90 w-1/2 mx-auto p-6 flex flex-col justify-center items-center mt-12 gap-y-4 rounded-lg">
            <p class="text-xl font-bold text-slate-500">NOMBRE DEL EQUIPO</p>
            <p class="text-3xl font-bold">{{$team->name}}</p>
            <p class="text-xl font-bold text-slate-500">CIUDAD</p>
            <p class="text-2xl font-bold">{{$team->city}}</p>
            
            <div class="mt-3 w-1/2 flex justify-between items-center mx-auto">
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
            <div class="w-4/6 alert alert-info mx-auto mt-8 bg-red-500 text-center py-4 rounded-xl text-white font-semibold">
                {{ session('warning') }}
            </div>
        @endif
        
    </div>
    
@endsection