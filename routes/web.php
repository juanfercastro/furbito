<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu-furbo');
});

Route::get('/equipos/nuevo', function () {
    return view('alta-equipo');
})->name('nuevoEquipo');

Route::post('/equipos/alta',[EquipoController::class,'addEquipo'])->name('addEquipo');

Route::get('/equipos/listar',[EquipoController::class, 'listEquipos'])->name('listaEquipos');