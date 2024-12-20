@extends('menu')

@section('content')



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('library-background.jpg');
            background-size: cover;
            color: #333;
        }

        header {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .search-bar input[type="text"] {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar select, .search-bar button {
            padding: 10px;
            margin-left: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .suggestions {
            width: 20%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .book-list {
            width: 70%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .book-card {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .book-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .book-card button {
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>Biblioteca</header>

    <div class="search-bar">
        <input type="text" placeholder="Buscar">
        <select>
            <option value="categorias">Categorías</option>
        </select>
        <button>Buscar</button>
    </div>

    <div class="content">
        <!-- Suggestions Section -->
        <div class="suggestions">
            <h3>Sugerencias</h3>
            <div>
                <strong>Usuario:</strong> Jhon
                <p>Recomiendo el libro:</p>
                <p><em>El arte de la estadística</em></p>
            </div>
        </div>

        <!-- Book List Section -->
        <div class="book-list">
            <div class="book-card">
                <img src="book1.jpg" alt="Introducción a la informática">
                <h4>Introducción a la informática</h4>
                <p>Edición 2014</p>
                <button>Archivo</button>
                <button>Descargar</button>
            </div>
            <div class="book-card">
                <img src="book2.jpg" alt="Informática">
                <h4>Informática</h4>
                <p>Lorem Ipsum</p>
                <button>Archivo</button>
                <button>Descargar</button>
            </div>
            <div class="book-card">
                <img src="book3.jpg" alt="Inteligencia Artificial">
                <h4>Guía de Escritura Creativa con Inteligencia Artificial</h4>
                <p>Jimena Tierra</p>
                <button>Archivo</button>
                <button>Descargar</button>
            </div>
        </div>
    </div>

    <footer>&copy; 2024 Biblioteca Roguer | Todos los derechos reservados.</footer>

</body>
</html>


@endsection
