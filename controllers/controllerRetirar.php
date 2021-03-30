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
    /*
    echo "Clave: $clave  -  Importe: $importe<br><br>";
    echo var_dump($_SESSION['usuario'])."<br>";
    echo var_dump($_SESSION['cajero'])."<br>";
    */
    if($_SESSION['usuario'] !== null && $_SESSION['cajero'] !== null){
        if($clave == $_SESSION['usuario'] -> clave){
            if($importe <= $_SESSION['usuario'] -> saldo){
                if($_SESSION['cajero'] -> retirar($_SESSION['usuario'] -> id, $importe)){
                    $msg = "green-".$importe."€ retirados con éxito de su cuenta.";
                }
                else{
                    $msg = "red-Se ha producido un error intentando retirar efectivo de su cuenta.";
                }
                //  Actualizar el saldo del usuario
                $_SESSION['usuario'] -> calcularSaldo();
            }
            else{
                $msg = "red-Fondos insuficientes. Está intentando retirar ".$importe."€, mientras que en su cuenta dispone de ".$_SESSION['usuario'] -> saldo."€.";
            }
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
header("location: ../index.php?pag=2&msg=$msg");