<?php
//+include 'Correo.class.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'mailer/Correo.class.php';
require_once("includes/clase_parametros_contact.php");

$nombre = $_POST['Name'];
$email = $_POST['E-mail'];
$telefono = $_POST['Phone'];
$pais = $_POST['Country'];
$ciudad = $_POST['City'];
$nombre2 = $_POST['Lastname'];
$comentario = $_POST['Comments'];
$correo="jocamilourimg@gmail.com";
$name_archivo =$_FILES["file"]["name"];
$archivo =$_FILES["file"]["tmp_name"];


$Country = ParametrosContact::country($pais);
//echo $nombre.'-->ok';

$body= 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&oacute;n:
</p>
Nombre : '.utf8_encode($nombre).'<br/>
Email : '.$email.'<br/>
Tel&eacute;fono : '.$telefono.'<br/>
Pais : '.  utf8_encode($Country[0]['Name']).'<br/>     
Ciudad : '. utf8_decode($ciudad).'<br/> 
Ciudad : '.  utf8_encode($nombre2).'<br/>     
Mensaje: '.  utf8_encode(nl2br($comentario)).'<br/><br/>
<i>Enviado por BRAND SUPPORT</i>
<p>Este email fue generado autom&aacute;ticamente, por favor abst&eacute;ngase de responderlo.</p>
</div>

';
 $asunto = utf8_decode("Contáctenos");
                    $cCorreo = new Correo();
                    $cCorreo->SendEmail($correo, $asunto, $body,$archivo,$name_archivo);

header('Location:destination.php');
//exit;
?>
