<?php
class Cajero{
    //    ATRIBUTOS
    private $db;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct(){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
    }

    public function __destruct(){
        //$this -> db -> close();
        
    }

    //    METODOS

    public function ingresar($id, $importe){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $sql = "INSERT INTO OPERACIONES(ID_USUARIO, IMPORTE, FECHA, TIPO_OPERACION) VALUES
        ($id, 
        $importe, 
        '".date('Y-m-d')."', 
        'ENTRADA')";
        if(!$this -> db -> query($sql)){
            return false;
        }
        return true;
    }

    public function retirar($id, $importe){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $sql = "INSERT INTO OPERACIONES(ID_USUARIO, IMPORTE, FECHA, TIPO_OPERACION) VALUES
        ($id, 
        $importe, 
        '".date('Y-m-d')."', 
        'SALIDA')";
        ;
        if(!$this -> db -> query($sql)){
            return false;
        }
        return true;
    }
}