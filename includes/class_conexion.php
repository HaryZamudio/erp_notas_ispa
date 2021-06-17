<?php

class Conexion{
    private $host ="localhost";
    private $user="root";
    private $password="";
    private $db="bd_bictia";
    private $connetc_db;

    //Metodo constructor
    public function __construct()
    {
        $conexion_pdo="mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        //$conexion_pdo es la conexion y puede ser cualquier cosa 
        try {
            $this->connetc_db=NEW PDO($conexion_pdo, $this->user, $this->password);
           // echo"Conexion exitosa :)";
        } catch (Exception $e) {
            $this->connetc_db="Error de conexion con la Base de Datos :(";
            echo"Error D: ".$e->getMessage();

        }
    }

    //Metodo personalizado
    public function conexion_bd_bictia(){
        return $this->connetc_db;
    }
}
