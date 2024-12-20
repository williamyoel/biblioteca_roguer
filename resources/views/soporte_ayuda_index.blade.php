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
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                data-bs-toggle="modal" data-bs-target="#modalAccesoRegistro">
                                <span>1. Sobre el acceso y registro</span>
                                <i class="bi bi-info-circle"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                data-bs-toggle="modal" data-bs-target="#modalBusqueda">
                                <span>2. Sobre el catálogo y búsqueda</span>
                                <i class="bi bi-search"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                data-bs-toggle="modal" data-bs-target="#modalDescargas">
                                <span>3. Sobre las descargas</span>
                                <i class="bi bi-download"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                data-bs-toggle="modal" data-bs-target="#modalLibrosPago">
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
                            <li class="list-group-item"
                                data-bs-toggle="modal" data-bs-target="#modalRegistro">
                                <span>Registro y acceso</span>
                                <i class="bi bi-person-check float-end"></i>
                            </li>
                            <li class="list-group-item"
                                data-bs-toggle="modal" data-bs-target="#modalBusquedaFiltro">
                                <span>Buscar y filtrar libros</span>
                                <i class="bi bi-filter float-end"></i>
                            </li>
                            <li class="list-group-item"
                                data-bs-toggle="modal" data-bs-target="#modalProblemasTecnicos">
                                <span>Resolver problemas técnicos</span>
                                <i class="bi bi-tools float-end"></i>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modales -->
   <!-- Modal Acceso y Registro -->
<div class="modal fade" id="modalAccesoRegistro" tabindex="-1" aria-labelledby="modalAccesoRegistroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAccesoRegistroLabel">Sobre el acceso y registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>Este apartado proporciona detalles sobre cómo funciona el <strong>acceso</strong> y el <strong>registro</strong> en nuestra plataforma.</p>

                <h6>Acceso a la Plataforma</h6>
                <p>Para acceder a los recursos y servicios ofrecidos, debes contar con una cuenta registrada en el sistema. Si ya tienes una cuenta, simplemente ingresa tu nombre de usuario y contraseña en la página de inicio de sesión.</p>
                <p>Si no estás registrado, sigue el proceso de <strong>registro</strong> para crear una cuenta nueva.</p>

                <h6>Proceso de Registro</h6>
                <p>El proceso de registro es rápido y sencillo. Para crear una cuenta, sigue estos pasos:</p>
                <ol>
                    <li>Accede a la página de <strong>registro</strong>.</li>
                    <li>Rellena los campos con tu <strong>información personal</strong> (nombre, correo electrónico, etc.).</li>
                    <li>Elige una <strong>contraseña segura</strong>.</li>
                    <li>Haz clic en <strong>registrarse</strong> y espera la confirmación por correo electrónico.</li>
                    <li>Confirma tu cuenta desde el correo recibido.</li>
                    <li>Accede a tu cuenta con tus credenciales y comienza a usar la plataforma.</li>
                </ol>

                <h6>Recuperación de Contraseña</h6>
                <p>Si olvidas tu contraseña, puedes hacer clic en el enlace de recuperación para restablecerla y recuperar el acceso a tu cuenta.</p>

                <h6>Seguridad de tu Cuenta</h6>
                <p>Recuerda que proteger tu cuenta es importante. Asegúrate de utilizar contraseñas seguras y no compartir tu información de acceso con otras personas.</p>

                <hr>
                <p>Solo los usuarios registrados y autenticados podrán acceder a todas las funcionalidades de la plataforma, como el catálogo de recursos, la búsqueda de materiales y la descarga de contenidos.</p>
            </div>
        </div>
    </div>
</div>


