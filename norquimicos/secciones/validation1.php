<?php

include "admin/core/class/db.class.php";
include "admin/modules/class/ClassFile.class.php";

$id = $_POST["ids"];
$name = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

//Creamos el nuevo objeto "Database"
//var_dump($_POST);exit;

$curs = DbHandler::Execute("UPDATE user SET contrasena='$contrasena' WHERE id=" . $id);
$curs1 = DbHandler::GetAll("SELECT * FROM user WHERE id='$id'");
if (count($curs1) > 0) {
    $name = $curs1[0]["nombre"];
    $name1 = $curs1[0]["usuario"];
    $correo = $curs1[0]["correo"];
    $password = $curs1[0]["contrasena"];
    $body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            Hola ' . $name . '<br><br>
            Ha cambiado su contrase&ntilde;a, <br><br>
            Los datos de usuario son:<br>
            Tu nombre de usuario es: ' . $name1 . '<br>
            Tu contrase&ntilde;a: ' . $password . '<br><br>
            Este es un mensaje enviado por el sistema.
            Para m&aacute;s informaci&oacute;n ingresa a: <a href="http://norquimicos.com.co/">http://norquimicos.com.co/</a><br>
            ';
    $asunto = utf8_decode("Recuperar Clave");
    $cCorreo = new Correo();
    $cCorreo->SendEmail($correo, $asunto, $body);
    echo "<script>window.location.href = 'index.php?seccion=zonasegura&conval'</script>";
} else {
    echo "<script>window.location.href = 'index.php?seccion=index&&conno'</script>";
}
?>