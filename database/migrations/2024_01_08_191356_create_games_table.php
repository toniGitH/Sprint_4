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
