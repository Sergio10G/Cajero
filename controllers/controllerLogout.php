<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['cerrar'])){
    $_SESSION['sesion_iniciada'] = false;
    $msg = "green-Sesión cerrada.";
}
header("location: ../index.php?msg=$msg");