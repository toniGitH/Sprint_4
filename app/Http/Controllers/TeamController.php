<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{

    public function index(){ // Este método devuelve TODOS los registros de la tabla teams

        // Esta instrucción devuelve TODOS los registros (sin paginar)
        $teams = Team::all();
        //$teams = Team::orderBy('name', 'asc')->get();// Si lo queremos ordenado hay que usar ->get()
        //$teams = Team::orderBy('id', 'desc')->get();// Si lo queremos ordenado hay que usar ->get()

        // Esta instrucción devuelve los registros paginados
        //$teams = Team::paginate(5);
        //$teams = Team::orderBy('id', 'desc')->paginate(); //Si lo queremos ordenado

        return view("teams/index", compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
