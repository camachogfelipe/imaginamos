<?php
//+include 'Correo.class.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'mailer/Correo.class.php';
//require_once("includes/clase_parametros_contact.php");


$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];
$empresa = $_POST['empresa'];
$correo="jocamilourimg@gmail.com";
//luismejiaposada@gmail.com


$body= 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&oacute;n:
</p>
Nombre : '.utf8_encode($nombre).'<br/>
Ciudad : '. utf8_decode($ciudad).'<br/> 
Email : '.$email.'<br/>
Tel&eacute;fono : '.$telefono.'<br/>  
Ciudad : '. utf8_decode($empresa).'<br/> 
Mensaje: '.  utf8_encode(nl2br($comentario)).'<br/><br/>
</div>

';
 $asunto = utf8_decode("Contáctenos");
                    $cCorreo = new Correo();
                    $cCorreo->SendEmail($correo, $asunto, $body,$archivo,$name_archivo);

header('Location:../index.php?seccion=contacto');
//exit;
?>
