<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return view('welcome');
});

// Nueva ruta que define que ocurre cuando el usuario visita la URL /hola
Route::get('/hola', function() {
    echo "Hola";
});

// Ruta para ver un listado de ofertas
Route::get("/ofertas", [OfertaController::class, 'index']);
// GET -> enlaces
