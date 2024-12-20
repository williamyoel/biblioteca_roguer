@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Documentos</title>
    <!-- Agregar Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para las tarjetas de libros */
        .card {
            border: 1px solid #ddd;  /* Borde sutil */
            border-radius: 10px;     /* Bordes redondeados */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);  /* Sombra sutil */
            margin-bottom: 20px;  /* Separación entre tarjetas */
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;  /* Mantiene la imagen centrada y con aspecto adecuado */
        }

        .col-md-4 {
            display: flex;
            justify-content: center;
        }

        /* Asegurarse de que haya tres libros por fila */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .col-md-4 {
            flex: 0 0 32%; /* 3 libros por fila (100% / 3 ≈ 32%) */
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Buscar Documentos</h2>

        <!-- Buscador -->
        <div class="form-group mt-4">
            <label for="buscar">Buscar Documento</label>
            <input type="text" id="buscar" class="form-control" placeholder="Busca un libro o artículo..." oninput="buscarDocumentos()">
        </div>

        <!-- Mostrar libros gratuitos -->
        <div id="libros-gratuitos" class="mt-4">
            <h4>Libros Gratuitos</h4>
            <div class="row" id="libros-gratuitos-list">
                <!-- Los libros gratuitos se agregarán aquí dinámicamente -->
            </div>
        </div>

        <!-- Botones para filtrar -->
        <div class="mt-4">
            <button class="btn btn-info" onclick="mostrarArticulos()">Artículos</button>
            <button class="btn btn-info" onclick="mostrarLibrosDePaga()">Libros de Paga</button>
        </div>

        <!-- Mostrar artículos -->
        <div id="articulos" class="mt-4" style="display: none;">
            <h4>Artículos</h4>
            <div class="row" id="articulos-list">
                <!-- Los artículos se agregarán aquí dinámicamente -->
            </div>
        </div>

        <!-- Mostrar libros de paga -->
        <div id="libros-paga" class="mt-4" style="display: none;">
            <h4>Libros de Paga</h4>
            <div class="row" id="libros-paga-list">
                <!-- Los libros de paga se agregarán aquí dinámicamente -->
            </div>
        </div>
    </div>

    <!-- Script para manejar la lógica -->
    <script>
        // Función para hacer la búsqueda de documentos
        function buscarDocumentos() {
            let query = document.getElementById('buscar').value;
            fetch(`/api/documentos?search=${query}`)
                .then(response => response.json())
                .then(data => {
                    mostrarLibrosGratuitos(data.gratuitos);
                });
        }

        // Función para mostrar libros gratuitos
        function mostrarLibrosGratuitos(libros) {
            let container = document.getElementById('libros-gratuitos-list');
            container.innerHTML = ''; // Limpiar la lista
            libros.forEach(libro => {
                let imagen = libro.imagen || '/images/placeholder.png'; // Imagen predeterminada
                let enlace = libro.enlace || '#'; // Enlace predeterminado
                let libroElement = `
                    <div class="col-md-4">
                        <div class="card">
                            <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">${libro.titulo}</h5>
                                <p class="card-text">${libro.descripcion}</p>
                                <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Libro</a>
                            </div>
                        </div>
                    </div>
                `;
                container.innerHTML += libroElement;
            });
        }

        // Función para mostrar artículos
        function mostrarArticulos() {
            document.getElementById('articulos').style.display = 'block';
            document.getElementById('libros-paga').style.display = 'none';

            fetch('/api/articulos')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('articulos-list');
                    container.innerHTML = ''; // Limpiar lista de artículos
                    data.forEach(articulo => {
                        let imagen = articulo.imagen ? articulo.imagen : '/images/placeholder.png'; // Imagen predeterminada
                        let enlace = articulo.enlace ? articulo.enlace : '#'; // Enlace predeterminado
                        let articuloElement = `
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="${imagen}" alt="${articulo.titulo}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">${articulo.titulo}</h5>
                                        <p class="card-text">${articulo.descripcion}</p>
                                        <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Artículo</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.innerHTML += articuloElement;
                    });
                });
        }

        // Función para mostrar libros de paga
        function mostrarLibrosDePaga() {
            document.getElementById('libros-paga').style.display = 'block';
            document.getElementById('articulos').style.display = 'none';

            fetch('/api/libros-paga')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('libros-paga-list');
                    container.innerHTML = ''; // Limpiar lista de libros de paga
                    data.forEach(libro => {
                        let imagen = libro.imagen ? libro.imagen : '/images/placeholder.png'; // Imagen predeterminada
                        let enlace = libro.enlace ? libro.enlace : '#'; // Enlace predeterminado
                        let libroElement = `
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">${libro.titulo}</h5>
                                        <p class="card-text">${libro.descripcion}</p>
                                        <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Libro</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.innerHTML += libroElement;
                    });
                });
        }

        // Llamar a la función al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            mostrarLibrosGratuitos([]);
        });
    </script>

    <!-- Agregar Bootstrap JS al final -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
