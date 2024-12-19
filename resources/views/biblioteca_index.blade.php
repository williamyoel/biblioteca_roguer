@extends('layouts.app')

@section('title', 'Libros y Artículos')

@section('content')
<div class="library">
    <h1>Libros y Artículos</h1>
    <div class="search-bar">
        <input type="text" placeholder="Buscar">
        <button><i class="fas fa-search"></i></button>
    </div>

    <div class="book-list">
        @foreach ($libros as $libro)
            <div class="book-item">
                <img src="{{ asset('images/' . $libro->portada) }}" alt="Portada de {{ $libro->titulo }}">
                <h3>{{ $libro->titulo }}</h3>
                <p>{{ $libro->resumen }}</p>
                <div class="book-actions">
                    <button>📄 Archivo</button>
                    <button>📥 Descargar</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
