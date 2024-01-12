<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\StoreTeam;
use App\Http\Requests\UpdateTeam;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     * Este método devuelve TODOS los registros de la tabla teams
     */
    public function index() 
    { 
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
        return view("teams.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeam $request){
        $team = Team::create($request->all());
        return redirect()->route('teams.show', $team);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view("teams.show", compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("teams.edit", compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Team $team, UpdateTeam $request){

        $team->update($request->all());
        return redirect()->route('teams.show', $team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->games()) {
            /* return redirect()->route('ruta.de.tu.vista')->with('mensaje', 'No se puede eliminar el registro principal porque tiene registros secundarios relacionados.'); */
            return redirect()->route('teams.index');
        }else{
            $team->delete();
            return redirect()->route('teams.index');
        }
        
    }
}
