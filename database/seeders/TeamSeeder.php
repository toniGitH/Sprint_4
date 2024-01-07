<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder con datos de prueba para rellenar la tabla teams de la base de datos
        // No uso factories para poder especificar datos más reales manualmente
        $team1 = new Team();
        $team1->name = "La Merce";
        $team1->city = "Martorell";
        $team1->save();

        $team2 = new Team();
        $team2->name = "Joan Oro";
        $team2->city = "Martorell";
        $team2->save();

        $team3 = new Team();
        $team3->name = "Gabriela Mistral";
        $team3->city = "Abrera";
        $team3->save();

        $team4 = new Team();
        $team4->name = "Salesianos";
        $team4->city = "Abrera";
        $team4->save();

        $team5 = new Team();
        $team5->name = "Trinitarios";
        $team5->city = "Olesa";
        $team5->save();

        $team6 = new Team();
        $team6->name = "Severo Ochoa";
        $team6->city = "Olesa";
        $team6->save();
    }
}
