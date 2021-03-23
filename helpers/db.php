<?php

class Database{
    //    ATRIBUTOS
    public $db;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct(){
        $this -> db = mysqli_connect("localhost", "root", "", "TIENDA_ONLINE");
        $this -> db-> query("SET NAMES 'utf8'");
    }

    public function __destruct(){
        mysqli_close($this -> db);
    }

    //    METODOS
    

    //    GETTERS
    

    //    SETTERS
    

}