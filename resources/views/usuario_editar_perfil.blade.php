@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil del Usuario</title>
    <!-- Agregar Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
   
        <div class="container mt-5">
            <h1>Editar Perfil del Usuario</h1>

            <!-- Foto de perfil actual -->
            <div class="text-center mb-4">
                <img src="{{ $user->ruta_foto ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png' }}" alt="Foto del Usuario" style="width:150px; height:150px; border-radius:50%;">
            </div>

            <!-- Formulario de edición de perfil -->
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Método PUT para actualizar datos -->

                <!-- Campo para nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="" required>
                </div>

                <!-- Campo para correo -->
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="" required>
                </div>

                <!-- Campo para contraseña -->
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Dejar en blanco si no deseas cambiarla">
                </div>

                <!-- Campo para subir foto de perfil -->
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto de Perfil</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>

                <!-- Botones para enviar o cancelar -->
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="#" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>

    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
