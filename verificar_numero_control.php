<?php
// Incluir el archivo de conexión
//require_once 'conexion.php';
require_once 'registro.class.php';
$app = new Registro();

// Leer el cuerpo de la solicitud (para solicitudes AJAX)
$json = file_get_contents('php://input');
$data = json_decode($json, true);
$numeroControl = $data['numeroControl'] ?? '';

// Validar que el campo no esté vacío
if (empty($numeroControl)) {
    echo json_encode(['error' => 'El número de control es obligatorio']);
    exit;
}

try {
    $exists = $app -> verificarNumeroControl($numeroControl);

    /*$stmt = $pdo->prepare('SELECT COUNT(*) FROM registro WHERE no_control = ?');
    $stmt->execute([$numeroControl]);
    $count = $stmt->fetchColumn();*/

    // Responder con el resultado
    echo json_encode(['existe' => $exists > 0]);
} catch (PDOException $e) {
    // Manejo de errores
    echo json_encode(['error' => 'Error en la consulta: ' . $e->getMessage()]);
}
