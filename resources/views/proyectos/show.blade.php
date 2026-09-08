@extends('layouts.app')

@section('titulo', $proyecto->titulo)

@section('contenido')
    <div class="mb-8">
        <a href="{{ route('proyectos.index') }}" class="inline-flex items-center gap-1.5 text-sm text-slate-500 hover:text-indigo-400 transition-colors mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Volver a mis proyectos
        </a>
        <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">{{ $proyecto->titulo }}</h1>
        <p class="text-slate-400 mt-1">Detalle del proyecto</p>
    </div>

    <div class="max-w-3xl bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
        <div class="p-6 md:p-8 space-y-6">
            <div>
                <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Descripción</h2>
                <p class="text-slate-700 leading-relaxed">{{ $proyecto->descripcion }}</p>
            </div>

            @if($proyecto->tags)
                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-3">Tecnologías</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach($proyecto->tags as $tag)
                            <span class="bg-indigo-500/10 text-indigo-600 text-sm px-3 py-1 rounded-full border border-indigo-500/20">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Creado</h2>
                    <p class="text-sm text-slate-600">{{ $proyecto->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Última actualización</h2>
                    <p class="text-sm text-slate-600">{{ $proyecto->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
