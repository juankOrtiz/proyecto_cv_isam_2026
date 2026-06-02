@extends('layouts.app')

@section('titulo', 'Mis proyectos')

@section('contenido')

    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">Mis proyectos</h1>
        <p class="text-slate-400 mt-1">Acá vas a poder gestionar tus proyectos.</p>
    </div>

    <section>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-indigo-400">Proyectos Destacados</h2>
            <button class="bg-indigo-600 hover:bg-indigo-500 text-white text-sm px-4 py-2 rounded-lg font-medium transition-colors">
                + Añadir Proyecto
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($proyectos as $proyecto)
                <x-project-card 
                    :title="$proyecto['title']" 
                    :description="$proyecto['desc']" 
                    :techs="$proyecto['tags']" 
                />
            @empty
                <div class="col-span-full bg-slate-850 border border-dashed border-slate-700 rounded-xl p-8 text-center text-slate-500">
                    Todavía no cargaste ningún proyecto. ¡Hacé clic en el botón de arriba para empezar!
                </div>
            @endforelse
        </div>
    </section>

@endsection