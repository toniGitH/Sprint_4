<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// ESTRUCTURA PARA UN CONTROLADOR QUE SÓLO VA A GESTIONAR UNA RUTA
Route::get('/', HomeController::class)->name('home');
Route::get('/home', HomeController::class)->name('home');
/*Con esta sintáxis, esta ruta va a buscar el método __invoke del controlador HomeController*/

// ESTRUCTURA PARA UN CONTROLADOR QUE VA A GESTIONAR VARIAS RUTAS (con Route:resource)
Route::resource('teams', TeamController::class);

// ESTRUCTURA PARA UN CONTROLADOR QUE VA A GESTIONAR VARIAS RUTAS (con grupo de rutas-desde Laravel 9) => Equivale a la línea anterior
/* Route::controller(TeamController::class)->group(function () {
    Route::get('teams', 'index')->name('teams.index');
    Route::get('teams/create', 'create')->name('teams.create');
    Route::post('teams', 'store')->name('teams.store');
    Route::get('teams/{team}', 'show')->name('teams.show');
    Route::get('teams/{team}/edit', 'edit')->name('teams.edit');
    Route::put('teams/{team}', 'update')->name('teams.update');
    Route::delete('teams/{team}', 'destroy')->name('teams.destroy');
}); */