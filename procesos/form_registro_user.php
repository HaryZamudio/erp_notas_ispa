<?php
require_once "../includes/class_user.php";
$user_sistema =new Usuario();
$resultado=$user_sistema->guardar_usuario
($_POST['nombre_user'],
$_POST['apellidos_user'],
$_POST['correo_user'],
$_POST['pass_user']);
echo $resultado;
?>
