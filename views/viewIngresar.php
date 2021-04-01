<div class="vista_ingresar">
    <div class="info">
    
    </div>   
    <div class="formulario_ingresar">
        <form action="./controllers/controllerIngresar.php" method="post">
            <label for="importe">Importe</label>
            <input type="number" name="importe" step="0.01" min="0.01" id="" required>
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <input type="submit" value="Ingresar" required>
        </form>
    </div>
</div>