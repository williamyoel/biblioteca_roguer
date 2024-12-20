@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte y Ayuda</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Columna de Preguntas Frecuentes -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5><i class="bi bi-question-circle me-2"></i> Preguntas Frecuentes</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>1. Sobre el acceso y registro</span>
                                <i class="bi bi-info-circle"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>2. Sobre el catálogo y búsqueda</span>
                                <i class="bi bi-search"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>3. Sobre las descargas</span>
                                <i class="bi bi-download"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>4. Sobre los libros de pago</span>
                                <i class="bi bi-credit-card"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Columna de Instrucciones -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5><i class="bi bi-lightbulb me-2"></i> Instrucciones</h5>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">
                                <span>Registro y acceso</span>
                                <i class="bi bi-person-check float-end"></i>
                            </li>
                            <li class="list-group-item">
                                <span>Buscar y filtrar libros</span>
                                <i class="bi bi-filter float-end"></i>
                            </li>
                            <li class="list-group-item">
                                <span>Resolver problemas técnicos</span>
                                <i class="bi bi-tools float-end"></i>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
