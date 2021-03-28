<?php
require_once "../models/usuario.php";

if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST)){
    if(isset($_POST['cod_cuenta']) && isset($_POST['clave'])){
        $cod_cuenta = $_POST['cod_cuenta'];
        $clave = $_POST['clave'];

        $usuario = new Usuario(["COD_CUENTA" => $cod_cuenta, "CLAVE" => $clave]);
        if($usuario -> login() !== false){
            $_SESSION['usuario'] = $usuario;
            //echo "Usuario ".$usuario -> nombre." logeado con éxito.";
            header("Refresh: 0.01; url=../index.php?pag=".$_POST['pag']);
        }
        else{
            echo "Login fallido.";
        }
    }
    else if(isset($_POST['cerrar'])){
        $_SESSION['sesion_iniciada'] = false;
        header("Refresh: 0.01; url=../index.php");
    }
    
}