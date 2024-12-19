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
                    <td>2</td>
                    <td>Libros / Artículos</td>
                    <td><a href="#" class="btn btn-primary">Añadir a Base de datos</a></td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection