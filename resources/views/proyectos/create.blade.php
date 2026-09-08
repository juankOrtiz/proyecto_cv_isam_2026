@extends('layouts.app')

@section('titulo', 'Nuevo proyecto')

@section('contenido')
    <div class="mb-8">
        <a href="{{ route('proyectos.index') }}" class="inline-flex items-center gap-1.5 text-sm text-slate-500 hover:text-indigo-400 transition-colors mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Volver a mis proyectos
        </a>
        <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">Nuevo proyecto</h1>
        <p class="text-slate-400 mt-1">Completá los datos para agregar un proyecto a tu portfolio.</p>
    </div>

    <div class="max-w-2xl">
        <form action="{{ route('proyectos.store') }}" method="POST" class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 md:p-8 space-y-6">
            @csrf

            <div class="space-y-2">
                <label for="titulo" class="block text-sm font-semibold text-slate-700">
                    Título <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="titulo"
                    name="titulo"
                    value="{{ old('titulo') }}"
                    placeholder="Ej: Sistema de gestión comercial"
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-colors @error('titulo') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror"
                >
                @error('titulo')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="descripcion" class="block text-sm font-semibold text-slate-700">
                    Descripción <span class="text-red-500">*</span>
                </label>
                <textarea
                    id="descripcion"
                    name="descripcion"
                    rows="4"
                    placeholder="Contá brevemente de qué se trata el proyecto..."
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-colors resize-y @error('descripcion') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror"
                >{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="etiquetas" class="block text-sm font-semibold text-slate-700">
                    Etiquetas <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="etiquetas"
                    name="etiquetas"
                    value="{{ old('etiquetas') }}"
                    placeholder="PHP, Laravel, SQL"
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 transition-colors @error('etiquetas') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror"
                >
                <p class="text-xs text-slate-500">Separá cada tecnología o categoría con una coma.</p>
                @error('etiquetas')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-3 pt-2">
                <a href="{{ route('proyectos.index') }}" class="inline-flex justify-center items-center px-5 py-2.5 rounded-lg border border-slate-300 text-sm font-medium text-slate-600 hover:bg-slate-50 transition-colors">
                    Cancelar
                </a>
                <button type="submit" class="inline-flex justify-center items-center px-5 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-medium transition-colors">
                    Guardar proyecto
                </button>
            </div>
        </form>
    </div>
@endsection
