<?php



include '../dao/daoConnection.php';
include '../dao/suscritoDAO.php';
include '../entities/suscrito.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$suscrito_nombre = $_POST['nombresus'];
$suscrito_email = $_POST['emailsus'];

$nombre=$suscrito_nombre;
$email=$suscrito_email;

$suscritoDAO = new suscritoDAO();
$validacion = $suscritoDAO->getByMail($email);

if ($validacion != NULL) {

	$location = "location: ./../../index.php?errorSuscripcion=1";

}
else{

	$suscrito = new suscrito();

	$suscrito_nombre = accents2HTML($suscrito_nombre);  //     utilizar para eliminar tildes y � 
	$suscrito_email = accents2HTML($suscrito_email);  //     utilizar para eliminar tildes y � 

	$suscrito->setId($suscrito_id);
	$suscrito->setNombre($suscrito_nombre);
	$suscrito->setEmail($suscrito_email);

	$suscritoDAO->save($suscrito);

	// Destinatarios
	$to .= 'servicio_cliente@intecplast.com.co';

	// Asunto

	$subject = 'Nuevo Suscriptor';
	$msg.="<html>";
	$msg.="<head>";
	$msg.="</head>";
	$msg.="<body>";
	$msg.="<h3>Nuevo Suscriptor:</h3>";
	$msg.="<label><b>Nombre:</b></label>".$nombre;
	$msg.="<br/><br/><label><b>E-Mail:</b></label>".$email;
	$msg.="<br/><br/><br/></body>";
	$msg.="</html>";
	// Para enviar en HTML, 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$headers .= 'From: Imaginamos <servicio_cliente@intecplast.com.co>' . "\r\n";

	mail($to, $subject, $msg, $headers);


	$location = "location: ./../../index.php?add=1";

}

header($location);


?>