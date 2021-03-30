<?php
class Usuario{
    //    ATRIBUTOS
    public $db, $id, $nombre, $apellidos, $clave, $cod_cuenta, $saldo;

    //    CONSTRUCTOR Y DESTRUCTOR
    public function __construct($datos){
        $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
        $this -> genCodCuenta();
        if($datos !== null){
            $this -> cod_cuenta = $datos['COD_CUENTA'];
            $this -> clave  = $datos['CLAVE'];
        }
        $this -> saldo = null;
    }

    public function __destruct(){
        try {
            //$this -> db -> close();
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
        $resultado = $this -> db -> query($sql);
        while($codigo_recogido = mysqli_fetch_assoc($resultado)){
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

    public function calcularSaldo(){
        if($this -> cod_cuenta !== null && $this -> clave !== null){
            $sql = "SELECT calcular_saldo(".$this -> id.")";
            
            /*
            POR ALGUNA RAZÓN EL SERVIDOR INTERPRETA QUE EL OBJETO SQL ESTÁ CERRADO AL LLEGAR A ESTA FUNCIÓN,
            PERO AL DECLARARLO OTRA VEZ TODO FUNCIONA BIEN.
            */
            
            $this -> db = mysqli_connect("localhost", "root", "", "CAJERO");
            $resultado = $this -> db -> query($sql);

            if(mysqli_num_rows($resultado) == 1){
                $saldo = mysqli_fetch_row($resultado)[0];
                $this -> saldo = $saldo;
            }
            
        }
    }

    public function login(){
        if($this -> cod_cuenta !== null && $this -> clave !== null){
            $sql = "SELECT * FROM USUARIOS WHERE COD_CUENTA = '".$this -> cod_cuenta."'";
            $resultado = $this -> db -> query($sql);
            
            if(mysqli_num_rows($resultado) == 1){
                $usu_devuelto = mysqli_fetch_assoc($resultado);

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

}