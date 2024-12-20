@extends('menuADMIN')

@section('content')



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Recomendaciones</a></li>
                <li><a href="#">Eliminar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <h1>Eliminar Registro</h1>

        <!-- Confirmation Section -->
        <section>
            <h2>¿Está seguro de que desea eliminar este registro?</h2>

            <p><strong>Comentario:</strong> hoal</p>
            <p><strong>Descripción:</strong> hola</p>

            <form action="#" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn-delete">Eliminar</button>
                <a href="#" class="btn-cancel">Cancelar</a>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Biblioteca Roguer | Todos los derechos reservados.</p>
    </footer>

</body>
</html>

@endsection