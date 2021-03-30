<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['usuario']) && $_SESSION['usuario'] !== null){
    if($_SESSION['usuario'] -> saldo === null){
        $_SESSION['usuario'] -> calcularSaldo();
    }
    echo $_SESSION['usuario'] -> saldo;
}