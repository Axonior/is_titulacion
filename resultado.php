<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Solicitud</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .result-container {
            max-width: 600px;
            margin: auto;
            text-align: center;
        }
        .result-box {
            border: 2px solid #27b933;
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
            margin-top: 20px;
        }
        .result-title {
            font-size: 1.75em;
            color: #27b933;
            margin-bottom: 15px;
        }
        .result-item {
            font-size: 1.1em;
            margin-bottom: 10px;
            color: #333333;
        }
        .label {
            font-weight: bold;
        }
    </style>
    <script>
        // Redireccionar a index.html después de 3 segundos
        setTimeout(function() {
            window.location.href = "index.php";
        }, 1500);
    </script>
</head>
<body>

<div class="result-container">
    <h2 class="result-title">Resultado de la Solicitud</h2>
    <div class="result-box">

        <?php
        // Incluir la conexión a la base de datos
        require 'conexion.php';
        require 'registro.class.php';

        $app = new Registro();

        try {
            /*// Recibir y procesar los datos del formulario
            $no_control = $_POST['numControl'];
            $nombre = $_POST['nombreEgresado'];
            $especialidad = $_POST['especialidad'];
            $estatus = 0;
            //$fecha_examen = null; // Fecha del examen
            $id_opcion = $_POST['opcionTitulacion'];
            $nombre_proyecto = $_POST['nombreProyecto'];
            $asesor = $_POST['nombreAsesor'];
            $secretario = $_POST['nombreSecretario'];
            $vocal = $_POST['nombreVocal'];
            $suplente = $_POST['nombreSuplente'];

            // Mapear la opción de titulación
            $opciones = [
                'integral' => 1,
                'memoriaResidencias' => 2,
                'ceneval' => 3,
                'tesis' => 4
            ];
            $id_opcion = $opciones[$id_opcion] ?? null;

            if (!$id_opcion) {
                throw new Exception('Opción de titulación no válida.');
            }

            // Insertar datos en la tabla `registro`
            $sql = "INSERT INTO registro (no_control, nombre, estatus, especialidad, id_opcion, nombre_proyecto, asesor, secretario, vocal, suplente)
            VALUES (:no_control, :nombre, :estatus, :especialidad, :id_opcion, :nombre_proyecto, :asesor, :secretario, :vocal, :suplente)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':no_control' => $no_control,
                ':nombre' => $nombre,
                ':estatus' => $estatus,
                ':especialidad' => $especialidad,
                ':id_opcion' => $id_opcion,
                ':nombre_proyecto' => $nombre_proyecto,
                ':asesor' => $asesor,
                ':secretario' => $secretario,
                ':vocal' => $vocal,
                ':suplente' => $suplente
            ]);*/

            $data = $_POST;
            $insertar = $app -> create($data);

            echo "<p class='result-item'>Los datos se han guardado <span class='label'>exitosamente</span>.</p>";
            echo "<p class='result-item'>Serás redirigido en breve.</p>";
        } catch (PDOException $e) {
            echo "<p class='result-item text-danger'>Error al guardar los datos: " . $e->getMessage() . "</p>";
        } catch (Exception $e) {
            echo "<p class='result-item text-danger'>Error: " . $e->getMessage() . "</p>";
        }
        ?>

    </div>
</div>

</body>
</html>
