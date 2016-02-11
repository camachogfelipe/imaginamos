<?php

$suscrito_nombre = $_POST['nombre'];
$suscrito_email = $_POST['email'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$comentario = $_POST['comentario'];


// Destinatarios
$to .= 'servicio_cliente@intecplast.com.co';

// Asunto

$subject = 'Información de Contacto';
$msg.="<html>";
$msg.="<head>";
$msg.="</head>";
$msg.="<body>";
$msg.="<h3>Información de Contacto:</h3>";
$msg.="<label><b>Nombre:</b></label>".$nombre;
$msg.="<br/><br/><label><b>E-Mail:</b></label>".$email;
$msg.="<br/><br/><label><b>Empresa:</b></label>".$empresa;
$msg.="<br/><br/><label><b>Comentario:</b></label>".$comentario;
$msg.="<br/><br/><br/></body>";
$msg.="</html>";
// Para enviar en HTML, 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: Imaginamos <servicio_cliente@intecplast.com.co>' . "\r\n";

mail($to, $subject, $msg, $headers);


$location = "location: ./../../contactenos.php?contactoSend=1";

header($location);


?>