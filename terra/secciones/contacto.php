<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL); 

$contac1 = DbHandler::GetAll("SELECT texto,img,correo FROM cont_contactenos WHERE id=1");

if (isset($_POST["envio"])) {
    $env = $_POST["envio"];
    if ($env == "123") {
        $contac1 = DbHandler::Execute("INSERT INTO formulario (ud,nombre,empresa,email,telefono,mensaje)
                        VALUES(NULL, '".GetData("nombre")."','".GetData("empresa")."','".GetData("correo")."','".GetData("telefono")."','".GetData("mensaje")."')");
        $body = '
            <img src="assets/img/header-logo.jpg">
            <br><br><br><br>                        
            <b>Nombre</b> : ' . GetData("nombre") . ' <br>             
            <b>Empresa</b> : ' . GetData("empresa") . ' <br> 
            <b>Email</b>: <a href="mailto:' . GetData("correo") . ' " target="_blank">' . GetData("correo") . '</a> <br>
            <b>Tel�fono</b> : ' . GetData("telefono") . ' <br>            
            <b>Mensaje</b> : ' . GetData("mensaje") . ' <br> 
            <b>Fecha de envio</b>: ' . date("Y-m-d H:i:s") . '<br>';
        $asunto = utf8_decode("Cont�ctenos");
        $cCorreo = new Correo();
        $cCorreo->SendEmail($contac1[0]["correo"], $asunto, $body);
        $val = 1;        
    }
}
?>
<?php include("head.php"); ?>
<?php include("header.php"); 
$contac2 = DbHandler::GetAll("SELECT texto,img,correo FROM cont_contactenos WHERE id=1");
?>

<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-contact">
                <h1>CONT&Aacute;CTENOS</h1>
                <div class="contact-head">
                    <div class="contact-tx">
                        <p><?php echo utf8_encode(nl2br($contac2[0]["texto"])) ?></p>
                    </div>
                    <div class="contact-img"><img src="img/contacto/450_200_<?php echo $contac2[0]["img"] ?>" width="450" height="200" alt=""></div>
                </div>
                <div class="contact-info">
                    <div class="con-form">
                        <h1>FORMULARIO DE CONTACTO</h1>
                        <form class="contact-form" action="" method="post">
                            <fieldset>
                                <input type="hidden" name="envio" value="123">
                                <input name="nombre" placeholder="Nombre y apellido..." class="validate[required]" type="text">
                            </fieldset>
                            <fieldset>
                                <input name="empresa" placeholder="Empresa..." class="validate[required]" type="text">
                            </fieldset>
                            <fieldset>
                                <input name="correo" placeholder="Correo electrónico..." class="validate[required, custom[email]]" type="text">
                            </fieldset>
                            <fieldset>
                                <input name="telefono" placeholder="Teléfono..." class="validate[required, custom[phone]]" type="text">
                            </fieldset>
                            <fieldset>
                                <textarea name="mensaje" placeholder="Mensaje..." class="validate[required]" type="text"></textarea>
                            </fieldset>
                            <fieldset class="fs-last">
                                <input type="submit" value="Enviar" class="submit">
                            </fieldset>
                        </form>
                    </div>
                    <div class="con-contact-dates">
                        <h2>DIRECCI&Oacute;N F&Iacute;SICA</h2>
                        <?php
                        $bullet1 = DbHandler::GetAll("SELECT * FROM bullet_contactenos WHERE posicion=1");
                        if (count($bullet1) > 0) {
                            for ($j = 0, $d = count($bullet1); $j < $d; $j++) {
                                ?>
                                <p><?php echo utf8_encode($bullet1[$j]["bullet"]) ?></p>
                                <?php
                            }
                        }
                        ?><br>               
                        <h2>CORREO ELECTR&Oacute;NICO</h2>
                        <ul>
                            <?php
                            $bullet2 = DbHandler::GetAll("SELECT * FROM bullet_contactenos WHERE posicion=2");
                            if (count($bullet2) > 0) {
                                for ($j = 0, $d = count($bullet2); $j < $d; $j++) {
                                    ?>
                                    <li><a href="mailto:<?php echo $bullet2[$j]["bullet"] ?>" target="_blank"><?php echo $bullet2[$j]["bullet"] ?></a></li>
                                    <?php
                                }
                            }
                            ?>      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if (isset($val)) {
    if (intval($val)) {
        if ($val == 1) {
            ?>
            <div>
                <div style="display:none;" class="modal-ok-ct">
                    <div  id="form-ok-ct">
                        <h1>El formulario se ha enviado</h1>
                        <h1>correctamente.</h1>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>
<?php include("footer.php"); ?>
<!--Modal-form-ok-->
