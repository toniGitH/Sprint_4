<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder con datos de prueba para rellenar la tabla teams de la base de datos
        // No uso factories para poder especificar datos más reales manualmente
        $game1 = new Game();
        $game1->gameweek = 1;
        $game1->date = "2024-01-01";
        $game1->local_team_id = 1;
        $game1->visitor_team_id = 2;
        $game1->local_score = 1;
        $game1->visitor_score = 3;
        $game1->save();

        $game1 = new Game();
        $game1->gameweek = 1;
        $game1->date = "2024-01-01";
        $game1->local_team_id = 3;
        $game1->visitor_team_id = 4;
        $game1->local_score = 0;
        $game1->visitor_score = 0;
        $game1->save();

        $game1 = new Game();
        $game1->gameweek = 1;
        $game1->date = "2024-01-01";
        $game1->local_team_id = 5;
        $game1->visitor_team_id = 6;
        $game1->local_score = 0;
        $game1->visitor_score = 0;
        $game1->save();
    }
}
