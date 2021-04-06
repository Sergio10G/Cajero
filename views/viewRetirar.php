<div class="vista_retirar">
    <div class="info">
        Aquí podrás retirar efectivo de tu cuenta.
    </div>
    <div class="formulario_retirar">
        <form action="./controllers/controllerRetirar.php" method="POST">
            <label for="importe">Importe</label>
            <input type="number" name="importe" step="0.01" min="0.01" id="" required>
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <button type="submit" class="btn" value="Retirar">Retirar</button>
        </form>
    </div>
</div>
