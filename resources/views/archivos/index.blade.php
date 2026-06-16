@extends('layouts.app')

@section('titulo', 'Mis proyectos')

@section('contenido')

    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">Archivos</h1>
    </div>

    @if(session('exito'))
        <p>{{ session('exito') }}</p>
    @endif

    <section>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-indigo-400">Archivos</h2>
            <a href="{{ route('archivos.create') }}" class="bg-indigo-600 hover:bg-indigo-500 text-white text-sm px-4 py-2 rounded-lg font-medium transition-colors">
                + Añadir Archivo
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                // Obtener imagen desde el disco local
                if(Storage::exists('subidas/usuario_1781640234.jpg')) {
                    $archivo = Storage::url('subidas/usuario_1781640234.jpg');
                }
                // Como obtener imagenes de otro disco que no sea el principal
                // $imagen_amazon = Storage::disk('s3')->url("imagen.jpg");
            @endphp
            <p>{{ $archivo }}</p>
            <img src="{{ $archivo }}" alt="">
        </div>
    </section>

@endsection