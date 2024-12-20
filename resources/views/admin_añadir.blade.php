@extends('menuADMIN')

@section('content')


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Elementos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Añadir</h1>

        <!-- Tabla con las opciones -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>¿Qué desea añadir?</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Base de datos</td>
                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDatabaseModal">Añadir a Base de datos</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Libros/Articulos</td>
                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#selectDocumentModal">Añadir libros/Articulos</a></td>
                </tr>
    
            </tbody>
        </table>
    </div>

    <!-- Modal para añadir a la base de datos -->
    <div class="modal fade" id="addDatabaseModal" tabindex="-1" aria-labelledby="addDatabaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDatabaseModalLabel">Añadir a Base de Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para añadir datos -->
                    <form action="/admin/añadir" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="enlace" class="form-label">Enlace</label>
                            <input type="url" class="form-control" id="enlace" name="enlace" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Modal para seleccionar tipo de documento -->
<div class="modal fade" id="selectDocumentModal" tabindex="-1" aria-labelledby="selectDocumentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="selectDocumentModalLabel">Seleccionar tipo de documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="selectTypeForm">
                        <div class="mb-3">
                            <label for="documentType" class="form-label">¿Qué desea añadir?</label>
                            <select class="form-select" id="documentType" name="documentType" required>
                                <option value="articulo">Artículo</option>
                                <option value="libroGratis">Libro Gratis</option>
                                <option value="libroPago">Libro de Pago</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#addDocumentModal">Siguiente</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal para añadir el documento (según el tipo seleccionado) -->
<div class="modal fade" id="addDatabaseModal" tabindex="-1" aria-labelledby="addDatabaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDatabaseModalLabel">Añadir a Base de Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para añadir datos según el tipo de documento -->
                <form action="/admin/añadir" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <div class="mb-3">
                        <label for="resumen" class="form-label">Resumen</label>
                        <textarea class="form-control" id="resumen" name="resumen" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="rutarchivo" class="form-label">Ruta del archivo</label>
                        <input type="text" class="form-control" id="rutarchivo" name="rutarchivo">
                    </div>
                    <div class="mb-3">
                        <label for="enlace" class="form-label">Enlace</label>
                        <input type="text" class="form-control" id="enlace" name="enlace">
                    </div>
                    <div class="mb-3">
                        <label for="portada" class="form-label">Portada</label>
                        <input type="text" class="form-control" id="portada" name="portada">
                    </div>
                    <div class="mb-3">
                        <label for="tipodocumento" class="form-label">Tipo de documento</label>
                        <input type="text" class="form-control" id="tipodocumento" name="tipodocumento" readonly>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="nextButton">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para el siguiente paso -->
<div class="modal fade" id="nextModal" tabindex="-1" aria-labelledby="nextModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nextModalLabel">Confirmar información</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido del siguiente modal -->
                <p>Este es el siguiente paso del proceso.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('nextButton').addEventListener('click', function () {
        // Cerrar el primer modal
        var currentModal = new bootstrap.Modal(document.getElementById('addDatabaseModal'));
        currentModal.hide();
        
        // Abrir el siguiente modal
        var nextModal = new bootstrap.Modal(document.getElementById('nextModal'));
        nextModal.show();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection