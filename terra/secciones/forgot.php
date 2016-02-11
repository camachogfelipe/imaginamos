<?php

$cor = $_POST["correo"];
$contac1 = DbHandler::GetAll("SELECT pass,correo FROM forgot_pass WHERE correo='" . $cor . "'");
if (count($contac1) > 0) {
    $body = '
            <img src="assets/img/header-logo.jpg">
            <br><br>
            Hola, has solicitado recuperar tu contraseña
            <br>
            <H1>INFORMACIÓN</H1>
            <b>Correo</b> : ' . $contac1[0]["correo"] . ' <br>             
            <b>Contraseña</b> : ' . $contac1[0]["pass"] . ' <br>             
            <b>Fecha de envio</b>: ' . date("Y-m-d H:i:s") . '<br>';
    $asunto = utf8_decode("Recuperar contraseña");
    $cCorreo = new Correo();
    $cCorreo->SendEmail($cor, $asunto, $body);
    echo "<script type='text/javascript'>window.location='index.php?seccion=index&true';</script>";
} else {
    echo "<script type='text/javascript'>window.location='index.php?seccion=index&false';</script>";
}
?>