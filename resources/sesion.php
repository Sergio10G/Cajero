<?php
require_once "./models/cajero.php";

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['sesion_iniciada']) || $_SESSION['sesion_iniciada'] == false){
    $_SESSION['sesion_iniciada'] = true;
    $_SESSION['cajero'] = new Cajero();
}

/*
foreach($_SESSION as $key => $value){
    echo "<strong>$key</strong>: ";
    echo var_dump($value)."<br><br>";
}
*/
//session_destroy();