<?php
require_once 'registro.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $no_control = $input['no_control'] ?? null;

    if (!$no_control) {
        echo json_encode(['error' => 'Número de control no proporcionado.']);
        exit;
    }

    try {
        $registro = new registro();
        $egresado = $registro->readOne($no_control);

        if (!$egresado) {
            echo json_encode(['error' => 'No se encontró un egresado con ese número de control.']);
        } else {
            echo json_encode($egresado);
        }
    } catch (Exception $e) {
        echo json_encode(['error' => 'Error al buscar el egresado: ' . $e->getMessage()]);
    }
}
?>
