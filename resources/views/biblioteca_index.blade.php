@extends('layouts.app') <!-- Extiende el layout principal -->

@section('title', 'Libros y Artículos') <!-- Define el título de la página -->

@section('content')
<div class="library">
    <h1>Libros y Artículos</h1>
    <!-- Barra de búsqueda -->
    <div class="search-bar">
        <input type="text" placeholder="Buscar">
        <button><i class="fas fa-search"></i></button>
    </div>

    <!-- Lista de libros -->
    <div class="book-list">
        @foreach ($libros as $libro)
            <div class="book-item">
                <!-- Imagen de portada -->
                <img src="{{ asset('images/' . $libro->portada) }}" alt="Portada de {{ $libro->titulo }}" style="width: 120px; height: 180px;">

                <!-- Título y resumen -->
                <h3>{{ $libro->titulo }}</h3>
                <p>{{ $libro->resumen }}</p>

                <!-- Botones de acción -->
                <div class="book-actions">
                    <button>📄 Archivo</button>
                    <button>📥 Descargar</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
