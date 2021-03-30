<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <h1>El cajero confiable</h1>
            <div class="usuario">
                <?php if($_SESSION['usuario'] !== null):?>

                <?php else:?>
                    <form action="./controllers/controllerMenu.php" method="post">
                        <label>¿Ya tienes cuenta?</label>
                        <input type="submit" name="btnMenu" value="Iniciar sesión">
                        <label>¿No tienes cuenta todavía?</label>
                        <input type="submit" name="btnMenu" value="Registrarse">
                    </form>
                <?php endif;?>
            </div>
        </header>