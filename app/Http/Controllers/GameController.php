<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Esta instrucción devuelve TODOS los registros (sin paginar)
        //$games = Game::all();
        //$games = Game::orderBy('name', 'asc')->get();// Si lo queremos ordenado hay que usar ->get()
        //$games = Game::orderBy('id', 'desc')->get();// Si lo queremos ordenado hay que usar ->get()

        // Esta instrucción devuelve los registros paginados
        //$games = Game::paginate(5);
        $games = Game::orderBy('gameweek', 'asc')->paginate(6); //Si lo queremos ordenado
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
    public function store(StoreGame $request)
    {
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
    public function edit(Game $game)
    {
        return view("games.edit", compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Game $game, UpdateGame $request){

        $game->update($request->all());
        return redirect()->route('games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
