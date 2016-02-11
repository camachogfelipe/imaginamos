<?php
//+include 'Correo.class.php';
//error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'mailer/Correo.class.php';
//require_once("includes/clase_parametros_contact.php");


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];
$correo="info@kuehnejoyeros.com";
//luismejiaposada@gmail.com


$body= 

'
<div style="margin-left:20px;">
<p>
        Se ha realizado un comentario . <br/>
        Con la siguiente infomaci&oacute;n:
</p>
Nombre : '.utf8_encode($nombre).'<br/>
Tel&eacute;fono : '.$telefono.'<br/> 
Email : '.$email.'<br/>
Asunto : '.$asunto.'<br/> 
Mensaje: '.  utf8_encode(nl2br($comentario)).'<br/><br/>
</div>

';
 $asunto = utf8_decode("Contáctenos");
                    $cCorreo = new Correo();
                    $cCorreo->SendEmail($correo, $asunto, $body,$archivo,$name_archivo);

header('Location:contactenos.php?d=10');
//exit;
?>
