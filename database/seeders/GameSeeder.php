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
        // Esta estructura es muy manual, pero funciona correctamente. La sintáxis más abreviada y correcta está
        // después de estas líneas
        
        $game1 = new Game();
        $game1->gameweek = 1;
        $game1->date = "2024-01-01";
        $game1->local_team_id = 1;
        $game1->visitor_team_id = 2;
        $game1->local_score = 1;
        $game1->visitor_score = 3;
        $game1->save();

        $game2 = new Game();
        $game2->gameweek = 1;
        $game2->date = "2024-01-01";
        $game2->local_team_id = 3;
        $game2->visitor_team_id = 4;
        $game2->local_score = 0;
        $game2->visitor_score = 1;
        $game2->save();

        $game3 = new Game();
        $game3->gameweek = 1;
        $game3->date = "2024-01-01";
        $game3->local_team_id = 5;
        $game3->visitor_team_id = 6;
        $game3->local_score = 0;
        $game3->visitor_score = 0;
        $game3->save();

        $game4 = new Game();
        $game4->gameweek = 1;
        $game4->date = "2024-01-01";
        $game4->local_team_id = 7;
        $game4->visitor_team_id = 8;
        $game4->local_score = 1;
        $game4->visitor_score = 3;
        $game4->save();

        $game5 = new Game();
        $game5->gameweek = 1;
        $game5->date = "2024-01-01";
        $game5->local_team_id = 9;
        $game5->visitor_team_id = 10;
        $game5->local_score = 5;
        $game5->visitor_score = 0;
        $game5->save();

        $game6 = new Game();
        $game6->gameweek = 1;
        $game6->date = "2024-01-01";
        $game6->local_team_id = 11;
        $game6->visitor_team_id = 12;
        $game6->local_score = 0;
        $game6->visitor_score = 3;
        $game6->save();

        $game7 = new Game();
        $game7->gameweek = 2;
        $game7->date = "2024-01-08";
        $game7->local_team_id = 2;
        $game7->visitor_team_id = 3;
        $game7->local_score = 4;
        $game7->visitor_score = 3;
        $game7->save();

        $game8 = new Game();
        $game8->gameweek = 2;
        $game8->date = "2024-01-08";
        $game8->local_team_id = 4;
        $game8->visitor_team_id = 5;
        $game8->local_score = 0;
        $game8->visitor_score = 0;
        $game8->save();

        $game9 = new Game();
        $game9->gameweek = 2;
        $game9->date = "2024-01-08";
        $game9->local_team_id = 6;
        $game9->visitor_team_id = 7;
        $game9->local_score = 7;
        $game9->visitor_score = 3;
        $game9->save();

        $game10 = new Game();
        $game10->gameweek = 2;
        $game10->date = "2024-01-08";
        $game10->local_team_id = 8;
        $game10->visitor_team_id = 9;
        $game10->local_score = 1;
        $game10->visitor_score = 3;
        $game10->save();

        $game11 = new Game();
        $game11->gameweek = 2;
        $game11->date = "2024-01-08";
        $game11->local_team_id = 10;
        $game11->visitor_team_id = 11;
        $game11->local_score = 5;
        $game11->visitor_score = 5;
        $game11->save();

        $game12 = new Game();
        $game12->gameweek = 2;
        $game12->date = "2024-01-08";
        $game12->local_team_id = 12;
        $game12->visitor_team_id = 1;
        $game12->local_score = 0;
        $game12->visitor_score = 3;
        $game12->save();

        // Esta sintáxis sería más correcta y más reducida (un "Game::create" para cada partido que queremos crear):
        /*
            Game::create([
                'gameweek' => 1,
                'date' => "2024-01-08",
                'local_team_id' => 1,
                'visitor_team_id' => 2,
                'local_score' = 0;
                'visitor_score' = 3;
            ]);
            Game::create([
                'gameweek' => 1,
                'date' => "2024-01-08",
                'local_team_id' => 3,
                'visitor_team_id' => 4,
                'local_score' = 0;
                'visitor_score' = 0;
            ]);
        */
    }
}
