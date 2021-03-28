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