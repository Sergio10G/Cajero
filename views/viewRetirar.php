<div class="vista_retirar">
    <div class="info">
    
    </div>

    <?php 
        // && $_GET['msg'] != ""
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

    <div class="formulario_retirar">
        <form action="./controllers/controllerRetirar.php" method="POST">
            <label for="importe">Importe</label>
            <input type="number" name="importe" id="">
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <input type="submit" value="Retirar">
        </form>
    </div>
</div>
