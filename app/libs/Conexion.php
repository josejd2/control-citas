<?php
/** 
 * Clase conexion a la base de datos
*/
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $db = "consultorio";
    private $puerto = "";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, 
        $this->usuario, 
        $this->password, 
        $this->db);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        $this->conexion->set_charset("utf8");

        print("Conexión exitosa a la base de datos");
    }
}