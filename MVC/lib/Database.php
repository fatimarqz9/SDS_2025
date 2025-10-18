<?php

namespace lib;
use PDO;
use PDOException;


class Database {
    private $host = "db";
    private $db_name = "db_visitantes";
    private $username = "root";
    private $password = "rootpass";
    public $conn; //almacena la instancia de un objeto 


   
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");  //ejecutar consultas
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //gestionar errores
            //echo "conectado";
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }

}
