<div class="vista_ingresar">
    <div class="info">
        Aquí podrás ingresar efectivo en tu cuenta.
    </div>   
    <div class="formulario_ingresar">
        <form action="./controllers/controllerIngresar.php" method="post">
            <label for="importe">Importe</label>
            <input type="number" name="importe" step="0.01" min="0.01" id="" required>
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <button type="submit" class="btn" value="Ingresar">Ingresar</button>
        </form>
    </div>
</div>