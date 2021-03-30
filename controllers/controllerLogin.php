<?php
require_once "../models/usuario.php";

if(!isset($_SESSION)){
    session_start();
}

$msg = "";

if(isset($_POST)){
    if(isset($_POST['cod_cuenta']) && isset($_POST['clave'])){
        $cod_cuenta = $_POST['cod_cuenta'];
        $clave = $_POST['clave'];

        $usuario = new Usuario(["COD_CUENTA" => $cod_cuenta, "CLAVE" => $clave]);
        if($usuario -> login()){
            $_SESSION['usuario'] = $usuario;
            $msg = "green-Login realizado con éxito. Bienvenido, ".$_SESSION['usuario'] -> nombre.".";
        }
        else{
            $msg = "red-Login fallido.";
        }
    }
    else{
        $msg = "red-Error. Debes introducir un código de cuenta y una contraseña.";
    }
}
else{
    $msg = "red-Se ha producido un error al enviar el formulario.";
}
header("location: ../index.php?pag=".$_POST['pag']."&msg=$msg");