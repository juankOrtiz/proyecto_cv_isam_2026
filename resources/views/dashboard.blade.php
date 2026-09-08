@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('contenido')
    <h1 class="text-2xl font-bold text-gray-800 mb-4">
        Dashboard de {{ Auth::user()->name }}
    </h1>

    <p class="text-gray-600">Bienvenido al panel principal del proyecto CV.</p>
@endsection
