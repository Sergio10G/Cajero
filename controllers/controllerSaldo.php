<?php
require_once "./resources/helpers.php";

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['usuario']) && $_SESSION['usuario'] !== null){
    if($_SESSION['usuario'] -> saldo === null){
        $_SESSION['usuario'] -> calcularSaldo();
    }

    echo "<div class='saldo'>".round($_SESSION['usuario'] -> saldo, 2)."€</div>";
    if($movs = $_SESSION['usuario'] -> ultimosMovimientos()){
        echo "<div class='movimientos'>";
        echo "<div class='movimiento'>
        <span style='font-weight: bold;'>Fecha</span>
        <span style='font-weight: bold;'>Importe</span>
        </div>";
        $c = 0;
        foreach ($movs as $movimiento) {
            echo "<div class='movimiento ";
            echo $c % 2 == 0 ? "movBlanco" : "movColor";
            echo"'>
            <span class='fecha'>".invertirFecha($movimiento['FECHA'])."</span>";
            if($movimiento['TIPO_OPERACION'] == "ENTRADA"){
                echo "<span class='importe entrada'>+";
            }
            else if($movimiento['TIPO_OPERACION'] == "SALIDA"){
                echo "<span class='importe salida'>-";
            }
            echo "{$movimiento['IMPORTE']}€</span>
            </div>";
            $c++;
        }
        echo "</div>";
    }

}