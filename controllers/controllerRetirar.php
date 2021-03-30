<?php
require_once "../models/cajero.php";
require_once "../models/usuario.php";

if(!isset($_SESSION)){
    session_start();
}

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
                $_SESSION['cajero'] -> retirar($_SESSION['usuario'] -> id, $importe);
                //  Actualizar el saldo del usuario
                $_SESSION['usuario'] -> calcularSaldo();
            }
            else{
                //  Mensaje de error
            }
        }
    }
}
header("location: ../index.php?pag=2");