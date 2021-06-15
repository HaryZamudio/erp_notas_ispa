<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $nombre;
    private $apellido;
    private $correo;
    private $pass;
    private $conexion;

    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_bictia();
    }

    function guardar_usuario($nombre_form,$apellido_form,$correo_form,$pass_form){
        $this->nombre=$nombre_form;
        $this->apellido=$apellido_form;
        $this->correo=$correo_form;
        $this->pass=$pass_form;

        $query_consulta="INSERT INTO tb_usuario(nombre,apellido,correo,pass)VALUES(?,?,?,?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->apellido,
            $this->correo,
            $this->pass,
        ) ;
        $insert->execute($array_data_user);
        return "Registro exitoso";
    }

}