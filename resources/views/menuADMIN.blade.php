<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
    </style>
</head>
<body>
<nav class="d-flex flex-column p-3">
    <img src="{{ asset('images/logo admin.png') }}" class="img-fluid">
    <a class="navbar-brand text-light fs-4 fw-bold mb-4" href="#">Administrador</a>
    <ul class="navbar-nav flex-grow-1 w-100">
        <!-- Inicio -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/recomendacionesdocumento">
                <i class="bi bi-house me-2"></i> Inicio
            </a>
        </li>
        <!-- Añadir -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/admin/añadir">
                <i class="bi bi-plus-circle me-2"></i> Añadir
            </a>
        </li>
        <!-- Eliminar -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/admin_eliminar">
                <i class="bi bi-trash me-2"></i> Eliminar
            </a>
        </li>
        <!-- Menú de Usuario -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/vista_inicio">
                <i class="bi bi-house-door me-2"></i> Menú de Usuario
            </a>
        </li>
        <!-- Cerrar Sesión -->
        <li class="nav-item">
            <a class="nav-link text-light d-flex align-items-center" href="/login">
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
