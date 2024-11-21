<?php

require_once('registro.class.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['estatus'])) {
    $estatus = intval($_POST['estatus']);
    $registro = new registro();
    $datos = $registro->readByEstatus($estatus);

    header('Content-Type: application/json');
    echo json_encode($datos);
}

