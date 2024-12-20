@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Base de Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="h1">Bases de Datos</div>

    <table class="table mt-3" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Enlace</th>
                <th>Estado</th>
                <th>Fecha de Creación</th>
                <th>Reseña</th> <!-- Nueva columna para las reseñas -->
                <th>Acción</th> <!-- Columna de acción con botón -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se llenarán los datos de las bases de datos -->
        </tbody>
    </table>

    <!-- Modal para agregar reseña -->
    <div id="addReseñaModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Agregar Reseña</h2>
            <form id="addReseñaForm">
                <input type="hidden" id="idBasedato" name="idBasedato">
                <label for="reseña">Reseña:</label>
                <textarea id="reseña" name="reseña" required></textarea>
                <button type="submit">Guardar</button>
                <button type="button" id="closeModalBtn">Cerrar</button>
            </form>
        </div>
    </div>

    <script>
        // Realizar una solicitud AJAX para obtener los datos
        fetch('/api/basededatos')
            .then(response => response.json())
            .then(data => {
                // Acceder a los datos obtenidos
                let bases = data;
                let tbody = document.querySelector('tbody');

                // Limpiar la tabla antes de llenarla
                tbody.innerHTML = '';

                // Recorrer los datos y agregar filas a la tabla
                bases.forEach(base => {
                    let tr = document.createElement('tr');

                    tr.innerHTML = `
                        <td>${base.idbasedatos}</td>
                        <td>${base.nombre}</td>
                        <td>${base.descripcion}</td>
                        <td><a href="${base.enlace}" target="_blank">${base.enlace}</a></td>
                        <td>${base.estado}</td>
                        <td>${base.creado_en}</td>
                        <td>${base.reseña ? base.reseña : 'Sin reseña'}</td>
                        <td><button class="btn btn-primary" onclick="openReseñaModal(${base.idbasedatos})">Agregar Reseña</button></td>
                    `;

                    tbody.appendChild(tr);
                });
            })
            .catch(error => console.error('Error al cargar los datos:', error));

        // Modal y función para agregar reseña
        const modal = document.getElementById("addReseñaModal");
        const closeBtn = document.getElementById("closeModalBtn");

        // Abrir el modal para agregar reseña
        function openReseñaModal(idBasedato) {
            document.getElementById("idBasedato").value = idBasedato; // Asignar el id al campo oculto
            modal.style.display = "block";
        }

        // Cerrar el modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        // Enviar la reseña con AJAX
        document.getElementById('addReseñaForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('/api/reseñas', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('¡Éxito!', 'Reseña añadida correctamente', 'success');
                    modal.style.display = 'none';
                    location.reload(); // Recargar la página para mostrar la nueva reseña
                } else {
                    Swal.fire('Error', 'Hubo un problema al añadir la reseña', 'error');
                }
            })
            .catch(error => console.error('Error al enviar los datos:', error));
        });
    </script>

</body>
</html>

@endsection
