<?php

class Usuario{
    //    ATRIBUTOS
    private $id, $nombre, $apellidos, $clave;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct($datos){
        if($datos !== null){
            $this -> id         = $datos['ID'];
            $this -> nombre     = $datos['NOMBRE'];
            $this -> apellidos  = $datos['APELLIDOS'];
        }
        //$this -> cod = $datos['COD'];
    }

    public function __destruct(){
        
    }

    //    METODOS
    

    //    GETTERS
    

    //    SETTERS
    

}