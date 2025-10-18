<?php

namespace app\models;

use lib\database;

class VisitaModel extends database
{

    public function getVisita()
    {
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM tbl_visitas");
        return $sql->fetchAll();
    }
    public function guardarVisita($data)
    {
        $conexion = $this->getConnection();

        $stmt = $conexion->prepare("INSERT INTO tbl_visitas(nombre, email, comentario, fecha_registro) VALUES(?,?,?,NOW())");

        $stmt->bindParam(1, $data["nombre"]);
        $stmt->bindParam(2, $data["email"]);
        $stmt->bindParam(3, $data["comentario"]);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
