<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Recomendaciones</h1>

        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Tabla de recomendaciones -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Comentario</th>
                    <th>Enlace</th>
                    <th>Imagen</th>
                    <th>Estado</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recomendaciones as $recomendacion)
                    <tr>
                        <td>{{ $recomendacion->comentario }}</td>
                        <td>
                            @if($recomendacion->enlace)
                                <a href="{{ $recomendacion->enlace }}" target="_blank">{{ $recomendacion->enlace }}</a>
                            @else
                                <span>No disponible</span>
                            @endif
                        </td>
                        <td>
                            @if($recomendacion->picture)
                                <img src="{{ asset('storage/'.$recomendacion->picture) }}" alt="Imagen" style="width: 50px; height: 50px;">
                            @else
                                <img src="/images/placeholder.png" alt="Imagen no disponible" style="width: 50px; height: 50px;">
                            @endif
                        </td>
                        <td>{{ ucfirst($recomendacion->estado) }}</td>
                        <td>{{ $recomendacion->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
