<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerencias y Aportes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="suggestions">
        <h1>Sugerencias</h1>
        <table>
            <tr>
                <th>No.</th>
                <th>Texto</th>
                <th>Enlace</th>
                <th>Estado</th>
            </tr>
            @foreach ($sugerencias as $sugerencia)
            <tr>
                <td>{{ $sugerencia->id }}</td>
                <td>{{ $sugerencia->texto }}</td>
                <td>{{ $sugerencia->enlace }}</td>
                <td>{{ $sugerencia->estado }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
