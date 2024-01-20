<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeamSeeder::class);
        $this->call(GameSeeder::class);
    }

    // Esta sintáxis es más correcta que la anterior, aunque las dos funcionan
    /*
    public function run(): void
    {
        $this->call([
            TeamSeeder::class,
            GameSeeder::class
        ]);
    }
    */
}
