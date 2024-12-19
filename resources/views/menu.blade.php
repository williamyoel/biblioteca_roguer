<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <a class="navbar-brand text-light fs-4 fw-bold mb-4" href="#">Biblioteca</a>
    <ul class="navbar-nav flex-grow-1 w-100">
        <!-- Usuario -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-person me-2"></i> Usuario
            </a>
        </li>
        <!-- Inicio -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-house me-2"></i> Inicio
            </a>
        </li>
        <!-- Libros/Artículos -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-journal me-2"></i> Libros/Artículos
            </a>
        </li>
        <!-- Datos Abiertos -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-bar-chart me-2"></i> Base De Datos
            </a>
        </li>
        <!-- Soporte/Ayuda -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-question-circle me-2"></i> Soporte/Ayuda
            </a>
        </li>
        <!-- Sugerencia/Aportes -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-pencil-square me-2"></i> Sugerencia/Aportes
            </a>
        </li>
                <!-- Sugerencia/Aportes -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-pencil-square me-2"></i> Sugerencia/Aportes
            </a>
        </li>
        <!-- cambio de modo -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
                <i class="bi bi-sun me-2"></i> Claro/Oscuro
            </a>
        </li>
        <!-- Cerrar Sesión -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="#">
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
