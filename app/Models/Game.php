<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Para permitir asignación masiva:
    protected $guarded = []; // De esta manera definimos dentro del array aquellas propiedades protegidas de la asignación masiva
    //protected $fillable = ['date', 'gameweek', 'local_team','local_score','visitor_team','visitor_score']; // Con esta otra opción, se declara lo que sí está permitido

    public function local()
    {
        return $this->belongsTo('App\Models\Team', 'local_team_id');
        /* return $this->belongsTo(Team::class, 'local_team_id'); */ // Código equivalente

    }
    /*
        Este método define una relación entre el modelo TEAM y el modelo GAME
        Define una relación de uno a muchos "inversa" (belongs to)
        El modelo Game se ha definido como una tabla que contiene varias columnas, entre ellas dos, que son "local_team_id"
        y "visitor_team_id" que son claves foráneas de la tabla Team (esto está definido en la migración de la tabla games).
        Este método nos permite acceder al equipo local (instancia) asociado a un partido concreto (Game) utilizando el
        método Eloquent "local". Y una vez que tenemos dicha instancia, podemos acceder a todas sus propiedades.
    */
 
    public function visitor()
    {
        return $this->belongsTo('App\Models\Team', 'visitor_team_id');
        /* return $this->belongsTo(Team::class, 'visitor_team_id'); */ // Código equivalente
    }
    /*
        De manerá análoga, este método nos permite acceder al equipo visitante (instancia) asociado a un partido concreto
        (Game) utilizando el método Eloquent "visitor". Y una vez que tenemos dicha instancia, podemos acceder a todas sus propiedades.
    */

}

