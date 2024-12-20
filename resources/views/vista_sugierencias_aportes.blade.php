@extends('menu')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Recomendaciones</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Para notificaciones -->
    <style>
        /* Estilos del Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 25px;
            color: black;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Estilo del formulario dentro del modal */
        #addRecommendationForm {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        #addRecommendationForm label {
            font-weight: bold;
        }

        #addRecommendationForm input,
        #addRecommendationForm textarea,
        #addRecommendationForm select {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        #addRecommendationForm button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #addRecommendationForm button[type="button"] {
            background-color: #6c757d;
        }

        #addRecommendationForm button:hover {
            background-color: #0056b3;
        }

        #addRecommendationForm button[type="button"]:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="h1">Sugerencias</div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table mt-3" border="1">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Comentario</th>
                <th>Enlace</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Likes</th>
            </tr>
        </thead>
        <tbody>
            <!-- Los datos de la tabla serán llenados por el script de AJAX -->
        </tbody>
    </table>

    <!-- Botón para abrir el modal -->
    <button class="btn btn-primary" id="addRecommendationBtn">Añadir Recomendación</button>

    <!-- Modal para agregar recomendación -->
    <div id="addRecommendationModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Agregar Recomendación</h2>
            <form id="addRecommendationForm">
                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" required></textarea>

                <label for="enlace">Enlace:</label>
                <input type="url" id="enlace" name="enlace" required>

                <label for="picture">Imagen (URL):</label>
                <input type="url" id="picture" name="picture" required>

                <label for="estado">Estado:</label>
                <select id="estado" name="estado" required>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>

                <button type="submit">Guardar</button>
                <button type="button" id="closeModalBtn">Cerrar</button>
            </form>
        </div>
    </div>

    <script>
        // Obtener los elementos del modal y los botones
        const modal = document.getElementById("addRecommendationModal");
        const btn = document.getElementById("addRecommendationBtn");
        const closeBtn = document.getElementById("closeModalBtn");

        // Cuando se haga clic en el botón, abrir el modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Cuando se haga clic en el botón de cerrar, cerrar el modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        // Cuando se haga clic fuera del modal, cerrarlo
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }

        // Enviar el formulario de recomendación
        document.getElementById('addRecommendationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            
            // Enviar la recomendación con AJAX
            fetch('/api/recomendaciones')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('¡Éxito!', 'Recomendación añadida correctamente', 'success');
                    modal.style.display = 'none';
                    location.reload(); // Recargar la página para mostrar la nueva recomendación
                } else {
                    Swal.fire('Error', 'Hubo un problema al añadir la recomendación', 'error');
                }
            })
            .catch(error => console.error('Error al enviar los datos:', error));
        });

        // Realiza una solicitud AJAX para obtener los datos
        fetch('/api/recomendaciones')
            .then(response => response.json())
            .then(data => {
                let recomendaciones = data;
                let tbody = document.querySelector('tbody');

                // Limpiar la tabla antes de llenarla
                tbody.innerHTML = '';

                // Recorrer los datos y llenar la tabla
                recomendaciones.forEach(recomendacion => {
                    let tr = document.createElement('tr');

                    tr.innerHTML = `
                        <td>${recomendacion.idrecomendaciondocumento}</td>
                        <td>${recomendacion.comentario}</td>
                        <td>
                            <a href="${recomendacion.enlace}" target="_blank">${recomendacion.enlace}</a>
                        </td>
                        <td>
                            <img src="${recomendacion.picture}" alt="Imagen" style="width: 50px; height: 50px;">
                        </td>
                        <td>${recomendacion.estado}</td>
                        <td>${recomendacion.descripcion}</td>
                        <td>1</td> <!-- Por defecto el valor de "likes" es 1 -->
                    `;

                    tbody.appendChild(tr);
                });
            })
            .catch(error => console.error('Error al cargar los datos:', error));
    </script>

</body>
</html>

@endsection
