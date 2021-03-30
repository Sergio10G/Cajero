<?php
class Cajero{
    //    ATRIBUTOS
    private $db;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct(){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $this -> usuario = null;
    }

    public function __destruct(){
        try {
            //$this -> db -> close();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    //    METODOS

    public function ingresar($importe){
        if($this -> usuario !== null){
            $sql = "INSERT INTO OPERACIONES(ID_USUARIO, IMPORTE, FECHA, TIPO_OPERACION) VALUES
            ('".$this -> usuario -> id."', 
            $importe, 
            '".date('Y-m-d')."', 
            'ENTRADA')";

            $this -> db -> query($sql);
        }
    }
}