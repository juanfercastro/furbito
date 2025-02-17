<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/furbinho', function(){
    return view('furbo-menu');
});

Route::get('/furbinho/equipos', function(){
    return view('equipos-menu');
})->name('equipos');

Route::get('/furbinho/equipos', function(){
    return view('torneos-menu');
})->name('torneos');