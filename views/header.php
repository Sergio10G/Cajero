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
            <?php if($_SESSION['usuario'] !== null):?>
                <div class="cuenta">
                    <div class="usuario">
                        <span class="nombre"><?=$_SESSION['usuario'] -> nombre?></span>
                        <span class="apellidos"><?=$_SESSION['usuario'] -> apellidos?></span>
                        <span class="cod_cuenta"><?=$_SESSION['usuario'] -> cod_cuenta?></span>
                    </div>
                </div>
                <?php else:?>
                    <?php if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == 0)):?>
                    <div class="cuenta">
                    <form action="./controllers/controllerMenu.php" method="post">
                        <label>¿Ya tienes cuenta?</label>
                        <button type="submit" name="btnMenu" class="btn" value="Iniciar">Iniciar sesión</button>
                        <label>¿No tienes cuenta todavía?</label>
                        <button type="submit" name="btnMenu" class="btn" value="Registrarse">Registrarse</button>
                    </form>
                    </div>
                    <?php endif;?>
                <?php endif;?>
        </header>
        <?php 
            if(isset($_GET['msg'])){
                $raw = explode("-", $_GET['msg']);
                $datos_msg = [
                    "color"     =>  $raw[0],
                    "mensaje"   =>  $raw[1]
                ];
                echo '
                    <div class="msg" style="color: '.$datos_msg["color"].';">
                        '.$datos_msg["mensaje"].'
                    </div>
                ';
            }
        ?>