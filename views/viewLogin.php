<div class="vista_login">
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

    <div class="formulario_login">
        <form action="./controllers/controllerLogin.php" method="POST">
            <h1>Introduce tu clave para continuar.</h1>
            <label for="cod_cuenta">Código de cuenta</label>
            <input type="text" name="cod_cuenta" id="" required>
            <label for="clave">Clave</label>
            <input type="password" name="clave" id="" required>
            <?php 
                echo '<input type="hidden" name="pag" value="'.$_GET['pag'].'">';
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>