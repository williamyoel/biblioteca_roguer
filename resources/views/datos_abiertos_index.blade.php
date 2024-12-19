<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Abiertos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="data">
        <h1>Datos Abiertos</h1>
        <table>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Enlace</th>
                <th>Estado</th>
            </tr>
            @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->descripcion }}</td>
                <td>{{ $dato->enlace }}</td>
                <td>{{ $dato->estado }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
