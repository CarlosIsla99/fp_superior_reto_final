<?php
include_once '../model/usuarioModel.php';

$user= new usuarioModel();
$usuario= filter_input(INPUT_POST, "usuario");
$contrasenia= filter_input(INPUT_POST, "contrasenia");

$user->setUsuario($usuario);
$user->setContrasenia($contrasenia);
$usuarioLogeado=$user->LogIn();
if ($usuarioLogeado==""){
    $usuarioOBJ['error']='Te equivocaste en uno de los campos';
}else{
    $usuarioOBJ['usuario']=$usuarioLogeado['usuario'];
    $usuarioOBJ['error']="";
    session_start();
    $_SESSION['usuario']=$usuarioLogeado['usuario'];
}
echo json_encode($usuarioOBJ);
?>