<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('gameweek');
            $table->date('date');
            $table->unsignedBigInteger('local_team_id');
            $table->unsignedBigInteger('visitor_team_id');
            $table->integer('local_score');
            $table->integer('visitor_score');
            $table->timestamps();

            // Foreign key restrictions with onDelete('RESTRICT')
            $table->foreign('local_team_id')->references('id')->on('teams')->onDelete('RESTRICT');
            $table->foreign('visitor_team_id')->references('id')->on('teams')->onDelete('RESTRICT');
            
            // Composite Unique Key Restriction for local_team_id & visitor_team_id
            $table->unique(['local_team_id', 'visitor_team_id']);

            // Composite Unique Key Restriction for gameweek, local_team_id & visitor_team_id
            $table->unique(['gameweek', 'local_team_id']);
            $table->unique(['gameweek', 'visitor_team_id']);

            // Falta añadir restricción para que en un mismo registro no pueda ser el mismo el equipo local que el visitante
            // También habría que buscar una restricción para ningún equipo pueda judar dos veces una misma jornada (gameweek)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
