        <footer>
            <?php if(isset($_GET['pag']) && $_GET['pag'] != 0):?>
            <form action="./controllers/controllerMenu.php">
                <button type="submit" name="menu" class="btn btnMenu" value="menu">Volver al menú principal</button>
            </form>
            <?php endif;?>
            
        </footer>
    </div>
</body>
</html>