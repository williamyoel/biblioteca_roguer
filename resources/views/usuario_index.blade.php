@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <!-- Agregar Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
        <div class="container mt-5">
            <div class="row">
                <!-- Columna de la foto de perfil -->
                <div class="col-md-4 text-center">
                    <div class="border border-primary rounded-circle" style="width: 200px; height: 200px; margin: auto;">
                        <img src="#" alt="Foto del Usuario" class="img-fluid rounded-circle" style="width: 100%; height: 100%;">
                    </div>
                </div>

                <!-- Columna de los detalles del usuario -->
                <div class="col-md-8">
                    <div class="border border-primary p-3 rounded">
                        <h1>Perfil del Usuario</h1>
                        <h2>{{ Auth::user()->name }}</h2> <!-- Muestra el nombre del usuario autenticado -->
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p> <!-- Muestra el correo del usuario autenticado -->
                    </div>
                </div>
            </div>

            <!-- Botones en la parte inferior -->
            <div class="row mt-4">
                <div class="col text-center">
                    <a href="¿#" class="btn btn-primary">
                        Editar Perfil
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5 text-center">
            <p>No tienes acceso a esta sección. Por favor <a href="{{ route('login') }}">inicia sesión</a>.</p> <!-- Enlace para iniciar sesión -->
        </div>
    @endif

    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
