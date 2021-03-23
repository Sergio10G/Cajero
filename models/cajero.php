<?php

class Cajero{
    //    ATRIBUTOS
    private $usuario;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct(){
        $this -> usuario = null;
    }

    public function __destruct(){
        
    }

    //    METODOS
    public function ingresar(){
        if($usuario !== null){
            
        }
    }

    //    GETTERS
    public function getUsuario(){
        return $this -> usuario;
    }

    //    SETTERS
    public function setUsuario($usuario){
        $this -> usuario = $usuario;
    }

}