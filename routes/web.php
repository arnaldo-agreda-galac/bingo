<?php

use App\Http\Controllers\CartonController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ResultadoController;
use App\Models\Partida;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(CartonController::class)->prefix('cartones')->group(function (){
    Route::get('/', 'index')->name('cartones.index');
    Route::get('/{id}', 'show')->name('cartones.detail');
    Route::get('/{id}/edit', 'edit')->name('cartones.edit');
    Route::get('/{id}/delete', 'destroy')->name('cartones.delete');
    Route::post('/cartones/store', 'store')->name('cartones.store');
});

Route::controller(PartidaController::class)->prefix('partidas')->group(function (){
    Route::get('/', 'index')->name('partidas.index');
    Route::get('/{id}', 'show')->name('partidas.detail');
    Route::post('/', 'store')->name('partidas.store');;
});

Route::controller(ResultadoController::class)->prefix('resultados')->group(function (){
    Route::post('/', 'process')->name('resultados.set');
    Route::delete('/delete/{id}', 'destroy');
});
