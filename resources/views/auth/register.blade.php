<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register-container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .register-container label {
            color: #ddd;
        }
        .register-container .form-control {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            color: #333;
        }
        .register-container .btn {
            background-color: #28a745;
            border: none;
            font-weight: bold;
        }
        .register-container .btn:hover {
            background-color: #218838;
        }
        .register-container a {
            color: #00bcd4;
        }
        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="text-center">Registrarse</h2>

        <!-- Mostrar errores -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}" required>
                @error('correo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" class="form-control" required>
                @error('contraseña')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="confirmar_contraseña" class="form-label">Confirmar contraseña:</label>
                <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" class="form-control" required>
                @error('confirmar_contraseña')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Registrarse</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
