<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros y Artículos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="library">
        <h1>Libros y Artículos</h1>
        <div class="book-list">
            @foreach ($libros as $libro)
                <div class="book-item">
                    <h3>{{ $libro->titulo }}</h3>
                    <p>{{ $libro->resumen }}</p>
                    <button>📥 Descargar</button>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
