<?php
require_once "../models/usuario.php";

if(!isset($_SESSION)){
    session_start();
}

$msg = "";

if(isset($_POST)){
    $usuario = new Usuario(null);

    $usuario -> cod_cuenta =   $_POST['cod_cuenta'];
    $usuario -> nombre =       $_POST['nombre'];
    $usuario -> apellidos =    $_POST['apellidos'];
    $usuario -> clave =        $_POST['clave'];
    
    if($usuario -> registro()){
        $msg = "green-Registro realizado con éxito.";
    }
    else{
        $msg = "red-Registro fallido.";
    }
}
else{
    $msg = "red-Se ha producido un error al enviar el formulario.";
}
header("location: ../index.php?msg=$msg");