<!-- Modal Catálogo y Búsqueda -->
<div class="modal fade" id="modalBusqueda" tabindex="-1" aria-labelledby="modalBusquedaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBusquedaLabel">Sobre el catálogo y búsqueda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>Este apartado explica cómo funciona el <strong>catálogo</strong> de recursos y el sistema de <strong>búsqueda</strong> disponible en la plataforma.</p>
                
                <h6>Catálogo de Recursos</h6>
                <p>El catálogo organiza los recursos de manera que los usuarios puedan explorar distintos materiales como libros, guías y manuales. Los recursos están clasificados por:</p>
                <ul>
                    <li><strong>Materia</strong></li>
                    <li><strong>Nivel educativo</strong></li>
                    <li><strong>Autor</strong></li>
                    <li><strong>Tema</strong></li>
                </ul>
                
                <h6>Sistema de Búsqueda</h6>
                <p>El sistema de búsqueda permite encontrar recursos específicos mediante palabras clave. Además, puedes aplicar filtros para refinar los resultados, como:</p>
                <ul>
                    <li><strong>Materia</strong></li>
                    <li><strong>Autor</strong></li>
                    <li><strong>Nivel académico</strong></li>
                </ul>
                <p>Para realizar una búsqueda, solo debes ingresar una palabra o frase en el campo de búsqueda, y el sistema mostrará los resultados más relevantes dentro de la plataforma.</p>
                
                <h6>Si no encuentras lo que buscas</h6>
                <p>Si no encuentras un recurso específico en el catálogo, puedes sugerirlo a través del formulario de contacto, para que se considere su inclusión en futuras actualizaciones.</p>
                
                <hr>
                <h6>Ejemplo de uso del catálogo</h6>
                <p>Imagina que estás buscando libros sobre <strong>Matemáticas Avanzadas</strong>. Simplemente debes ingresar "Matemáticas Avanzadas" en la barra de búsqueda, y el sistema te mostrará una lista de los libros y recursos relacionados con ese tema. También puedes aplicar filtros como <strong>nivel académico</strong> o <strong>tipo de recurso</strong>.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Descargas -->
<div class="modal fade" id="modalDescargas" tabindex="-1" aria-labelledby="modalDescargasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDescargasLabel">Sobre las descargas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>Este apartado proporciona información sobre las <strong>descargas</strong> disponibles en la plataforma.</p>

                <h6>Enlaces Externos</h6>
                <p>La plataforma no ofrece descargas directas de archivos que puedan estar protegidos por derechos de autor. En su lugar, los usuarios son redirigidos a <strong>enlaces externos</strong> a plataformas legales y autorizadas, donde pueden descargar recursos de manera segura.</p>

                <h6>Tipos de Recursos Disponibles</h6>
                <p>Los recursos disponibles para descarga incluyen, pero no se limitan a:</p>
                <ul>
                    <li><strong>Archivos PDF</strong></li>
                    <li><strong>Libros electrónicos</strong></li>
                    <li><strong>Materiales de estudio o referencia</strong></li>
                </ul>

                <h6>Verificación de Fuentes</h6>
                <p>Es importante que los usuarios verifiquen la legitimidad de las fuentes externas antes de realizar cualquier descarga. Las plataformas a las que se redirige cuentan con licencias y permisos para ofrecer contenido legalmente autorizado.</p>
                
                <p>De este modo, facilitamos el acceso a materiales útiles sin comprometer la legalidad ni los derechos de autor.</p>
            </div>
        </div>
    </div>
</div>


<!-- Modal Sobre Los Libros de Pago -->
<div class="modal fade" id="modalLibrosPago" tabindex="-1" aria-labelledby="modalLibrosPagoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLibrosPagoLabel">Sobre Los Libros de Pago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>Este apartado está diseñado para ofrecerte información sobre los <strong>libros de pago</strong> disponibles, sin realizar ventas directas a través de esta plataforma. Esto se debe al respeto por los derechos de autor y las políticas legales que regulan la distribución de contenido protegido.</p>
                
                <h6>¿Cómo funciona?</h6>
                <p>En lugar de realizar una venta directa, se proporciona la siguiente información sobre cada libro:</p>
                <ul>
                    <li><strong>Título:</strong> El nombre del libro.</li>
                    <li><strong>Resumen:</strong> Una breve descripción del contenido del libro.</li>
                    <li><strong>Portada:</strong> Una imagen representativa del libro.</li>
                </ul>

                <h6>Compra del Libro</h6>
                <p>Para adquirir el libro, se incluye un <strong>enlace externo</strong> que te llevará a una tienda legítima, donde podrás realizar la compra de forma segura y legal. Esto permite a los usuarios acceder fácilmente a la información sobre los libros sin infringir las leyes de propiedad intelectual.</p>

                <p>De esta manera, garantizamos que puedas explorar las opciones disponibles y adquirir los libros de manera adecuada, respetando las normativas legales.</p>
            </div>
        </div>
    </div>
