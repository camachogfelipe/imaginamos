<?php
$email = $_POST["email"];
require_once("admin/core/class/db.class.php");
require_once 'mailer/Correo.class.php';
//Creamos el nuevo objeto "Database"

    $curs1 = DbHandler::GetAll("SELECT * FROM usuarios WHERE email='$email'");
    if (count($curs1) > 0) {
				$id = $curs1[0]['id'];
        $name = $curs1[0]["nombre"];
        $correo = $curs1[0]["email"];
        $password = md5("Asserto.123");
				$db = new Database();
				$db->connect();
				//echo "UPDATE usuarios SET password='$password' WHERE id=".$id;
				//echo "<br>".md5("Asserto.123");exit();
				$db->doQuery("UPDATE usuarios SET password='$password' WHERE id=".$id, UPDATE_QUERY);
        $body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            Hola ' . $name . '<br><br>
            Has solicitado recuperar tu contrase&ntilde;a, <br><br>
            Tu nombre de usuario es: ' . $name . '<br>
            Tu contrase&ntilde;a nueva es: Asserto.123<br><br>
            Este es un mensaje enviado por el sistema.<br>
            Para m&aacute;s informaci&oacute;n ingresa a: <a href="http://asserto.com/">http://assert.com/</a><br>
            ';
        $asunto = utf8_decode("Recuperar Clave");
        $cCorreo = new Correo();
        $cCorreo->SendEmail($correo, $asunto, $body, "", "");
        echo "<script>window.location.href = 'index.php?seccion=index&con'</script>";
    } else {
        echo "<script>window.location.href = 'index.php?seccion=index&conno'</script>";
    }





