@extends('layouts.app')

@section('titulo', 'Nuevo proyecto')

@section('contenido')
    <form action="{{ route('archivos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex">
            <label for="archivo" class="mr-2">Archivo</label>
            <input type="file" name="archivo" class="border border-black">
            @error('archivo')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Guardar" class="bg-blue-600 text-white py-2 px-4 mt-2 rounded-sm">
    </form>
@endsection