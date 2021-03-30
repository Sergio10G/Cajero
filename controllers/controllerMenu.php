<?php
if(!isset($_SESSION)){
    session_start();
}

$url_redireccion = "pag=0";

if(isset($_POST['btnMenu'])){
    switch ($_POST['btnMenu']) {
        case 'Ingresar':
            $url_redireccion = "pag=1";
            break;
        
        case 'Retirar':
            $url_redireccion = "pag=2";
            break;
        
        case 'Saldo':
            $url_redireccion = "pag=3";
            break;
        case 'Iniciar sesión':
            $url_redireccion = "pag=4";
            break;
        case 'Registrarse':
            $url_redireccion = "pag=5";
            break;
    }   
}
header("location: ../index.php?$url_redireccion");