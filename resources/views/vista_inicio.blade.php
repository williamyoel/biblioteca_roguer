@extends('menu')

@section('content')



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Inicio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Recomendaciones</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <h1>Bienvenido a la Biblioteca</h1>
        <p>En este sitio encontrarás las últimas recomendaciones, aportes y más.</p>
        
        <!-- Example of a Recommendation Table -->
        <section>
            <h2>Recomendaciones</h2>
            <table>
                <thead>
                    <tr>
                        <th>Comentario</th>
                        <th>Enlace</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Recomendación sobre el libro X</td>
                        <td><a href="#">Ver más</a></td>
                        <td>Disponible</td>
                    </tr>
                    <tr>
                        <td>Recomendación sobre el libro Y</td>
                        <td><a href="#">Ver más</a></td>
                        <td>No disponible</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Biblioteca Roguer | Todos los derechos reservados.</p>
    </footer>

</body>
</html>


@endsection
