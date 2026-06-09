<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\ProyectosController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Nueva ruta que define que ocurre cuando el usuario visita la URL /hola
Route::get('/hola', function() {
    echo "Hola";
});

// Ruta para ver un listado de ofertas
// GET -> enlaces
Route::get("/ofertas", [OfertaController::class, 'index'])
    ->name('ofertas.index');

// Ruta para mostrar el formulario de creacion de oferta
Route::get("/ofertas/crear", [OfertaController::class, 'create'])
    ->name('ofertas.create');

// Ruta para recibir los datos del formulario de nueva oferta
// POST -> recibir datos de formularios
Route::post("/ofertas", [OfertaController::class, 'store'])
    ->name('ofertas.store');

// Ruta para mostrar los datos de UNA oferta
// {id} es un parametro variable que define el ID de la oferta que queremos ver
Route::get('/ofertas/{id}', [OfertaController::class, 'show'])
    ->name('ofertas.show');

// Ruta para ver los proyectos
Route::get('/proyectos', [ProyectosController::class, 'index'])
    ->name('proyectos.index');

// Ruta para ver el formulario de creacion de proyectos
Route::get('/proyectos/create', [ProyectosController::class, 'create'])
    ->name('proyectos.create');

Route::post('/proyectos', [ProyectosController::class, 'store'])
    ->name('proyectos.store');