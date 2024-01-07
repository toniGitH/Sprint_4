<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

