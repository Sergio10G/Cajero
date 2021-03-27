<?php
require_once "./resources/db.php";
class Usuario{
    //    ATRIBUTOS
    private $db, $id, $nombre, $apellidos, $clave, $cod_cuenta;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct($datos){
        if($datos !== null){
            $this -> id         = $datos['ID'];
            $this -> nombre     = $datos['NOMBRE'];
            $this -> apellidos  = $datos['APELLIDOS'];
        }
        $this -> db = (new Database) -> connect();
        $this -> genCodCuenta();
    }

    public function __destruct(){
        try {
            $this -> db -> close();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    //    METODOS
    private function genCodCuenta(){
        $nums =  ["inicio" => 48, "fin" => 57];
        $mayus = ["inicio" => 65, "fin" => 90];
        $sql = "SELECT COD_CUENTA FROM USUARIOS";
        
        do{
            $acabado = true;
            $cod = "";
            for($i = 0; $i < 8; $i++){
                if($i < 2){
                    $cod .= chr(rand($mayus["inicio"], $mayus["fin"]));
                }
                else{
                    $cod .= chr(rand($nums["inicio"], $nums["fin"]));
                }
            }
            $resultados = $this -> db -> query($sql);
            while($codigo_bdd = mysqli_fetch_assoc($resultados)){
                if($codigo_bdd['COD_CUENTA'] = $cod){
                    $acabado = false;
                }
            }
        }while(!$acabado);

        $this -> cod_cuenta = $cod;
    }

    

    public function login(){

    }

    public function save(){

    }

    public function delete(){

    }
    

    //    GETTERS
    

    //    SETTERS
    

}