<?php

use App\Http\Controllers\CartonController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ResultadoController;
use App\Models\Partida;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(CartonController::class)->group(function (){
    Route::get('/cartones', 'index');
    Route::get('/cartones/{id}', 'show');
    Route::post('/cartones', 'store');
});

Route::controller(PartidaController::class)->prefix('partidas')->group(function (){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
});

Route::controller(ResultadoController::class)->prefix('resultados')->group(function (){
    Route::post('/', 'process')->name('resultados.set');
    Route::delete('/delete/{id}', 'destroy');
});
