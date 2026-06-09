<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProyectoRequest;

class ProyectosController extends Controller
{
    // Metodo que muestra todos los proyectos de mi aplicacion
    public function index() {
        $proyectos = [
            [
                'title' => 'Sistema de gestion comercial',
                'desc' => 'Sistema para comercios con carrito de compras y productos',
                'tags' => ['PHP', 'Laravel', 'SQL']
            ],
            [
                'title' => 'Videojuego RPG',
                'desc' => 'Desarrollo de juego por turnos con logica simple',
                'tags' => ['Python', 'PyGame']
            ]
        ];
        return view('proyectos.index', compact('proyectos'));
    }

    public function create() {
        return view('proyectos.create');
    }

    public function store(StoreProyectoRequest $request) {
        // 1. Validacion: se valida en la clase StoreProyectoRequest

        // 2. Guardar datos en la BD (A futuro)

        // 3. Redirigir a proyectos.index con un mensaje de exito
        return redirect()
            ->route('proyectos.index')
            ->with('exito', 'Se ha creado el proyecto');
    }
}
