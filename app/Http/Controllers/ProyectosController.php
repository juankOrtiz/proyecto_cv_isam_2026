<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProyectoRequest;
use App\Models\Proyecto;

class ProyectosController extends Controller
{
    // Metodo que muestra todos los proyectos de mi aplicacion
    public function index()
    {
        // Asi definiamos datos de prueba antes...
        /*$proyectos = [
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
        ];*/
        // Ahora hacemos una consulta SQL para leer todos los proyectos de la tabla
        // all() de fondo hace la siguiente consulta: SELECT * FROM proyectos;
        $proyectos = Proyecto::all();

        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(StoreProyectoRequest $request)
    {
        Proyecto::create($request->validated());

        return redirect()
            ->route('proyectos.index')
            ->with('exito', 'Se ha creado el proyecto');
    }

    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }
}
