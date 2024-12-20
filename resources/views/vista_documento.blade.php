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
        /* Estilos para los botones, alinearlos a la misma altura que el buscador */
        .btn-group {
            display: flex;
            gap: 10px;  /* Espaciado entre los botones */
            margin-top: 20px;
        }

        /* Estilo adicional para los botones */
        .btn {
            flex: 1;
        }

        /* Contenedor para mostrar los libros, artículos y otros documentos */
        .documents-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* 3 columnas adaptativas */
            gap: 20px;  /* Espacio entre las tarjetas */
            margin-top: 20px;
        }

        /* Estilo para las tarjetas */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Estilo para las imágenes */
        .card-img-top {
            height: 200px;  /* Altura fija para las imágenes */
            object-fit: cover;  /* Mantiene la imagen centrada y ajustada */
        }

        .card-body {
            padding: 15px;
        }

        .col-md-4 {
            display: flex;
            justify-content: center;
            padding: 5px;
        }

        /* Contenedor para los libros gratuitos, artículos y libros de paga */
        .documents-section {
            margin-top: 30px;
        }

        .search-container {
            margin-top: 30px; /* Ajuste el margen superior para mover el campo más arriba */
        }

        .document-title {
            margin-top: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Mensaje si no hay libros disponibles */
        .no-results {
            text-align: center;
            color: #888;
            font-size: 1.2rem;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Buscar Documentos</h2>

        <!-- Botones para filtrar -->
        <div class="btn-group">
            <button class="btn btn-info" onclick="mostrarArticulos()">Artículos</button>
            <button class="btn btn-info" onclick="mostrarLibrosDePaga()">Libros de Paga</button>
        </div>

        <!-- Buscador -->
        <div class="form-group search-container mt-4">
            <label for="buscar">Buscar Documento</label>
            <input type="text" id="buscar" class="form-control" placeholder="Busca un libro o artículo..." oninput="buscarDocumentos()">
        </div>

        <!-- Mostrar libros gratuitos -->
        <div id="libros-gratuitos" class="documents-section">
            <h4 class="document-title">Libros Gratuitos</h4>
            <div id="libros-gratuitos-list" class="documents-container">
                <!-- Los libros gratuitos se agregarán aquí dinámicamente -->
            </div>
            <div id="no-libros-gratuitos" class="no-results" style="display: none;">
                No hay libros gratuitos disponibles.
            </div>
        </div>

        <!-- Mostrar artículos -->
        <div id="articulos" class="documents-section" style="display: none;">
            <h4 class="document-title">Artículos</h4>
            <div id="articulos-list" class="documents-container">
                <!-- Los artículos se agregarán aquí dinámicamente -->
            </div>
        </div>

        <!-- Mostrar libros de paga -->
        <div id="libros-paga" class="documents-section" style="display: none;">
            <h4 class="document-title">Libros de Paga</h4>
            <div id="libros-paga-list" class="documents-container">
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
            let noResults = document.getElementById('no-libros-gratuitos');
            container.innerHTML = ''; // Limpiar la lista
            if (libros && libros.length > 0) {
                libros.forEach(libro => {
                    let imagen = libro.imagen || '/images/placeholder.png';
                    let enlace = libro.enlace || '#';
                    let libroElement = `
                        <div class="card">
                            <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">${libro.titulo}</h5>
                                <p class="card-text">${libro.descripcion}</p>
                                <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Libro</a>
                            </div>
                        </div>
                    `;
                    container.innerHTML += libroElement;
                });
                noResults.style.display = 'none'; // Ocultar mensaje de no resultados
            } else {
                noResults.style.display = 'block'; // Mostrar mensaje de no resultados
            }
        }

        // Función para mostrar artículos
        function mostrarArticulos() {
            document.getElementById('articulos').style.display = 'block';
            document.getElementById('libros-paga').style.display = 'none';
            document.getElementById('libros-gratuitos').style.display = 'none';

            fetch('/api/articulos')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('articulos-list');
                    container.innerHTML = ''; // Limpiar lista de artículos
                    data.forEach(articulo => {
                        let imagen = articulo.imagen ? articulo.imagen : '/images/placeholder.png';
                        let enlace = articulo.enlace ? articulo.enlace : '#';
                        let articuloElement = `
                            <div class="card">
                                <img src="${imagen}" alt="${articulo.titulo}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">${articulo.titulo}</h5>
                                    <p class="card-text">${articulo.descripcion}</p>
                                    <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Artículo</a>
                                </div>
                            </div>
                        `;
                        container.innerHTML += articuloElement;
                    });
                });
        }

        // Función para mostrar libros de paga
        function mostrarLibrosDePaga() {
            document.getElementById('articulos').style.display = 'none';
            document.getElementById('libros-paga').style.display = 'block';
            document.getElementById('libros-gratuitos').style.display = 'none';

            fetch('/api/libros-paga')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('libros-paga-list');
                    container.innerHTML = ''; // Limpiar lista
                    data.forEach(libro => {
                        let imagen = libro.imagen ? libro.imagen : '/images/placeholder.png';
                        let enlace = libro.enlace ? libro.enlace : '#';
                        let libroPagaElement = `
                            <div class="card">
                                <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">${libro.titulo}</h5>
                                    <p class="card-text">${libro.descripcion}</p>
                                    <a href="${enlace}" class="btn btn-primary" target="${enlace !== '#' ? '_blank' : ''}">Ver Libro</a>
                                </div>
                            </div>
                        `;
                        container.innerHTML += libroPagaElement;
                    });
                });
        }
    </script>

    <!-- Añadir Popper y Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
