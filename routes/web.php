<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// PÁGINA DE INICIO O HOME
// Estructura de rutas para un controlador que sólo va a gestionar una acción (ir a la home)
Route::get('/', HomeController::class)->name('home');
Route::get('/home', HomeController::class)->name('home');
/*Con esta sintáxis, esta ruta va a buscar el método __invoke del controlador HomeController*/

// CRUD DE EQUIPOS
// Estructura de rutas para un controlador que va a gestionar varias acciones (métodos del crud)
Route::resource('teams', TeamController::class);

// La línea anterior equivale a este conjunto de rutas (grupo de rutas-desde Laravel 9)
/*  Route::controller(TeamController::class)->group(function () {
        Route::get('teams', 'index')->name('teams.index');
        Route::get('teams/create', 'create')->name('teams.create');
        Route::post('teams', 'store')->name('teams.store');
        Route::get('teams/{team}', 'show')->name('teams.show');
        Route::get('teams/{team}/edit', 'edit')->name('teams.edit');
        Route::put('teams/{team}', 'update')->name('teams.update');
        Route::delete('teams/{team}', 'destroy')->name('teams.destroy');
    });
*/

// CRUD DE PARTIDOS
// Estructura de rutas para un controlador que va a gestionar varias acciones (métodos del crud)
Route::resource('games', GameController::class);

// La línea anterior equivale a este conjunto de rutas (grupo de rutas-desde Laravel 9)
/*  Route::controller(GameController::class)->group(function () {
        Route::get('games', 'index')->name('games.index');
        Route::get('games/create', 'create')->name('games.create');
        Route::post('games', 'store')->name('games.store');
        Route::get('games/{game}', 'show')->name('games.show');
        Route::get('games/{game}/edit', 'edit')->name('games.edit');
        Route::put('games/{game}', 'update')->name('games.update');
        Route::delete('games/{game}', 'destroy')->name('games.destroy');
    }); 
*/

// PÁGINA DE WELCOME DE LARAVEL
/* Route::get('/welcome', function () {
    return view('welcome');
}); */