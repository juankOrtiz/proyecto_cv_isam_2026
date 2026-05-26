<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    // El objetivo de un controlador es definir toda la logica de la aplicacion. Recibe una peticion de una ruta y define que se hace en respuesta a la misma
    public function index(Request $request) {
        return view('ofertas');
    }
}
