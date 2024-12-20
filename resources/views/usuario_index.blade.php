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
    @if ($user) <!-- Verifica si el objeto $user existe -->
        <div class="profile">
            <h1>Perfil del Usuario</h1>
            <!-- Foto del perfil (si está disponible en $user->rutafoto) -->
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="Foto del Usuario" style="width:150px; height:150px; border-radius:50%;">

            <!-- Muestra el nombre y el correo del usuario -->
            <h2>Nombre: {{ $user->nombre }}</h2>
            <p>Email: {{ $user->correo }}</p>

            <!-- Enlace para editar el perfil -->
            <a href="usuarioupdate">
                <button>✏️ Editar Perfil</button>
            </a>

            <!-- Enlace para regresar (puedes cambiar la ruta a la que desees) -->
            <a href="#">
                <button>⬅️ Regresar</button>
            </a>
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
