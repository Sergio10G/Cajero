<div class="menu_principal">
    <div class="info">
    
    </div>

    <?php 
        if(isset($_GET['msg'])){
            $raw = explode("-", $_GET['msg']);
            $datos_msg = [
                "color"     =>  $raw[0],
                "mensaje"   =>  $raw[1]
            ];
            echo '
                <div class="msg" style="color: '.$datos_msg["color"].';">
                    '.$datos_msg["mensaje"].'
                </div>
            ';
        }
    ?>

    <form action="./controllers/controllerMenu.php" method="post">
        <input type="submit" value="Ingresar" name="btnMenu">
        <input type="submit" value="Retirar" name="btnMenu">
        <input type="submit" value="Saldo" name="btnMenu">
    </form>
</div>