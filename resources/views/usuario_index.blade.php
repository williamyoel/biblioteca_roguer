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
            <img src="{{ asset('images/perfil.jpg') }}" alt="Foto del Usuario" style="width:150px; height:150px; border-radius:50%;">

            <h2>Nombre: {{ Auth::user()->name }}</h2>
            <p>Email: {{ Auth::user()->email }}</p>

            <a href="{{ route('usuario.editar') }}"><button>✏️ Editar Perfil</button></a>
            <a href="{{ route('home') }}"><button>⬅️ Regresar</button></a>
        </div>
    @else
        <p>No tienes acceso a esta sección. Por favor <a href="{{ route('login') }}">inicia sesión</a>.</p>
    @endif
</body>
</html>
