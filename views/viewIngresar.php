<div class="vista_ingresar">
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
    
    <div class="formulario_ingresar">
        <form action="./controllers/controllerIngresar.php" method="post">
            <label for="importe">Importe</label>
            <input type="number" name="importe" step="0.01" min="0.01" id="">
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <input type="submit" value="Ingresar">
        </form>
    </div>
</div>