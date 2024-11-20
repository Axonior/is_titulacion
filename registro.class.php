<?php
require_once ('sistema.class.php');
class registro extends Sistema {

    function verificarNumeroControl ($numero_control) {
        $this -> conexion();
        $result = [];
        $sql = "SELECT COUNT(*) FROM registro WHERE no_control = :numControl";
        $select = $this->con->prepare($sql);
        $select->bindParam(':numControl', $numero_control);
        $select->execute();
        $result = $select->fetchColumn();
        return $result;
    }

    function create($data) {
        $this -> conexion();
        $result = [];

        $opciones = [
            'integral' => 1,
            'memoriaResidencias' => 2,
            'ceneval' => 3,
            'tesis' => 4
        ];
        $id_opcion = $opciones[$data['opcionTitulacion']] ?? null;

        if (!$id_opcion) {
            throw new Exception('Opción de titulación no válida.');
        }
        $estatus= 0;

        $sql = "INSERT INTO registro (no_control, nombre, estatus, especialidad, id_opcion, nombre_proyecto, asesor, secretario, vocal, suplente)
            VALUES (:no_control, :nombre, :estatus, :especialidad, :id_opcion, :nombre_proyecto, :asesor, :secretario, :vocal, :suplente);";
        $insert = $this->con->prepare($sql);
        $insert->bindParam(':no_control', $data['numControl'], PDO::PARAM_STR);
        $insert->bindParam(':nombre', $data['nombreEgresado'], PDO::PARAM_STR);
        $insert->bindParam(':estatus',$estatus, PDO::PARAM_INT);
        $insert->bindParam(':especialidad', $data['especialidad']);
        $insert->bindParam(':id_opcion', $id_opcion, PDO::PARAM_INT);
        $insert->bindParam(':nombre_proyecto', $data['nombre_proyecto']);
        $insert->bindParam(':asesor', $data['asesor']);
        $insert->bindParam(':secretario', $data['secretario']);
        $insert->bindParam(':vocal', $data['vocal']);
        $insert->bindParam(':suplente', $data['suplente']);
        $insert->execute();
        $result = $insert->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}