<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Game extends Model
{
    use HasFactory;

    // Para permitir asignación masiva:
    protected $guarded = []; // De esta manera definimos dentro del array aquellas propiedades protegidas de la asignación masiva
    //protected $fillable = ['date', 'gameweek', 'local_team','local_score','visitor_team','visitor_score']; // Con esta otra opción, se declara lo que sí está permitido

    // PENDIENTE INCORPORAR RELACIÓN CON LA TABLA DE ENFRENTAMIENTOS (has/belongs to)

    protected function local_team(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }

    protected function visitor_team(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }
}

