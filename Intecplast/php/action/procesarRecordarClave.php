<?php


include '../dao/daoConnection.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';
include '../dao/clienteDAO.php';
include '../entities/cliente.php';
include '../dao/cotizacionDAO.php';
include '../entities/cotizacion.php';

	$cliente_id = $_POST['identificacion'];
	$clienteDAO = new clienteDAO();
	$cliente = new cliente();
	$cliente = $clienteDAO->getByClienteId($cliente_id);

	if ($cliente!=NULL) {

		$clave = $cliente->getClave();
		$mail = $cliente->getEmail();
				
		if ($clave != '') {

    			$mensaje ="Hemos recibido su solicitud de recordatorio de clave de usuario para nuestro sistema exitosamente. A continuación hacemos referencia de sus datos de acceso";

				$to .= $mail;
				// Asunto
				$subject = 'Clave de Usuario : Intecplast ';


				$msg.="<html>";
				$msg.="<head>";
				$msg.="</head>";
				$msg.="<body>";
				$msg.="<p> </p>";
				$msg.="<h3 style='color:#666;'>Estimado Usuario:</h3>";
				$msg.="<p> </p>";
				$msg.="<p style='color:#666;text-align:justify;'>".$mensaje."</p>";
				$msg.="<p><b>Clave:</b> ".$clave."</p>";
				$msg.="<p></p>";
				$msg.="<p></p>";
				$msg.="<p></p>";
				$msg.="<p style='color:#666;'>Cordial Saludo</p>";
				$msg.="<p></p>";
				$msg.="</body>";
				$msg.="</html>";
				// Para enviar en HTML, 
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				$headers .= 'From: Intecplast <servicio_cliente@intecplast.com.co>' . "\r\n";
				mail($to, $subject, $msg, $headers);



			$location = "location: ./../../recordarClave.php?mail=".$mail;

			header($location.$id);
			exit;

		}else{
			
			$location = "location: ./../../recordarClave.php?error=1";

			header($location.$id);
			exit;
			
		}



	}
	else {
			$location = "location: ./../../recordarClave.php?error=1";

			header($location.$id);
			exit;
			
	}
	





?>