@extends('layouts.teamsCrudPage_layout')

@section('title', 'Indice de equipos')

@section('content')

    <div CLASS="absolute bottom-20 right-10">{{$teams->links('vendor.pagination.simple-tailwind')}}</div>
    
    <div class="container mt-40 mx-auto w-3/4">
        <div class="grid grid-cols-12 gap-12 text-white">
                @foreach ($teams as $team)
                    <a href="{{route('teams.show', $team->id)}}" class="col-span-4 bg-black rounded-md">
                        <div class="text-center pt-4 pb-1 group">
                            <p class="text-lg font-semibold">{{$team->name}}</p>
                            <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Ver datos del equipo</p>
                        </div>
                    </a>
                @endforeach
        </div>
    </div>

    {{-- PAGINADOR: esta es la instrucción que se debe usar para agregar el paginador --}}
    {{-- IMPORTANTE: para que funcione, el método index del controller debe llamar al método ->paginate() --}}
    {{-- {{$teams->links()}} --}}  

@endsection