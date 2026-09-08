<?php

use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Comprobar si el usuario esta autenticado
// SI: redirijo al dashboard
// NO: reidirjo al login
Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
})->name('inicio');

// Ruta para mostrar el formulario de login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

// Ruta para procesar el intento de login
Route::post('/login', [AuthController::class, 'storeLogin'])
    ->name('login.store');

// Todas las rutas que estan dentro de este grupo, son la zona "privada"
// El usuario debe estar autenticado para visitarlas
Route::middleware('auth')->group(function () {
    // Ruta del dashboard para redirigir usuarios logueados
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Ruta para cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Ruta para ver un listado de ofertas
    // GET -> enlaces
    Route::get('/ofertas', [OfertaController::class, 'index'])
        ->name('ofertas.index');

    // Ruta para mostrar el formulario de creacion de oferta
    Route::get('/ofertas/crear', [OfertaController::class, 'create'])
        ->name('ofertas.create');

    // Ruta para recibir los datos del formulario de nueva oferta
    // POST -> recibir datos de formularios
    Route::post('/ofertas', [OfertaController::class, 'store'])
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

    Route::get('/proyectos/{proyecto}', [ProyectosController::class, 'show'])
        ->name('proyectos.show');

    // Grupo de rutas para trabajar con subida de archivos
    Route::get('/archivos', [ArchivosController::class, 'index'])
        ->name('archivos.index');

    Route::get('/archivos/create', [ArchivosController::class, 'create'])
        ->name('archivos.create');

    Route::post('/archivos', [ArchivosController::class, 'store'])
        ->name('archivos.store');
});
