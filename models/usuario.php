<?php
require_once "../resources/db.php";
class Usuario{
    //    ATRIBUTOS
    public $db, $id, $nombre, $apellidos, $clave, $cod_cuenta;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct($datos){
        $this -> db = (new Database()) -> connect();
        $this -> genCodCuenta();
        if($datos !== null){
            $this -> cod_cuenta = $datos['COD_CUENTA'];
            $this -> clave  = $datos['CLAVE'];
        }
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
        $cods = [];
        
        $sql = "SELECT COD_CUENTA FROM USUARIOS";
        $resultados = $this -> db -> query($sql);
        while($codigo_recogido = mysqli_fetch_assoc($resultados)){
            array_push($cods, $codigo_recogido['COD_CUENTA']);
        }

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
            foreach($cods as $codigo_bd){
                if($codigo_bd == $cod){
                    $acabado = false;
                }
            }   
        }while(!$acabado);

        $this -> cod_cuenta = $cod;
    }

    public function login(){
        if($this -> cod_cuenta !== null && $this -> clave !== null){
            $sql = "SELECT * FROM USUARIOS WHERE COD_CUENTA = '".$this -> cod_cuenta."'";
            $resultado = $this -> db -> query($sql);
            $usu_devuelto = mysqli_fetch_assoc($resultado);
            
            if($usu_devuelto != false){
                if($this -> clave == $usu_devuelto['CLAVE']){
                    //echo var_dump($usu_devuelto);
                    $this -> id =           $usu_devuelto['ID'];
                    $this -> nombre =       $usu_devuelto['NOMBRE'];
                    $this -> apellidos =    $usu_devuelto['APELLIDOS'];
                    $this -> clave =        $usu_devuelto['CLAVE'];
                    $this -> cod_cuenta =   $usu_devuelto['COD_CUENTA'];

                    return true;
                }
                return false;
            }
            else{
                return false;
            }

        }
    }

    public function save(){

    }

    public function delete(){

    }
    

    //    GETTERS
    

    //    SETTERS
    

}