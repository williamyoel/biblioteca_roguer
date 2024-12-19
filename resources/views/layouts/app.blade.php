<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Biblioteca Virtual')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Menú lateral -->
        <aside class="sidebar">
            <h2>Biblioteca</h2>
            <nav>
                <ul>
                    <li><a href="{{ route('usuario.perfil') }}"><i class="fas fa-user"></i> Usuario</a></li>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="{{ route('libros.index') }}"><i class="fas fa-book"></i> Libros/Artículos</a></li>
                    <li><a href="#"><i class="fas fa-database"></i> Datos Abiertos</a></li>
                    <li><a href="#"><i class="fas fa-question-circle"></i> Soporte/Ayuda</a></li>
                    <li><a href="#"><i class="fas fa-lightbulb"></i> Sugerencias/Aportes</a></li>
                    <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>
