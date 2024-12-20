@extends('menuADMIN')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleccionar Sección</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el menú lateral */
        header {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 20px;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-info {
            font-size: 18px;
            padding: 12px 20px;
            width: 200px;
        }
    </style>
</head>
<body>
    <!-- Contenido principal -->
    <main>
        <div class="container">
            <h2 class="mb-4">ELIMINAR</h2>

            <div class="btn-group">
                <a href="#" class="btn btn-info">Artículos</a>
                <a href="#" class="btn btn-info">Libros</a>
                <a href="#" class="btn btn-info">Base de Datos</a>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
