
    <main>
        <?php 
            if(!isset($_SESSION)){
                require_once "./resources/sesion.php";
            }
            if(!isset($_GET['pag']) || $_GET['pag'] == 0){
                require_once "./views/viewMenuPrincipal.php";
            }else{
                if($_SESSION['usuario'] !== null){
                    if($_GET['pag'] == 1){
                        require_once "./views/viewIngresar.php";
                    }
                    else if($_GET['pag'] == 2){
                        require_once "./views/viewRetirar.php";
                    }
                    else if($_GET['pag'] == 3){
                        require_once "./views/viewSaldo.php";
                    }
                }
                else{
                    require_once "./views/viewLogin.php";
                    /*
                    require_once "./models/usuario.php";
                    $usu = new Usuario(null);
                    $usu -> clave = "12345";
                    $usu -> cod_cuenta = "AA000001";
                    $msg = $usu -> login() ? "Login exitoso. Bienvenido ".$usu -> nombre : "Login fallido";
                    echo $msg;
                    */
                }
            }
        ?>
    </main>