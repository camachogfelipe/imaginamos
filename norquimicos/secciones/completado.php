<?php
include("admin/core/class/db.class.php");
include( 'business/class/Correo.class.php' );
include( 'business/class/PHPMailer.class.php' );
$db->doQuery("UPDATE cotizaciones SET  estado ='completo' WHERE id=" . $_GET["id"], 4);
$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $_GET["id"], SELECT_QUERY);
$resultado = $db->results[0];
//para el cotizante
$body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            <h1><font color="#8A0868">Respuesta a tu cotizaci&oacute;n</font></h1><br><br>
            Hola ' . $resultado["nombre"] . '<br><br>           
            T&uacute; solicitud fue revisada correctamente<br>
            Archivo PDF: <a href="http://norquimicos.com.co/imagenes/pdfs/PDFUSER'.$_GET["id"].'.pdf">PDF</a><br>            
            Este es un mensaje enviado por el sistema.<br>
            ';
$asunto = utf8_decode("Solicitud de cotización");
$cCorreo = new Correo();
$cCorreo->SendEmail($resultado["email"], $asunto, $body);

//para el cotizador
$db->doQuery("SELECT correo,nombre user WHERE id=" . $_SESSION['id'], 4);
$je = $db->results[0];

$body1 = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            <h1><font color="#8A0868">Cotizacon Realizada</font></h1><br><br>
            Hola ' . $je["nombre"] . '<br><br>           
            Solicitud de cotizacion realizada correctamente<br>
            Archivo PDF: <a href="http://norquimicos.com.co/imagenes/pdfs/PDFUSER'.$_GET["id"].'.pdf">PDF</a><br>            
            Este es un mensaje enviado por el sistema.<br>
            ';
$asunto1 = utf8_decode("Cotizacion");
$cCorreo1 = new Correo();
$cCorreo1->SendEmail($je["correo"], $asunto1, $body1);
echo "<script>window.location.href = 'index.php?seccion=zonasegura&comp'</script>";    //mensaje creado
?>
