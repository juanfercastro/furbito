<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/furbinho', function(){
    return view('menu-furbo');
});