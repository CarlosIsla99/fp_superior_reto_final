<?php
include_once '../controller/usuarioModel.php';

$user new usuarioModel;
$usuario= filter_input(INPUT_GET, "usuario");
$contrasenia= filter_input(INPUT_GET, "contrasenia");

$user->setUusario($usuario);
$user->setContrasenia($contraseenia);
$usuarioLogeado=$user->LogIn();
if ($usuarioLogeado==""){
    $user['error']='Te equivocaste en uno de los campos';
}else{
    $user['usuario']=$usuarioLogeado['usuario'];
    $user['error']="";
    session_start();
    $_SESSION['usuario']=$usuarioLogeado['usuario'];
}
echo json_encode($user);
?>