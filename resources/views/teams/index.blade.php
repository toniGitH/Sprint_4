@extends('layouts.teamsCrudPage_layout')

@section('title', 'Indice de equipos')

@section('content')

    <div class="container mt-20 mx-auto w-3/4">
        <h2 class="text-center my-6 text-2xl">Listado de equipos</h2>
        <div class="grid grid-cols-12 gap-12">
                @foreach ($teams as $team)
                    <a href="{{route('teams.show', $team->id)}}" class="col-span-4 bg-slate-300 rounded-md">
                        <div class="text-center pt-4 pb-1 group">
                            <p>{{$team->name}}</p>
                            <p class="text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Ver datos</p>
                        </div>
                    </a>
                @endforeach
        </div>
        


{{--         <div class="grid grid-cols-12 gap-12">
            @foreach ($teams as $team)
                <div class="col-span-4 bg-slate-300 text-center py-2 rounded-md">
                    <a href="{{route('teams.show', $team->id)}}">{{$team->name}}</a>
                    <p class="opacity-0 hover:opacity-100">Ver datos</p>
                </div>
            @endforeach
        </div> --}}
        

        {{-- PAGINADOR: descomentar esto si se quiere usar el paginador --}}
        {{-- {{$teams->links()}} --}}
    </div>

    

@endsection