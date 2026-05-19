<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Nueva ruta que define que ocurre cuando el usuario visita la URL /hola
Route::get('/hola', function() {
    echo "Hola";
});