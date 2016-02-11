<?php
include("head.php");
include("header.php");
$correos_e = DbHandler::GetAll("SELECT * FROM correo1");
$correo = DbHandler::GetAll("SELECT * FROM phpmailer");
if (isset($_POST["bandera"])) {


    if ($_POST["bandera"] == "abc") {
        $subir = DbHandler::Execute("INSERT INTO form_contacto(
                                            id,
                                            nombre,
                                            correo,                                            
                                            telefono,                                           
                                            comentario)
                                            VALUES (
                                            NULL,
                                            '" . utf8_decode(GetData("nombre")) . "',
                                            '" . GetData("correo") . "',                                            
                                            '" . GetData("telefono") . "',                                           
                                            '" . utf8_decode(GetData("comentario")) . "'                                            
                                            )");

        $body = '
            <center><img src="assets/img/header-logo-1.png"></center>
            <center><img src="assets/img/header-logo-2.png"></center>
            <br><br>
            Hola,<br>
            Un usuario env&iacute;a este mensaje desde la zona de contacto.
            <br><br>                                 
            <b>Nombre</b> : ' . utf8_decode(GetData("nombre")) . ' <br>                 
            <b>Email</b>: <a href="mailto:' . GetData("correo") . ' " target="_blank">' . GetData("correo") . '</a> <br>            
            <b>Tel&eacute;fono</b> : ' . GetData("telefono") . ' <br>            
            <b>Comentario</b> : ' . utf8_encode(GetData("comentario")) . ' <br> 
            <b>Fecha de env&iacute;o</b>: ' . date("Y-m-d H:i:s") . '<br>';

        $asunto = utf8_decode("Contáctenos");
//        $cCorreos = new Dbcontacto();
//        $contac = $cCorreos->getByPk(1); 
        $cCorreo = new Correo();

        $cCorreo->SendEmail($correos_e[0]["contactenos"], $asunto, $body, $correo);
        echo '<script> window.location.href = "index.php?seccion=contacto&cr";</script>';
    }
}
?>

<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
            <h2>Formulario de contacto</h2>
            <div class="con-form-int clearfix">
                <form class="fm-int" action="" method="post">
                    <div class="form-db">
                        <div class="contact-tx">
                            <div class="scroll-wrap">
                                <p><?php echo utf8_encode($textof[2]["texto"]) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php // echo $correos_e[0]["contactenos"]."<br>";
//                            echo $correo[0]["Username"]."<br>";
//                            echo $correo[0]["Password"]."<br>";
//                            echo $correo[0]["SMTPAuth"]."<br>";
//                            echo $correo[0]["SMTPSecure"]."<br>";
//                            echo $correo[0]["Host"]."<br>";
//                            echo $correo[0]["Port"]."<br>";
//                            echo $correo[0]["Froms"]."<br>";
//                            echo $correo[0]["FromName"]."<br>";
//                            echo $correo[0]["Subject"]."<br>";
                    ?>
                    <div class="form-db">
                        <input type="hidden" name="bandera" value="abc"/> 
                        <fieldset>
                            <label>Nombre</label>
                            <input name="nombre" class="validate[required]">
                        </fieldset>
                        <fieldset>
                            <label>Correo electrónico</label>
                            <input name="correo" class="validate[required, custom[email]]">
                        </fieldset>
                        <fieldset>
                            <label>Teléfono</label>
                            <input name="telefono" class="validate[required, custom[phone]]">
                        </fieldset>
                        <fieldset>
                            <label>Comentario</label>
                            <textarea name="comentario"></textarea>
                        </fieldset>
                        <fieldset>
                            <input type="submit" class="bt-submit" value="ENVIAR">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
if (isset($_GET["cr"])) {
    echo '<script>setTimeout(\'alert("Solicitud realizada correctamente, pronto pronto recibira una respuesta de nosotros");\',400);</script>';
}
?>

<?php
if (isset($_GET["no"])) {

    echo '<script>setTimeout(\'alert("Lo sentimos el usuario que ingreso ya se encuentra registrado");\',400);</script>';
}
if (isset($_GET["yes"])) {
    echo '<script>setTimeout(\'alert("Inscripción realizada correctamente");\',400);</script>';
}
?>