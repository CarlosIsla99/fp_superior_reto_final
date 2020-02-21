<?php
include_once '../model/usuarioModel.php';

$user=new usuarioModel();
$usuario= filter_input(INPUT_POST, "usuario");
$pass= filter_input(INPUT_POST, "pass");
$name=filter_input(INPUT_POST, "name");
$surname=filter_input(INPUT_POST, "surname");
$descripcion=filter_input(INPUT_POST, "descripcion");
$user->setUsuario($usuario);
$user->setContrasenia($pass);
$user->setNombre($name);
$user->setApellido($surname);
$user->setDescripcion($descripcion);
$message=$user->insertUser();
echo $message;
?>