</div>
<!-- Modal Buscar y Filtrar Libros -->
<div class="modal fade" id="modalBusquedaFiltro" tabindex="-1" aria-labelledby="modalBusquedaFiltroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBusquedaFiltroLabel">Instrucciones para Buscar y Filtrar Libros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>En esta sección, se explican las instrucciones para realizar una búsqueda eficiente y filtrar libros en la plataforma.</p>

                <h6><strong>1. Buscar por Título:</strong></h6>
                <p>Para buscar un libro por su título, los usuarios deben introducir el nombre completo del libro o una palabra clave relacionada. Esto ayudará a encontrar el libro deseado de manera rápida.</p>

                <h6><strong>2. Buscar por Autor:</strong></h6>
                <p>Si el usuario está interesado en libros de un autor específico, puede ingresar el nombre del autor en el campo correspondiente. Este filtro permitirá que se muestren todos los libros de ese autor, facilitando la búsqueda de sus obras.</p>

                <h6><strong>3. Filtrar por Categoría:</strong></h6>
                <p>Los usuarios pueden elegir una categoría para restringir la búsqueda a un área de interés específica, como ficción, ciencia, historia, o tecnología. Esto permitirá encontrar solo libros que pertenecen a la categoría seleccionada.</p>

                <h6><strong>4. Filtrar por Disponibilidad:</strong></h6>
                <p>Para aquellos interesados en libros disponibles para préstamo o compra, pueden filtrar por disponibilidad. Esto facilitará la búsqueda de solo los libros que están actualmente accesibles.</p>

                <p>Al seguir estos pasos, los usuarios pueden realizar una búsqueda más eficiente y precisa, ahorrando tiempo al reducir la cantidad de resultados a aquellos que cumplen con los criterios establecidos.</p>
            </div>
        </div>
    </div>
</div>


    
<!-- Modal Registro y Acceso -->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistroLabel">Registro y Acceso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                Aquí va la información sobre cómo registrarse y acceder a la plataforma. Asegúrate de seguir los siguientes pasos:
                <ul>
                    <li>Accede al formulario de registro desde la página principal.</li>
                    <li>Llena los campos requeridos como nombre, correo electrónico y contraseña.</li>
                    <li>Confirma tu registro a través del enlace enviado a tu correo.</li>
                    <li>Para acceder, ingresa tu correo y contraseña en el formulario de inicio de sesión.</li>
                </ul>
                Si tienes problemas, contacta con el soporte técnico.
            </div>
        </div>
    </div>
</div>


<!-- Modal Resolver Problemas Técnicos -->
<div class="modal fade" id="modalProblemasTecnicos" tabindex="-1" aria-labelledby="modalProblemasTecnicosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProblemasTecnicosLabel">Resolver Problemas Técnicos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>Si experimentas problemas técnicos, aquí te ofrecemos algunas soluciones comunes:</p>
                <ul>
                    <li><strong>Problemas de acceso:</strong> Verifica tu nombre de usuario y contraseña. Asegúrate de estar conectado a Internet y de que los datos sean correctos.</li>
                    <li><strong>Problemas de carga o visualización:</strong> Intenta recargar la página o usa otro navegador. Asegúrate de tener la última versión de tu navegador.</li>
                    <li><strong>Problemas con descargas:</strong> Verifica que tienes suficiente espacio de almacenamiento y que la conexión a Internet esté activa.</li>
                    <li><strong>Problemas con la búsqueda:</strong> Revisa los términos de búsqueda y prueba con diferentes palabras clave.</li>
                </ul>
                <p>Si el problema persiste, por favor contacta con nuestro soporte técnico.</p>
            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
