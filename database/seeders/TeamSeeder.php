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
        // Esta estructura es muy manual, pero funciona correctamente. La sintáxis más abreviada y correcta está
        // después de estas líneas

        $team1 = new Team();
        $team1->name = "New Team";
        $team1->city = "Tokio";
        $team1->save();

        $team2 = new Team();
        $team2->name = "Otomo";
        $team2->city = "Tokio";
        $team2->save();

        $team3 = new Team();
        $team3->name = "Nord Ford FC";
        $team3->city = "Osaka";
        $team3->save();

        $team4 = new Team();
        $team4->name = "Mambo FC";
        $team4->city = "Osaka";
        $team4->save();

        $team5 = new Team();
        $team5->name = "Azuma";
        $team5->city = "Kyoto";
        $team5->save();

        $team6 = new Team();
        $team6->name = "Naught boys";
        $team6->city = "Kyoto";
        $team6->save();

        $team7 = new Team();
        $team7->name = "Magestic";
        $team7->city = "Yokohama";
        $team7->save();

        $team8 = new Team();
        $team8->name = "Hirado";
        $team8->city = "Yokohama";
        $team8->save();

        $team9 = new Team();
        $team9->name = "New Pi";
        $team9->city = "Okinawa";
        $team9->save();

        $team10 = new Team();
        $team10->name = "Muppet FC";
        $team10->city = "Okinawa";
        $team10->save();

        $team11 = new Team();
        $team11->name = "Hod Dog";
        $team11->city = "Hokkaido";
        $team11->save();

        $team12 = new Team();
        $team12->name = "Stampton FC";
        $team12->city = "Hokkaido";
        $team12->save();

        // Esta sintáxis sería más correcta y más reducida (un "Team::create" para cada eqjuipo que queremos crear):
        /*
            Team::create([
                'name' => "New Team",
                'city' => "Tokio"
            ]);
            Team::create([
                'name' => "Otomo",
                'city' => "Tokio"
            ])
        */
    }
}
