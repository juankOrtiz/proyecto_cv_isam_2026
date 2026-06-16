<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArchivoRequest;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("archivos.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("archivos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArchivoRequest $request)
    {
        // 1. Validar imagen (en StoreArchivoRequest)
        // 2. Subir la imagen al disco
        if($request->hasFile("archivo")){
            // Se guardar el contenido del campo "archivo" en la carpeta "subidas" dentro del disco "public" ("subidas" se crea si no existe previamente)
            $request->file("archivo")->storeAs("subidas", "usuario_" . time() . ".jpg", "public");
        }
        return redirect()->route("archivos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
