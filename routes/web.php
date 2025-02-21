<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu-furbo');
})->name('inicio');

Route::get('/equipos/nuevo', function () {
    return view('alta-equipo');
})->name('nuevoEquipo');

Route::post('/equipos/alta',[EquipoController::class,'addEquipo'])->name('addEquipo');
Route::get('/equipos/listar',[EquipoController::class, 'listEquipos'])->name('listaEquipos');
Route::get('/jugadores/listar/{id}',[JugadorController::class, 'listJugadoresEquipo'])->name('listaJugadores');
Route::get('jugadores/nuevo',[JugadorController::class, 'altaForm'])->name('nuevoJugador');
Route::post('/jugadores/alta',[JugadorController::class,'addJugador'])->name('addJugador');