        <footer>
            <?php if(isset($_GET['pag']) && $_GET['pag'] != 0):?>
            <form action="./controllers/controllerMenu.php">
                <input type="submit" value="Volver al menú principal">
            </form>
            <?php endif;?>
            <?php if(isset($_SESSION['cajero']) && $_SESSION['cajero'] -> getUsuario() !== null):?>
            <form action="">
                <input type="submit" value="Cerrar sesión">
            </form>
            <?php endif;?>
        </footer>
    </div>
</body>
</html>