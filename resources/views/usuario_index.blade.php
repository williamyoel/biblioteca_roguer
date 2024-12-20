<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
        <div class="profile">
            <h1>Perfil del Usuario</h1>
            <img src="#" alt="Foto del Usuario" style="width:150px; height:150px; border-radius:50%;"> <!-- Foto del perfil -->

            <h2>Nombre: {{ Auth::user()->name }}</h2> <!-- Muestra el nombre del usuario autenticado -->
            <p>Email: {{ Auth::user()->email }}</p> <!-- Muestra el correo del usuario autenticado -->

            <!-- Enlace para editar el perfil -->
            <a href="#', ['id' => Auth::user()->id]) }}">
                <button>✏️ Editar Perfil</button>
            </a>

            <!-- Enlace para regresar (puedes cambiar la ruta a la que desees) -->
            <a href="#">
                <button>⬅️ Regresar</button>
            </a>
        </div>
    @else
        <p>No tienes acceso a esta sección. Por favor <a href="{{ route('login') }}">inicia sesión</a>.</p> <!-- Enlace para iniciar sesión -->
    @endif
</body>
</html>
