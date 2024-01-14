@extends('layouts.teamsCrudPage_layout')

@section('title', 'Indice de equipos')

@section('content')

    <div class="container pb-16 mt-32 mx-auto relative md:static md:w-3/4">
        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-5 md:bottom-20">{{$teams->links('vendor.pagination.simple-tailwind')}}</div>
        <div class="flex flex-col  text-white items-center mb-4 md:grid grid-cols-12 gap-10 mt-14 md:mt-8">
                @foreach ($teams as $team)
                    <a href="{{route('teams.show', $team->id)}}" class="items-center bg-black rounded-md w-2/3 md:w-full col-span-12 md:col-span-4 ">
                        <div class="text-center pt-4 pb-1 group">
                            <p class="font-semibold text-sm md:text-lg ">{{$team->name}}</p>
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