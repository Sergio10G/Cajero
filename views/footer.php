        <footer>
            <?php if(isset($_GET['pag']) && $_GET['pag'] != 0):?>
            <form action="./controllers/controllerMenu.php">
                <input type="submit" value="Volver al menú principal">
            </form>
            <?php endif;?>
            <?php if($_SESSION['usuario'] !== null):?>
            <form method="POST" action="./controllers/controllerLogout.php">
                <input type="submit" name="cerrar" value="Cerrar sesión">
            </form>
            <?php endif;?>
        </footer>
    </div>
</body>
</html>