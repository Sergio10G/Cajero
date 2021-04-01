<div class="vista_login">
    <div class="info">
        Introduce tus credenciales de acceso para continuar.
    </div>
    <div class="formulario_login">
        <form action="./controllers/controllerLogin.php" method="POST">
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