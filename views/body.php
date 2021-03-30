
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
                    if($_GET['pag'] == 5){
                        require_once "./views/viewRegistro.php";
                    }
                    else{
                        require_once "./views/viewLogin.php";
                    }
                }
            }
        ?>
    </main>