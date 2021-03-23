<?php

class Usuario{
    //    ATRIBUTOS
    private $cod, $nombre, $apellidos, $clave;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct($datos){
        $this -> cod        = $datos['COD'];
        $this -> nombre     = $datos['NOMBRE'];
        $this -> apellidos  = $datos['APELLIDOS'];
        //$this -> cod = $datos['COD'];
    }

    public function __destruct(){
        
    }

    //    METODOS
    

    //    GETTERS
    

    //    SETTERS
    

}