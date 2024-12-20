<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
        <div class="profile-edit">
            <h1>Editar Perfil</h1>
            
            <!-- Mostrar mensaje de éxito (si lo hay) -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Formulario de edición -->
            <form action="{{ route('usuario.update', $user->idusuario) }}" method="POST" enctype="multipart/form-data">
                @csrf <!-- Incluir token CSRF para seguridad -->
                @method('POST') <!-- Usamos POST porque estamos enviando datos para actualizar -->

                <!-- Campo para editar el nombre -->
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $user->nombre) }}" required>

                <!-- Campo para cambiar la foto -->
                <label for="rutafoto">Foto de Perfil</label>
                <input type="file" id="rutafoto" name="rutafoto" accept="image/*">

                <!-- Mostrar errores de validación (si los hay) -->
                @if($errors->any())
                    <div class="errors">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Botón para guardar cambios -->
                <button type="submit">Guardar Cambios</button>
            </form>

            <!-- Enlace para regresar -->
            <a href="{{ route('usuario.profile') }}">
                <button>⬅️ Regresar</button>
            </a>
        </div>
    @else
        <p>No tienes acceso a esta sección. Por favor <a href="{{ route('login') }}">inicia sesión</a>.</p>
    @endif
</body>
</html>
