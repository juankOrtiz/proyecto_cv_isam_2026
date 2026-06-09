<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store(Request $request) {
        // dd() inspecciona el argumento y lo muestra en la vista
        // dd($request);
        $datos = $request->validate([
            "titulo" => 'required|min:3|max:100',
            "descripcion" => ['required', 'min:10'],
            "etiquetas" => 'required'
        ]);

        // Aca deberiamos guardar en la BD

        // Redirigir a proyectos.index con un mensaje de exito
        return redirect()
            ->route('proyectos.index')
            ->with('exito', 'Se ha creado el proyecto');
    }
}
