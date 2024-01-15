<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Game;
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
        //$teams = Team::all();
        //$teams = Team::orderBy('name', 'asc')->get();// Si lo queremos ordenado hay que usar ->get()
        //$teams = Team::orderBy('id', 'desc')->get();// Si lo queremos ordenado hay que usar ->get()

        // Esta instrucción devuelve los registros paginados
        //$teams = Team::paginate(6);
        $teams = Team::orderBy('name', 'asc')->paginate(9); //Si lo queremos ordenado
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
        return redirect()->route('teams.show', $team)->with('warning', '¡¡ Equipo creado con éxito !!');
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
        return redirect()->route('teams.show', $team)->with('warning', 'Actualización realizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        // Añadimos validación previa para determinar si el equipo ha jugado algún partido
        // Si el equipo ha jugado algún partido, se ejecutará el código del if y ahí acabará la ejecución del método
        // Si el equipo no ha jugado ningún partido, el flujo se saldrá del dowhile y ejecutará la función delete()
        
        $games = Game::all();
        $i=0;
        $hasGame=false;
        do {
            if ($team->id == $games[$i]->local->id || $team->id == $games[$i]->visitor->id) {
                $hasGame=true;
                return redirect()->route('teams.show', $team)->with('warning', 'Esta temporada ya no puedes eliminar este 
                equipo porque ya ha participado en algún partido');
            } 
            else {
                $i++;
            }
        } while ($i<$games->count() && $hasGame==false);

        // Estas dos líneas son las que se encargan de eliminar el registro.
        $team->delete();
        return redirect()->route('teams.index');
        
    }
}
