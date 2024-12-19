<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            display: flex; /* Para usar el sidebar y el contenido principal en una sola fila */
            height: 100vh; /* Ocupa toda la altura de la pantalla */
        }
        nav {
            background-color: #343a40; /* Color oscuro para el menú (sidebar) */
            width: 250px; /* Ancho del menú */
            color: #fff; /* Texto blanco */
        }
        main {
            flex-grow: 1; /* El resto de la página ocupa el espacio restante */
            background-color: #f8f9fa; /* Fondo claro para el contenido principal */
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="d-flex flex-column p-3">
    <a class="navbar-brand text-light fs-4 fw-bold mb-4" href="#">Panel de Administrador</a>
    <ul class="navbar-nav flex-grow-1 w-100">
        <!-- Inicio -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="{{ route('inicio') }}">
                <i class="bi bi-house me-2"></i> Inicio
            </a>
        </li>
        <!-- Menú de Usuario -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="{{ route('menu_usuario') }}">
                <i class="bi bi-person me-2"></i> Menú de Usuario
            </a>
        </li>
        <!-- Añadir -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="{{ route('agregar') }}">
                <i class="bi bi-plus-circle me-2"></i> Añadir
            </a>
        </li>
        <!-- Eliminar -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="{{ route('eliminar') }}">
                <i class="bi bi-trash me-2"></i> Eliminar
            </a>
        </li>
        <!-- Cerrar Sesión -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
            </a>
        </li>
    </ul>
</nav>

<main>
    <div id="app">
        @yield('content')
    </div>
</main>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
