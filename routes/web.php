<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\ModeloController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('personas', PersonasController::class);
Route::resource('turnos',TurnoController::class);
Route::resource('puestos',PuestoController::class);
Route::resource('marcas',MarcaController::class);
Route::resource('tallas',TallaController::class);
Route::resource('colors',ColorController::class);
Route::resource('generos',GeneroController::class);
Route::resource('modelos',ModeloController::class);


