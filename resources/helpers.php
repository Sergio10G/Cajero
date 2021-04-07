<?php

define("base_url", "https://localhost/cajero/index.php");

function invertirFecha($fecha){
    $cachos = explode("-", $fecha);
    return "{$cachos[2]}-{$cachos[1]}-{$cachos[0]}";
}