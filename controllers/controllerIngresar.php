<?php
require_once "../models/cajero.php";
require_once "../models/usuario.php";

if(!isset($_SESSION)){
    session_start();
}

$msg = "";

if(isset($_POST)){
    $clave = $_POST['clave'];
    $importe = $_POST['importe'];

    if($_SESSION['usuario'] !== null && $_SESSION['cajero'] !== null){
        if($clave == $_SESSION['usuario'] -> clave){
            if($_SESSION['cajero'] -> ingresar($_SESSION['usuario'] -> id, $importe)){
                $msg = "green-".$importe."€ ingresados con éxito en su cuenta.";
            }
            else{
                $msg = "red-Se ha producido un error intentando ingresar efectivo en su cuenta.";
            }
            //  Actualizar el saldo del usuario
            $_SESSION['usuario'] -> calcularSaldo();
        }
        else{
            $msg = "red-Contraseña errónea.";
        }
    }
    else{
        $msg = "red-Se ha producido un error, verifique que ha iniciado sesión y recargue la página.";
    }
}
else{
    $msg = "red-Se ha producido un error al enviar el formulario.";
}
header("location: ../index.php?pag=1&msg=$msg");