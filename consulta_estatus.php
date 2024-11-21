<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta por Estatus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .consulta_header {
            background-color: #0056b3;
        }

        th {
            font-size: large;
        }

        tr {
            font-size: larger;
        }
    </style>
</head>

<body>
    <!-- Navbar Header -->
    <nav class="navbar navbar-dark bg-dark sticky-top p-0">
        <div class="container-fluid d-flex justify-content-between align-items-center" style="height: 65px;">
            <a href="index.php" class="text-white"><i class="fa fa-arrow-left"></i></a>
            <span class="navbar-brand mb-0 h1 text-center" style="font-size: 24px;">Control de Egresados</span>
            <a href="#" class="text-white" id="close-window" data-bs-toggle="modal" data-bs-target="#closeDialog">
                <i class="fa fa-times"></i>
            </a>
        </div>
        <div class="container-fluid flex-fill" style="height: 45px; background-color: #007B7F;"></div>
    </nav>


    <div class="container mt-5">
        <div class="card">
            <div class="card-header consulta_header text-white text-center">
                <h4>Consulta por Estatus</h4>
            </div>
            <div class="card-body">
                <div class="mb-4">

                    <select class="form-select fs-4" id="statusSelect">
                        <option value="">Selecciona un tipo de estatus...</option>
                        <option value="0">0: Espera de documentos</option>
                        <option value="1">1: Realizar Oficio de Aprobación</option>
                        <option value="2">2: Oficio de Aprobación Entregado</option>
                        <option value="3">3: Oficio de no Inconveniencia Recibido</option>
                        <option value="4">4: Realizando oficio Aviso de Acto Recepcional</option>
                        <option value="5">5: Envío de Aviso de Acto Recepcional a Egresado y Jurado</option>
                        <option value="6">6: TITULADO</option>
                    </select>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-light">
                        <tr>
                            <th>No. Control</th>
                            <th>Nombre Egresado</th>
                            <th>Especialidad</th>
                            <th style="font-size: smaller">Estatus</th>
                            <th>Nombre del proyecto</th>
                            <th>Opción de Titulación</th>
                            <th>Asesor</th>
                            <th>Secretario</th>
                            <th>Vocal</th>
                            <th>Suplente</th>
                            <th>Fecha de Titulación</th>
                        </tr>
                        </thead>
                        <tbody id="tabla-registros">
                        <!-- Aquí se pueden agregar dinámicamente las filas de datos -->
                        <tr>
                            <td colspan="11">Sin datos disponibles</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const statusSelect = document.getElementById('statusSelect'); // Elemento <select>
            const tablaRegistros = document.getElementById('tabla-registros'); // <tbody> de la tabla

            // Evento 'change' al seleccionar un estatus
            statusSelect.addEventListener('change', function () {
                const estatus = statusSelect.value; // Obtener el valor del estatus seleccionado

                // Configurar la solicitud HTTP
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'registro_estatus.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                // Enviar datos al servidor
                xhr.send(`estatus=${estatus}`);

                // Manejar la respuesta
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText); // Convertir JSON a objeto JavaScript
                        tablaRegistros.innerHTML = ''; // Limpiar contenido previo de la tabla

                        // Si hay datos, construir filas
                        if (response.length > 0) {
                            response.forEach(function (item) {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                <td>${item.no_control}</td>
                                <td>${item.nombre}</td>
                                <td>${item.especialidad}</td>
                                <td>${item.estatus}</td>
                                <td>${item.nombre_proyecto}</td>
                                <td>${item.id_opcion}</td>
                                <td>${item.asesor}</td>
                                <td>${item.secretario}</td>
                                <td>${item.vocal}</td>
                                <td>${item.suplente}</td>
                                <td>${item.fecha_examen ? item.fecha_examen : 'Sin fecha'}</td>
                            `;
                                tablaRegistros.appendChild(row); // Agregar fila a la tabla
                            });
                        } else {
                            // Mostrar mensaje si no hay registros
                            const noDataRow = document.createElement('tr');
                            noDataRow.innerHTML = '<td colspan="11">No se encontraron registros para este estatus.</td>';
                            tablaRegistros.appendChild(noDataRow);
                        }
                    }
                };

                // Manejo de errores
                xhr.onerror = function () {
                    alert('Ocurrió un error al comunicarse con el servidor.');
                };
            });
        });
    </script>

    <!-- Cuadro de diálogo Modal para Confirmación de Cierre -->
    <div class="modal fade" id="closeDialog" tabindex="-1" aria-labelledby="closeDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="closeDialogLabel">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    Pulse el botón "Salir" para finalizar el programa.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                    <button type="button" class="btn btn-danger" id="exitButton">Salir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Script para el botón "Salir" -->
    <script>
        document.getElementById("exitButton").addEventListener("click", function () {
            window.location.href = "salida.php"; // Cambia de página en la misma pestaña
        });
    </script>

</body>
    </html>
