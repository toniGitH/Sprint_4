<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Esta instrucción devuelve TODOS los registros (sin paginar)
        $games = Game::all();
        //$teams = Team::orderBy('name', 'asc')->get();// Si lo queremos ordenado hay que usar ->get()
        //$teams = Team::orderBy('id', 'desc')->get();// Si lo queremos ordenado hay que usar ->get()

        // Esta instrucción devuelve los registros paginados
        //$teams = Team::paginate(5);
        //$teams = Team::orderBy('id', 'desc')->paginate(); //Si lo queremos ordenado

        return view("games/index", compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("games.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gameweek' => 'required',
            'date' => ['required', 'after:today'],
            'local_team_id' => ['required', 'exists:teams,id', 'different:visitor_team_id'],
            'local_score' => 'required',
            'visitor_team_id' => ['required', 'exists:teams,id', 'different:local_team_id'],
            'visitor_score' => 'required'
        ]);

        /* $request->validate([
            'gameweek.required' => 'La jornada es obligatoria',
            'date.required' => 'La fecha es obligatoria',
            'local_team_id.required' => 'Es obligatorio especificar el equipo local',
            'local_score.required' => 'La anotación del equipo local es obligatoria',
            'visitor_team_id.required' => 'Es obligatorio especificar el equipo visitante',
            'visitor_score.required' => 'La anotación del equipo visitante es obligatoria'
        ]); */
        
        $game = Game::create($request->all());
        return redirect()->route('games.show', $game);
        
        // El código anterior equivale al siguiente:
        /* 
            $game = new Game();
            $game->gameweek = $request->gameweek;
            $game->date = $request->date;
            $game->local_team_id = $request->local_team_id;
            $game->local_score = $request->local_score;
            $game->visitor_team_id = $request->visitor_team_id;
            $game->visitor_score = $request->visitor_score;
            $game->save();
            return redirect()->route('games.show', $game);
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view("games.show", compact('game'));
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
