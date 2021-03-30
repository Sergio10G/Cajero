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
        $pag = $_POST['pag'] > 3 || $_POST['pag'] < 0 ? 0 : $_POST['pag'];   //  Cualquier redireccion a una página mayor que 3 o menor que 0, redirigirá al inicio.

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
    header("location: ../index.php?pag=$pag&msg=$msg");
}
else{
    $msg = "red-Se ha producido un error al enviar el formulario.";
    header("location: ../index.php?msg=$msg");
}
