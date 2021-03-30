<?php
class Cajero{
    //    ATRIBUTOS
    private $db;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct(){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
    }

    public function __destruct(){
        try {
            //$this -> db -> close();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    //    METODOS

    public function ingresar($id, $importe){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $sql = "INSERT INTO OPERACIONES(ID_USUARIO, IMPORTE, FECHA, TIPO_OPERACION) VALUES
        ($id, 
        $importe, 
        '".date('Y-m-d')."', 
        'ENTRADA')";
        echo "Se va a intentar ingresar...<br>";
        $this -> db -> query($sql) or die("Ha habido un error al ingresar el dinero.");
        
    }

    public function retirar($id, $importe){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $sql = "INSERT INTO OPERACIONES(ID_USUARIO, IMPORTE, FECHA, TIPO_OPERACION) VALUES
        ($id, 
        $importe, 
        '".date('Y-m-d')."', 
        'SALIDA')";
        echo "Se va a intentar retirar...<br>";
        $this -> db -> query($sql) or die("Ha habido un error al retirar el dinero.");
    }
}