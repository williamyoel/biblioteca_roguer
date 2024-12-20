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
      
        nav {
            background-color: #343a40;
            width: 250px;
            color: #fff;
            padding-top: 20px;
            text-align: center;
            position: fixed; /* Fija el menú en la parte izquierda */
            top: 0;
            left: 0;
            height: 100%; /* Ocupa toda la altura */
            z-index: 1000; /* Asegúrate de que esté por encima de otros elementos */
        }
        nav .logo {
            font-size: 4rem;
            color: #fff;
            margin-bottom: 20px;
        }
        .nav-link {
            transition: color 0.3s, font-weight 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        .nav-link.active {
            color: #fff; /* Cambia el color del texto activo a blanco */
            font-weight: bold; /* Texto en negrita */
        }
        .nav-link.active i {
            transform: rotate(360deg); /* El icono gira cuando se selecciona */
            transition: transform 0.3s; /* Transición suave para el giro del icono */
        }
        .nav-link:hover {
            color: #ccc; /* Color al pasar el ratón */
            transform: translateY(-5px); /* Eleva el enlace */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }

        main {
            margin-left: 250px; 
            background-color: #f8f9fa;
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="d-flex flex-column p-3">
    <!-- Logo usando un ícono de Bootstrap -->
    <i class="bi bi-book logo"></i>
    <a class="navbar-brand text-light fs-4 fw-bold mb-4" href="#">Biblioteca</a>
    <ul class="navbar-nav flex-grow-1 w-100">
        <!-- Usuario -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/usuario">
                <i class="bi bi-person me-2"></i> Usuario
            </a>
        </li>
        <!-- Inicio -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/vista_inicio">
                <i class="bi bi-house me-2"></i> Inicio
            </a>
        </li>
        <!-- Libros/Artículos -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/libro_articulos">
                <i class="bi bi-journal me-2"></i> Libros/Artículos
            </a>
        </li>
        <!-- Datos Abiertos -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/vista_basededatos">
                <i class="bi bi-bar-chart me-2"></i> Base De Datos
            </a>
        </li>
        <!-- Soporte/Ayuda -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/soporte_ayuda_index">
                <i class="bi bi-question-circle me-2"></i> Soporte/Ayuda
            </a>
        </li>
        <!-- Sugerencia/Aportes -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/sugerencias_aportes">
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
            <a class="nav-link text-light d-flex align-items-center" href="login">
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
</body>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
