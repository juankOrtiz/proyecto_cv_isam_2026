<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    // El objetivo de un controlador es definir toda la logica de la aplicacion. Recibe una peticion de una ruta y define que se hace en respuesta a la misma
    public function index(Request $request) {
        // Simular que tenemos 3 ofertas
        $ofertas = [
            "1 proyector a $10.000",
            "3 kg de mandarinas a $1000",
            "20 fotos digitales a $5000"
        ];
        // Devolver una vista, pasandole la variable $ofertas para que pueda ser accesible en la vista
        return view('ofertas.index', compact('ofertas'));
    }

    // Metodo encargado de devolver el formulario para crear una nueva oferta
    public function create() {
        return view('ofertas.create');
    }

    // Metodo encargado de recibir los datos del formulario de creacion de oferta y procesarlos
    public function store(Request $request) {
        // TODO: a futuro se deberia validar el formulario y guardarlo en la BD
        // Redirigir al usuario a la pagina index
        return redirect('/ofertas');
    }

    // Metodo encargado de recibir como parametro el ID de la oferta, buscarlo y mostrarlo en su respectiva pagina
    public function show(int $id) {
        // Esta mi "tabla" de ofertas:
        $ofertas = [
            "1 proyector a $10.000",
            "3 kg de mandarinas a $1000",
            "20 fotos digitales a $5000"
        ];
        $oferta = $ofertas[$id - 1];
        return view('ofertas.show', compact('oferta'));
    }
}
