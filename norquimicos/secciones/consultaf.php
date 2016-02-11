<?php

$email = $_POST["correo"];

include "admin/core/class/db.class.php";

include "admin/modules/class/ClassFile.class.php";
$db = new Database();
//Conectamos
$db->connect();
$fin1 = DbHandler::GetAll("SELECT * FROM inscripcion WHERE correo='$email'");
if (count($fin1) > 0) {
    echo "<script>window.location.href = 'index.php?seccion=index&noval=1001'</script>";
    exit;
} else {
    //Creamos el nuevo objeto "Database"
    $db->doQuery("INSERT INTO inscripcion (id,correo,bandera) VALUES (NULL,'" . $email . "',0)", INSERT_QUERY);

    $id = $db->getLastId();
    $curs1 = DbHandler::GetAll("SELECT * FROM inscripcion WHERE id='$id'");
    if (count($curs1) > 0) {

        $body = '
            <img src="imagenes/logo.png">
             <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">SUSCRIPCI&Oacute;N EXITOSA</font></h1><br>
            Hola,<br><br>
           Has solicitado inscribirte a las noticias de NORQUIMICOS LTD. <br><br>            
            Periodicamente recibirás información de Promociones y novedades.<br><br>
            Gracias.
            <br><br><br>
            Dr: CARRERA 56 A No 4D-19<br>
            TEL: <a href="+57(1)4143089">+57(1)4143089</a><br>
            FAX: <a href="+57(1)4143938">+57(1)4143938</a><br><br>
            <a href="www.norquimicos.com.co">www.norquimicos.com.co </a><br>
            Bogota - Colombia – South America.
            <br><br>
           <img style="width: 34px;margin-top: 5px;position: absolute;" src="imagenes/skype12.png"> norquimicos.ltd
           <img style="width: 34px;margin-top: 5px;position: absolute;" src="imagenes/facebook12.png">/norquimicos.ltda
           <img style="width: 34px;margin-top: 5px;position: absolute;" src="imagenes/twitter12.png">@norquimicos.ltda
           <img style="width: 34px;margin-top: 5px;position: absolute;" src="imagenes/bb12.png">29E958F9
           ';
        $asunto = utf8_decode("Inscripcion");
        $cCorreo = new Correo();
        $cCorreo->SendEmail($email, $asunto, $body);
        echo "<script>window.location.href = 'index.php?seccion=index&noval=1003'</script>";
    } else {
        echo "<script>window.location.href = 'index.php?seccion=index&noval=1002'</script>";
    }
}


