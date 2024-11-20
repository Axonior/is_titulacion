<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Interfaz de Inicio</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
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

<!-- Sección de Botones en Fila para Pantallas Grandes y Columna en Pantallas Pequeñas -->
<div class="container mt-3 d-flex flex-column flex-md-row justify-content-center gap-3">
    <a href="nueva_solicitud.php" class="btn rounded-pill p-3 flex-fill btn-hover" style="color:white; font-weight: bolder; font-size: 25px; background-color: #28a745;">Nueva Solicitud</a>
    <a href="#" class="btn rounded-pill p-3 flex-fill btn-hover" style="color:white; font-weight: bolder; font-size: 25px; background-color: #007bff;"></a>
    <a href="#" class="btn rounded-pill p-3 flex-fill btn-hover" style="color:white; font-weight: bolder; font-size: 25px; background-color: #17a2b8;"></a>
    <a href="#" class="btn rounded-pill p-3 flex-fill btn-hover" style="color:white; font-weight: bolder; font-size: 25px; background-color: #0056b3;"></a>
    <a href="#" class="btn rounded-pill p-3 flex-fill btn-hover" style="color:white; font-weight: bolder; font-size: 25px; background-color: #fd7e14;"></a>
</div>

<!-- Estilos para el hover -->
<style>
    .btn-hover:hover {
        filter: brightness(0.9);
    }
</style>

<!-- Placeholder para contenido adicional -->
<div class="container mt-4">
    <div class="border rounded p-4" style="height: 200px;">
        <!-- Aquí va el contenido -->
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

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<!-- Script para el botón "Salir" -->
<script>
    document.getElementById("exitButton").addEventListener("click", function () {
        window.location.href = "salida.php"; // Cambia de página en la misma pestaña
    });
</script>

</body>

</html>
