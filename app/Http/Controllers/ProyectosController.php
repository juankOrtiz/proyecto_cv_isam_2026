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
        return view('proyectos', compact('proyectos'));
    }
}
