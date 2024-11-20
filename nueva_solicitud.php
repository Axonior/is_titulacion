<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nueva Solicitud</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        h2 {
            background-color: #27b933;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }
        .input-group {
            margin-bottom: 15px;
            font-size: 1.2em;
        }
        label {
            font-size: 1.2em;
            font-weight: bold;
        }
        input, select {
            font-size: 1.1em;
            padding: 10px;
        }
        .btn-guardar {
            font-size: 1.2em;
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

<div style="padding-top: 40px;"></div>

<div class="container">
    <h2>Nueva Solicitud</h2>
    <form id="solicitudForm" action="resultado.php" method="POST">
        <div class="input-group">
            <label for="numControl">Número de Control</label>
            <input type="text" id="numControl" name="numControl" placeholder="Escribe el No. Control" required>
        </div>

        <div class="input-group">
            <label for="nombreEgresado">Nombre del Egresado</label>
            <input type="text" id="nombreEgresado" name="nombreEgresado" placeholder="Escribe el nombre del egresado" required>
        </div>

        <div class="input-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" id="especialidad" name="especialidad" placeholder="Escribe la especialidad" required>
        </div>

        <div class="input-group">
            <label for="nombreProyecto">Nombre del Proyecto</label>
            <input type="text" id="nombreProyecto" name="nombreProyecto" placeholder="Escribe el nombre del proyecto" required>
        </div>

        <div class="input-group">
            <label for="opcionTitulacion">Opción de Titulación</label>
            <select id="opcionTitulacion" name="opcionTitulacion" required>
                <option value="integral">Titulación Integral</option>
                <option value="memoriaResidencias">Titulación Integral (Memoria de Residencias Profesionales)</option>
                <option value="ceneval">Titulación Integral (CENEVAL)</option>
                <option value="tesis">Titulación Integral (Tesis)</option>
            </select>
        </div>

        <div class="input-group">
            <label for="nombreAsesor">Nombre del Asesor</label>
            <input type="text" id="nombreAsesor" name="nombreAsesor" placeholder="Escribe el nombre del asesor" required>
        </div>

        <div class="input-group">
            <label for="nombreSecretario">Nombre del Secretario</label>
            <input type="text" id="nombreSecretario" name="nombreSecretario" placeholder="Escribe el nombre del secretario" required>
        </div>

        <div class="input-group">
            <label for="nombreVocal">Nombre del Vocal</label>
            <input type="text" id="nombreVocal" name="nombreVocal" placeholder="Escribe el nombre del vocal" required>
        </div>

        <div class="input-group">
            <label for="nombreSuplente">Nombre del Suplente</label>
            <input type="text" id="nombreSuplente" name="nombreSuplente" placeholder="Escribe el nombre del suplente" required>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn btn-success btn-guardar">Guardar</button>
        </div>
    </form>
</div>

<!-- Modal for Confirmation Dialog -->
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

<!-- JavaScript for Validation and Button Behavior -->
<script>
    // Validate 'Número de Control' to accept only numeric values
    document.getElementById('solicitudForm').addEventListener('submit', async function(event) {
        event.preventDefault(); // Prevenir el envío del formulario

        const numControlField = document.getElementById('numControl');
        const numControlValue = numControlField.value.trim();

        // Validar que el campo no esté vacío
        if (!/^\d+$/.test(numControlValue)) {
            alert("El campo 'Número de Control' debe contener solo números.");
            return;
        }

        // Validar duplicados en el servidor
        const response = await fetch('/verificar_numero_control.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ numeroControl: numControlValue })
        });

        const result = await response.json();

        if (result.error) {
            alert(`Error: ${result.error}`);
            return;
        }

        if (result.existe) {
            alert("El número de control ya está registrado.");
        } else {
            this.submit();
        }
    });


    // Event listener for "Salir" button
    document.getElementById("exitButton").addEventListener("click", function () {
        window.location.href("salida.html");
    });
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'numControl' => $_POST['numControl'],
        'nombreEgresado' => $_POST['nombreEgresado'],
        'especialidad' => $_POST['especialidad'],
        'nombreProyecto' => $_POST['nombreProyecto'],
        'opcionTitulacion' => $_POST['opcionTitulacion'],
        'nombreAsesor' => $_POST['nombreAsesor'],
        'nombreSecretario' => $_POST['nombreSecretario'],
        'nombreVocal' => $_POST['nombreVocal'],
        'nombreSuplente' => $_POST['nombreSuplente']
    ];

}
?>
</body>
</html>
