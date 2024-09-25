<?php

class Conexion {
    private $con;

    public function __construct() {
        $host = "localhost";  
        $dbname = "reto."; // Sin la extensión .sql
        $username = "postgres";
        $password = "luisa11";

        try {
            $this->con = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $username, $password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Se conectó correctamente a la base de datos";
        } catch (PDOException $exp) {
            echo "No se puede conectar a la base de datos: " . $exp->getMessage();
        }
    }

    public function getConexion() {
        return $this->con;
    }
}

?>
