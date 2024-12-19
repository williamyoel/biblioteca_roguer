<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <!-- Enlace al CSS -->
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }

        /* Menú lateral */
        .sidebar {
            background-color: #2C3E50;
            color: white;
            width: 200px;
            height: 100vh;
            padding: 15px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #34495E;
        }
        .sidebar .active {
            background-color: #1ABC9C;
        }

        /* Contenido principal */
        .content {
            flex: 1;
            padding: 20px;
            background-image: url('https://via.placeholder.com/1920x1080'); /* Fondo */
            background-size: cover;
            background-position: center;
        }

        /* Buscador */
        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .search-bar input {
            width: 400px;
            padding: 8px;
            border: none;
            border-radius: 5px 0 0 5px;
        }
        .search-bar button {
            padding: 8px 15px;
            border: none;
            background-color: #1ABC9C;
            color: white;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
        }
        .search-bar button:hover {
            background-color: #16A085;
        }

        /* Sección de sugerencias */
        .sugerencias {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            width: 200px;
            margin-right: 20px;
        }
        .sugerencias h3 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }

        /* Libros */
        .libros {
            display: flex;
            gap: 20px;
        }
        .libro-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .libro-card img {
            width: 120px;
            height: 180px;
            margin-bottom: 10px;
        }
        .libro-card button {
            display: block;
            margin: 5px auto;
            padding: 5px 10px;
            background-color: #1ABC9C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .libro-card button:hover {
            background-color: #16A085;
        }

        /* Layout principal */
        .main-layout {
            display: flex;
        }
    </style>
</head>
<body>
    <!-- Menú lateral -->
    <div class="sidebar">
        <h2>Biblioteca</h2>
        <a href="#" class="active">Inicio</a>
        <a href="#">Usuario</a>
        <a href="#">Libros/Artículos</a>
        <a href="#">Datos abiertos</a>
        <a href="#">Soporte/Ayuda</a>
        <a href="#">Sugerencias/Aportes</a>
        <a href="#">Cerrar sesión</a>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button>Buscar</button>
        </div>

        <h1 style="color: white; text-align: center;">Biblioteca</h1>

        <!-- Layout principal -->
        <div class="main-layout">
            <!-- Sugerencias -->
            <div class="sugerencias">
                <h3>Sugerencias</h3>
                <p><strong>Usuario:</strong> Jhon</p>
                <p><strong>Recomiendo el libro:</strong></p>
                <p>Titulado: <em>El arte de la estadística</em></p>
                <button style="background-color: #16A085;">👍</button>
            </div>

            <!-- Libros -->
            <div class="libros">
                <!-- Tarjeta de libro -->
                <div class="libro-card">
                    <img src="https://via.placeholder.com/120x180" alt="Libro 1">
                    <h4>Introducción a la Informática</h4>
                    <button>Archivo</button>
                    <button>Descargar</button>
                </div>
                <div class="libro-card">
                    <img src="https://via.placeholder.com/120x180" alt="Libro 2">
                    <h4>Informática</h4>
                    <button>Archivo</button>
                    <button>Descargar</button>
                </div>
                <div class="libro-card">
                    <img src="https://via.placeholder.com/120x180" alt="Libro 3">
                    <h4>Inteligencia Artificial</h4>
                    <button>Archivo</button>
                    <button>Descargar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
