<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Egresado</title>
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
        .form-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            background-color: #FFA447;
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            text-align: right;
            font-weight: bolder;
            font-size: large;
        }
    </style>
</head>
<body class="bg-light">
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


<div class=" align-items-center p-2 justify-content-center vh-100">
    <div class="form-container ">
        <div class="form-header">Modificar Egresado</div>
        <div class="pb-4"></div>
        <form id="modificarEgresadoForm" action="resultado_modificacion.php" method="post">
            <!-- Número de Control -->
            <div class="row form-group align-items-center p-2">
                <label for="control" class="col-sm-4">Número de Control</label>
                <div class="col-sm-8 d-flex">
                    <input type="text" name="no_control" placeholder="Escribe el número de control.." class="form-control" id="control" value="">
                    <button class="btn btn-outline-secondary ms-4" id="buscar">Buscar</button>
                </div>
            </div>

            <!-- Nombre del egresado -->
            <div class="row form-group align-items-center p-2">
                <label for="nombre" class="col-sm-4 ">Nombre del egresado</label>
                <div class="col-sm-8">
                    <input type="text" name="nombreEgresado" class="form-control" id="nombre" placeholder="Escribe el nombre..." disabled>
                </div>
            </div>

            <!-- Especialidad -->
            <div class="row form-group align-items-center p-2">
                <label for="especialidad" class="col-sm-4 ">Especialidad</label>
                <div class="col-sm-8">
                    <select id="especialidad" name="especialidad" class="form-select" disabled>
                        <option value="ISC">Ingeniería en Sistemas Computacionales (ISC)</option>
                        <option value="IM">Ingeniería Mecánica (IM)</option>
                        <option value="LA">Licenciatura en Administración (LA)</option>
                    </select>
                </div>
            </div>

            <!-- Estatus -->
            <div class="row form-group align-items-center p-2">
                <label for="estatus" class="col-sm-4 ">Estatus</label>
                <div class="col-sm-8">
                    <select class="form-select" name="estatus" id="estatus" disabled>
                        <option value="0">0. Espera de documentos</option>
                        <option value="1">1. Realizar Oficio de Aprobación</option>
                        <option value="2">2. Oficio de Aprobación entregado</option>
                        <option value="3">3. Oficio de no Inconveniencia Recibido</option>
                        <option value="4">4. Realizando Oficio Acto Recepcional</option>
                        <option value="5">5. Envío de Aviso de Acto Recepcional a Egresado y Jurado</option>
                        <option value="6">6. TITULADO</option>
                    </select>
                </div>
            </div>

            <!-- Nombre del Proyecto -->
            <div class="row form-group align-items-center p-2">
                <label for="proyecto" class="col-sm-4 ">Nombre del Proyecto</label>
                <div class="col-sm-8">
                    <input type="text" name="nombre_proyecto" class="form-control" id="proyecto" placeholder="Escribe el nombre del Proyecto..." disabled>
                </div>
            </div>

            <!-- Titulación -->
            <div class="row form-group align-items-center p-2">
                <label for="titulacion" class="col-sm-4 ">Titulación</label>
                <div class="col-sm-8">
                    <select class="form-select" name="id_opcion" id="titulacion" disabled>
                        <option value="1">TITULACIÓN INTEGRAL</option>
                        <option value="2">TITULACIÓN INTEGRAL (Memoria de Residencias Profesionales)</option>
                        <option value="3">TITULACIÓN INTEGRAL (CENEVAL)</option>
                        <option value="4">TITULACIÓN INTEGRAL (TESIS)</option>
                    </select>
                </div>
            </div>

            <!-- Nombre del Asesor -->
            <div class="row form-group align-items-center p-2">
                <label for="asesor" class="col-sm-4 ">Nombre del Asesor</label>
                <div class="col-sm-8">
                    <input type="text" name="asesor" class="form-control" id="asesor" placeholder="Nombre Asesor" disabled>
                </div>
            </div>

            <!-- Nombre del Secretario -->
            <div class="row form-group align-items-center p-2">
                <label for="secretario" class="col-sm-4 ">Nombre del Secretario</label>
                <div class="col-sm-8">
                    <input type="text" name="secretario" class="form-control" id="secretario" placeholder="Nombre Secretario" disabled>
                </div>
            </div>

            <!-- Nombre del Vocal -->
            <div class="row form-group align-items-center p-2">
                <label for="vocal" class="col-sm-4 ">Nombre del Vocal</label>
                <div class="col-sm-8">
                    <input type="text" name="vocal" class="form-control" id="vocal" placeholder="Nombre Vocal" disabled>
                </div>
            </div>

            <!-- Nombre del Suplente -->
            <div class="row form-group align-items-center p-2">
                <label for="suplente" class="col-sm-4 ">Nombre del Suplente</label>
                <div class="col-sm-8">
                    <input type="text" name="suplente" class="form-control" id="suplente" placeholder="Nombre Suplente" disabled>
                </div>
            </div>

            <!-- Fecha de Titulación -->
            <div class="row form-group align-items-center p-2">
                <label for="fecha" class="col-sm-4 ">Fecha de Titulación</label>
                <div class="col-sm-8">
                    <input type="date" name="fecha" class="form-control" id="fecha" value="">
                </div>
            </div>

            <!-- Botón Guardar -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-save">Guardar</button>
            </div>
        </form>
    </div>
