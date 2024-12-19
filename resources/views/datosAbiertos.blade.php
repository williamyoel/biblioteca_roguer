<!-- resources/views/datosabiertos.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bases de Datos Abiertas</title>
</head>
<body>
    <h1>Lista de Bases de Datos Abiertas</h1>

    <a href="{{ route('basedatos.create') }}">Crear nueva base de datos</a>

    <ul>
        @foreach ($basedatos as $basedato)
            <li>
                <strong>{{ $basedato->nombre }}</strong> 
                - {{ $basedato->estado ? 'Activo' : 'Inactivo' }}
                <a href="{{ route('basedatos.edit', $basedato->idbasedatos) }}">Editar</a>
                <form action="{{ route('basedatos.destroy', $basedato->idbasedatos) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
