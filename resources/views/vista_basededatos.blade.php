@extends('menu')

@section('content')



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Base de Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Base de Datos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <h1>Vista de Base de Datos</h1>
        <p>A continuación, se muestran los registros de la base de datos.</p>

        <!-- Example Database Records Table -->
        <section>
            <h2>Registros de la Base de Datos</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Recomendación sobre libro X</td>
                        <td>Comentario sobre el libro X con enlace a más información.</td>
                        <td>Disponible</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Recomendación sobre libro Y</td>
                        <td>Comentario sobre el libro Y con enlace a más información.</td>
                        <td>No disponible</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Recomendación sobre libro Z</td>
                        <td>Comentario sobre el libro Z, por favor leer antes de proceder.</td>
                        <td>Disponible</td>
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
