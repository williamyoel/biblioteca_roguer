<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fondo general */
        body {
            background: url('https://blog.pearsonlatam.com/educacion-del-futuro/que-contenidos-ofrece-una-biblioteca-digital-a-tu-institucion') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenedor del formulario */
        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Estilo de las etiquetas */
        .login-container label {
            color: #ddd;
        }

        /* Campos de texto */
        .login-container .form-control {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            color: #333;
        }

        /* Botones */
        .login-container .btn {
            background-color: #007bff;
            border: none;
            font-weight: bold;
        }

        .login-container .btn:hover {
            background-color: #0056b3;
        }

        /* Enlaces */
        .login-container a {
            color: #00bcd4;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Contenedor principal del formulario -->
    <div class="login-container">
        <h2 class="text-center">Iniciar sesión</h2>

        <!-- Mostrar errores (en caso de validación fallida) -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de inicio de sesión -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Campo para correo -->
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}" required>
                @error('correo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Campo para contraseña -->
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" class="form-control" required>
                @error('contraseña')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón para enviar el formulario -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>

        <!-- Enlaces para registro y recuperación de contraseña -->
        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="d-block">Crear cuenta</a>
            <a href="#" class="d-block">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
