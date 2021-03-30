<div class="vista_saldo">
    <div class="info">
    
    </div>

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

    <div class="saldo">
        <?php require_once "./controllers/ControllerSaldo.php";?>€
    </div>
</div>