<div class="vista_retirar">
    <div class="info">
    
    </div>
    <div class="formulario_retirar">
        <form action="./controllers/controllerRetirar.php" method="POST">
            <label for="importe">Importe</label>
            <input type="number" name="importe" step="0.01" min="0.01" id="" required>
            <label for="clave">Por favor, confirma tu clave</label>
            <input type="password" name="clave" id="">
            <input type="submit" value="Retirar" required>
        </form>
    </div>
</div>
