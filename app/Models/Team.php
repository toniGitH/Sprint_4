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

    public function games(){
        return $this->hasMany('App\Models\Game');
        /* return $this->hasMany(Game::class); */ // Código equivalente

    }

    protected function name(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }

    protected function city(): Attribute{
        return new Attribute(
            get: fn($value) => strtoupper($value), // Accesor
            set: fn($value) => strtolower($value) // Mutador
        );
    }
}
