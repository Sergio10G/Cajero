
    <main>
        <?php 
            if(!isset($_SESSION)){
                require_once "./resources/sesion.php";
            }
            if(!isset($_GET['pag']) || $_GET['pag'] == 0){
                require_once "./views/viewMenuPrincipal.php";
            }else{
                if($_SESSION['cajero'] -> getUsuario() !== null){

                }
                else{
                    require_once "./views/viewClave.php";
                }
            }
        ?>
    </main>