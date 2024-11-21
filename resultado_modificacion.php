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
            $data = $_POST;
            $modificar = $app -> update($data);

            echo "<p class='result-item'>Los datos se han modificado <span class='label'>exitosamente</span>.</p>";
            echo "<p class='result-item'>Serás redirigido en breve.</p>";
        } catch (PDOException $e) {
            echo "<p class='result-item text-danger'>Error al modificar los datos: " . $e->getMessage() . "</p>";
        } catch (Exception $e) {
            echo "<p class='result-item text-danger'>Error: " . $e->getMessage() . "</p>";
        }
        ?>

    </div>
</div>

</body>
</html>
