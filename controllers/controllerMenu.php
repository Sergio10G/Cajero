<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['btnMenu'])){
    $url_redireccion = "pag=0";
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
                
        default:
            # code...
            break;
    }
    header("refresh: 0.01; url=../index.php?$url_redireccion");
}
else{
    header("refresh: 0.01; url=../index.php");
}