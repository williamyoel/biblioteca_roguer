<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px 10px;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
    </style>
</head>
<body>
    <!-- Barra lateral fija -->
    <div class="sidebar">
        <h2>Biblioteca</h2>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('usuario.index') }}">Usuario</a>
        <a href="{{ route('libros.index') }}">Libros/Artículos</a>
        <a href="{{ route('datos.index') }}">Datos abiertos</a>
        <a href="{{ route('soporte.index') }}">Soporte/Ayuda</a>
        <a href="{{ route('sugerencias.index') }}">Sugerencias/Aportes</a>
        <a href="{{ route('logout') }}">Cerrar sesión</a>
    </div>

    <!-- Contenedor dinámico -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
