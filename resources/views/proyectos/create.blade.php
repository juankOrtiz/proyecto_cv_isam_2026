@extends('layouts.app')

@section('titulo', 'Nuevo proyecto')

@section('contenido')
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}">
            @error('titulo')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="etiquetas">Etiquetas (separadas por comas)</label>
            <input type="text" name="etiquetas" value="{{ old('etiquetas') }}">
            @error('etiquetas')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Guardar">
    </form>
@endsection