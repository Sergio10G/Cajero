<div class="vista_registro">
    <div class="info">
    
    </div>
    <?php 
        $usuario = new Usuario(null);
    ?>
    <form action="./controllers/controllerRegistro.php" method="post">
        <label for="cod_cuenta">Código de cuenta (necesario para iniciar sesión en tu cuenta)</label>
        <input type="text" name="cod_cuenta" id="" value="<?=$usuario -> cod_cuenta;?>" readonly>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="" required>

        <label for="clave">Clave</label>
        <input type="password" name="clave" id="" required>

        <button type="submit" class="btn" value="Registrarse">Registrarse</button>
    </form>
</div>