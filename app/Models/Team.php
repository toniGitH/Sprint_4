<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Team extends Model
{
    use HasFactory;

    // Para permitir asignación masiva:
    protected $guarded = []; // De esta manera definimos dentro del array aquellas propiedades protegidas de la asignación masiva
    //protected $fillable = ['name', 'city']; // Con esta otra opción, se declara lo que sí está permitido

    // PENDIENTE INCORPORAR RELACIÓN CON LA TABLA DE ENFRENTAMIENTOS (has/belongs to)

    protected function name(): Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }

    protected function city(): Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }
}
