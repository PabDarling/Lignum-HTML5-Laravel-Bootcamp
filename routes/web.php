<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\PeliculaController;

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


Route::get('/actors', [ActorController::class, 'index'])->name('actors.index');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
Route::post('/actors', [ActorController::class, 'store']);
Route::get('/actors/{id}', [ActorController::class, 'show'])->name('actors.show');
Route::get('/actors/{id}/edit', [ActorController::class, 'edit'])->name('actors.edit');
Route::put('/actors/{id}', [ActorController::class, 'update'])->name('actors.update');
Route::delete('/actors/{id}', [ActorController::class, 'destroy'])->name('actors.destroy');

Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/create', [PeliculaController::class, 'create'])->name('peliculas.create');
Route::post('/peliculas', [PeliculaController::class, 'store'])->name('peliculas.store');
Route::get('/peliculas/{id}', [PeliculaController::class, 'show'])->name('peliculas.show');
Route::get('/peliculas/{id}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::put('/peliculas/{id}', [PeliculaController::class, 'update'])->name('peliculas.update');
Route::delete('/peliculas/{id}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');
