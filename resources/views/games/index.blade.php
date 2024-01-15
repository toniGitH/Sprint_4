@extends('layouts.gamesCrudPage_layout')

@section('title', 'Indice de partidos')

@section('content')

<div class="container pb-16 mx-auto mt-32 lg:mt-20 relative md:static md:w-3/4">
    @if (session('warning'))
        <div class="w-11/12 lg:w-1/2 p-20 text-3xl text-center absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 alert alert-info mx-auto bg-red-500 rounded-xl text-white font-semibold z-50">
            {{ session('warning') }}
        </div>
    @endif
    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-5 md:bottom-20">{{$games->links('vendor.pagination.simple-tailwind')}}</div>
    <div class="flex flex-col text-white items-center mb-4 md:grid grid-cols-12 gap-5 mt-14 md:mt-8">
            @foreach ($games as $game)
                <a href="{{route('games.show', $game->id)}}" class="items-center bg-black opacity-90 border-slate-600 hover:border-slate-300 border-2 rounded-md w-2/3 md:w-full col-span-12 md:col-span-6 ">
                    <div class="text-center pt-3 pb-1 group">
                        <p class="font-semibold text-sm md:text-lg ">Jornada {{$game->gameweek}}</p>
                        <p class="font-semibold text-sm md:text-lg ">{{$game->local->name}} vs {{$game->visitor->name}}</p>
                        <p class="text-slate-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Gestionar partido</p>
                    </div>
                </a>
            @endforeach
    </div>
</div>

    {{-- PAGINADOR: esta es la instrucción que se debe usar para agregar el paginador --}}
    {{-- IMPORTANTE: para que funcione, el método index del controller debe llamar al método ->paginate() --}}
    {{-- {{$games->links()}} --}} 

@endsection