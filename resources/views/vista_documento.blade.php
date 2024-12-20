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
    .buscardoc {
        position: fixed;
        top: 0;
        left: 250px; /* Ajusta según el ancho del menú lateral */
        width: calc(100% - 250px); /* Calcula el espacio restante */
        background-color: #fff; /* Fondo blanco para evitar solapamientos visuales */
        padding: 15px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para diferenciar del contenido */
        z-index: 1000; /* Asegura que esté por encima de otros elementos */
    }

    .content-scrollable {
        margin-top: 120px; /* Margen igual a la altura de la barra fija */
        padding: 15px;
        height: calc(100vh - 120px); /* Altura restante */
        overflow-y: auto; /* Hace el contenido desplazable */
    }

    .btn-group {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .btn {
        flex: 1;
    }

    .documents-section {
        margin-bottom: 15px;
    }

    .card {
        margin-bottom: 15px;
    }


    .mostrarLIBRS{
        
        display: flex;
        height: 100vh;
    }
        
    
</style>

</head>
<body>
    <div class="container">
        <div class="buscardoc">
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
        </div>
        <div class="mostrarLIBRS">
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
        function buscarDocumentos() {
            let query = document.getElementById('buscar').value.trim();
            if (query) {
                fetch(`/api/documentos?search=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        mostrarLibrosGratuitos(data.gratuitos || []);
                    })
                    .catch(error => console.error('Error al buscar documentos:', error));
            }
        }

        function mostrarLibrosGratuitos(libros) {
            let container = document.getElementById('libros-gratuitos-list');
            let noResults = document.getElementById('no-libros-gratuitos');
            container.innerHTML = '';
            if (libros.length > 0) {
                libros.forEach(libro => {
                    let imagen = libro.imagen || '/images/placeholder.png';
                    let enlace = libro.enlace || '#';
                    container.innerHTML += `
                        <div class="card">
                            <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">${libro.titulo}</h5>
                                <p class="card-text">${libro.descripcion}</p>
                                <a href="${enlace}" class="btn btn-primary" target="_blank">Ver Libro</a>
                            </div>
                        </div>
                    `;
                });
                noResults.style.display = 'none';
            } else {
                noResults.style.display = 'block';
            }
        }

        function mostrarArticulos() {
            cambiarSeccion('articulos');
            fetch('/api/articulos')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('articulos-list');
                    container.innerHTML = '';
                    data.forEach(articulo => {
                        let imagen = articulo.imagen || '/images/placeholder.png';
                        let enlace = articulo.enlace || '#';
                        container.innerHTML += `
                            <div class="card">
                                <img src="${imagen}" alt="${articulo.titulo}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">${articulo.titulo}</h5>
                                    <p class="card-text">${articulo.descripcion}</p>
                                    <a href="${enlace}" class="btn btn-primary" target="_blank">Ver Artículo</a>
                                </div>
                            </div>
                        `;
                    });
                });
        }

        function mostrarLibrosDePaga() {
            cambiarSeccion('libros-paga');
            fetch('/api/libros-paga')
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById('libros-paga-list');
                    container.innerHTML = '';
                    data.forEach(libro => {
                        let imagen = libro.imagen || '/images/placeholder.png';
                        let enlace = libro.enlace || '#';
                        container.innerHTML += `
                            <div class="card">
                                <img src="${imagen}" alt="${libro.titulo}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">${libro.titulo}</h5>
                                    <p class="card-text">${libro.descripcion}</p>
                                    <a href="${enlace}" class="btn btn-primary" target="_blank">Ver Libro</a>
                                </div>
                            </div>
                        `;
                    });
                });
        }

        function cambiarSeccion(id) {
            document.getElementById('articulos').style.display = 'none';
            document.getElementById('libros-paga').style.display = 'none';
            document.getElementById('libros-gratuitos').style.display = 'none';
            document.getElementById(id).style.display = 'block';
        }

    </script>

    <!-- Añadir Popper y Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