</div>


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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para el botón "Salir" -->
<script>
    document.getElementById("exitButton").addEventListener("click", function () {
        window.location.href = "salida.php"; // Cambia de página en la misma pestaña
    });
</script>

<script>
    document.getElementById("buscar").addEventListener("click", function(event) {
        event.preventDefault(); // Previene la recarga del formulario

        const control = document.getElementById("control").value;

        if (!/^\d+$/.test(control)) {
            alert("El campo 'Número de Control' debe contener solo números.");
            return;
        }

        if (!control.trim()) {
            alert("Por favor, ingresa un número de control.");
            return;
        }

        // Llamada a AJAX para recuperar los datos
        fetch("buscar_egresado.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ no_control: control }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    // Rellenar los campos del formulario
                    document.getElementById("nombre").value = data.nombre;
                    document.getElementById("especialidad").value = data.especialidad;
                    document.getElementById("estatus").value = data.estatus;
                    document.getElementById("proyecto").value = data.nombre_proyecto;
                    document.getElementById("titulacion").value = data.id_opcion;
                    document.getElementById("asesor").value = data.asesor;
                    document.getElementById("secretario").value = data.secretario;
                    document.getElementById("vocal").value = data.vocal;
                    document.getElementById("suplente").value = data.suplente;

                    // Habilitar campos para edición
                    habilitarCampos();
                }
            })
            .catch(error => {
                console.error("Error al buscar el egresado:", error);
                alert("Ocurrió un error al buscar el egresado.");
            });
    });

    function validarFechaTitular() {
        const estatus = document.getElementById("estatus").value;
        const fechaTitulacion = document.getElementById("fecha");

        if (estatus >= 5) {
            fechaTitulacion.disabled = false;  // Habilitar campo de Fecha de Titulación
        } else {
            fechaTitulacion.disabled = true;  // Deshabilitar campo de Fecha de Titulación
        }
    }

    // Validar el campo 'Fecha de Titulación' cuando se cambia el estatus
    document.getElementById("estatus").addEventListener("change", function() {
        validarFechaTitular();  // Validar cada vez que se cambie el estatus
    });

    // Llamar a la función al cargar la página en caso de que el estatus ya esté precargado
    window.addEventListener("load", function() {
        validarFechaTitular();
    });

    function habilitarCampos() {
        const campos = ["nombre", "especialidad", "estatus", "proyecto", "titulacion", "asesor", "secretario", "vocal", "suplente"];
        campos.forEach(id => {
            document.getElementById(id).disabled = false;
        });
        document.querySelector(".btn-save").disabled = false;
    }

    document.getElementById("modificarEgresadoForm").onsubmit = function() {
        document.querySelector(".btn-save").disabled = false;
    }
</script>

</body>
</html>
