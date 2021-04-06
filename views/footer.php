        <footer>
            <?php if(isset($_GET['pag']) && $_GET['pag'] != 0):?>
            <form action="./controllers/controllerMenu.php">
                <button type="submit" name="menu" class="btn" value="menu">Volver al menu principal</button>
            </form>
            <?php endif;?>
            
        </footer>
    </div>
</body>
</html>