<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Egresado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
<div class=" align-items-center p-2 justify-content-center vh-100">
    <div class="form-container ">
        <div class="form-header">Modificar Egresado</div>
        <div class="pb-4"></div>
        <form>
            <!-- Número de Control -->
            <div class="row form-group align-items-center p-2">
                <label for="control" class="col-sm-4 ">Número de Control</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="control" value="21014012">
                </div>
            </div>

            <!-- Nombre del egresado -->
            <div class="row form-group align-items-center p-2">
                <label for="nombre" class="col-sm-4 ">Nombre del egresado</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" placeholder="Escribe el nombre...">
                </div>
            </div>

            <!-- Especialidad -->
            <div class="row form-group align-items-center p-2">
                <label for="especialidad" class="col-sm-4 ">Especialidad</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="especialidad" value="ISC">
                </div>
            </div>

            <!-- Estatus -->
            <div class="row form-group align-items-center p-2">
                <label for="estatus" class="col-sm-4 ">Estatus</label>
                <div class="col-sm-8">
                    <select class="form-select" id="estatus">
                        <option>0. Espera de documentos</option>
                        <option>1. Realizar Oficio de Aprobación</option>
                        <option>2. Oficio de Aprobación entregado</option>
                        <option>3. Oficio de no Inconveniencia Recibido</option>
                        <option>4. Realizando Oficio Acto Recepcional</option>
                        <option>5. Envío de Aviso de Acto Recepcional a Egresado y Jurado</option>
                        <option>6. TITULADO</option>
                    </select>
                </div>
            </div>

            <!-- Nombre del Proyecto -->
            <div class="row form-group align-items-center p-2">
                <label for="proyecto" class="col-sm-4 ">Nombre del Proyecto</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="proyecto" placeholder="Escribe el nombre del Proyecto...">
                </div>
            </div>

            <!-- Titulación -->
            <div class="row form-group align-items-center p-2">
                <label for="titulacion" class="col-sm-4 ">Titulación</label>
                <div class="col-sm-8">
                    <select class="form-select" id="titulacion">
                        <option>TITULACIÓN INTEGRAL</option>
                        <option>TITULACIÓN INTEGRAL (Memoria de Residencias Profesionales)</option>
                        <option>TITULACIÓN INTEGRAL (CENEVAL)</option>
                        <option>TITULACIÓN INTEGRAL (TESIS)</option>
                    </select>
                </div>
            </div>

            <!-- Nombre del Asesor -->
            <div class="row form-group align-items-center p-2">
                <label for="asesor" class="col-sm-4 ">Nombre del Asesor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="asesor" placeholder="Nombre Asesor">
                </div>
            </div>

            <!-- Nombre del Secretario -->
            <div class="row form-group align-items-center p-2">
                <label for="secretario" class="col-sm-4 ">Nombre del Secretario</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="secretario" placeholder="Nombre Secretario">
                </div>
            </div>

            <!-- Nombre del Vocal -->
            <div class="row form-group align-items-center p-2">
                <label for="vocal" class="col-sm-4 ">Nombre del Vocal</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="vocal" placeholder="Nombre Vocal">
                </div>
            </div>

            <!-- Nombre del Suplente -->
            <div class="row form-group align-items-center p-2">
                <label for="suplente" class="col-sm-4 ">Nombre del Suplente</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="suplente" placeholder="Nombre Suplente">
                </div>
            </div>

            <!-- Fecha de Titulación -->
            <div class="row form-group align-items-center p-2">
                <label for="fecha" class="col-sm-4 ">Fecha de Titulación</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="fecha" value="2020-05-01">
                </div>
            </div>

            <!-- Botón Guardar -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-save">Guardar</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
