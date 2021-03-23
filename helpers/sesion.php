<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['sesion_iniciada']) || $_SESSION['sesion_iniciada'] == false){
    $_SESSION['sesion_iniciada'] = true;
    $_SESSION['cajero'] = null;
}