<?php

class Database{
    //    ATRIBUTOS

    //    CONSTRUCTOR Y DESTRUCTOR

    //    METODOS
    public function connect(){
        $db = mysqli_connect("localhost", "root", "", "CAJERO");
        $db->query("SET NAMES 'utf8'");
		return $db;
    }

    //    GETTERS
    

    //    SETTERS
    

}