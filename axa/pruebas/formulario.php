<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 0);

include '../php/dao/daoConnection.php';
?>
<!DOCTYPE html>

<html lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AXA</title>
<meta name="description" content=" Encuentra los puntos Wifi ETB más cercanos y navega desde cualquier sitio. ">
<meta name="keywords" content=" wifi, zonas, etb, internet, sin cables, navega, mapa, velocidad, sitio, conectate, ciudad, navegacion, puntos, direccion" >
<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<style type="text/css">
.error {
	font-size: 26px;
	font-weight: bold;
	color: #000;
	position: absolute;
	float: left;
	margin-top: 150px;
}
</style>
</head>

<body>
<form action="formulario.php" method="post" name="prueba_formulario">
	<label for="nombre">Nombre</label> <input type="text" name="nombre" size="30" /><br>
  <label for="nombre">Email</label> <input type="text" name="email" size="50" /><br>
  <p><button type="submit">Enviar</button></p>
  <input type="hidden" name="envio" value="1" />
</form>
<?php
if(isset($_POST['envio'])) :
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	echo "Entro a enviar correos<br><br>";
	echo "Nombre: ".$nombre;
	echo "<br>Email: ".$email."<br>";;
	//Asignamos la ruta a la variable path
	$path=realpath("../docpdf/")."/";
	//asignamos a $directorio el objeto dir creado con la ruta
	$directorio=dir($path);
	
	//y ahora lo vamos leyendo hasta el final
	while ($archivo = $directorio->read()) {
		//
		if($archivo!="." OR $archivo!="..") {
			//ponemos el nombre de archivo a minuscula y recojemos solo los tres caracteres por la izquierda
			//para saber la extensión
			if (strtolower(substr($archivo, -3) == "csv")) {
				$csv = $path.$archivo;
			}
			if (strtolower(substr($archivo, -3) == "pdf")) {
				$pdf = $path.$archivo;
			}
		}
	}
	//descargo el objeto
	$directorio->close();
	
	echo "CSV: ".$csv;
	echo "<br>PDF: ".$pdf."<br>";
	
	# Testing SMTP Rackspace
	echo "<p>Testing SMTP RackSpace</p>";
	
	require_once "Mail.php";
	require_once("Mail/mime.php"); 
	 
	$from = "AXA ASISTENCIA COLOMBIA S.A <planes@tarjetasdeasistencia-axa.com>";
	$to = "Felipe Camacho <felipe.camacho@imaginamos.com>";
	$bcc = array("felocamgo@gmail.com", "elbert.tous@imaginamos.co");
	$subject = "Test email using PHP SMTP\r\n\r\n";
	$body = "This is a test email message";
	$html = '<html><body>HTML version of email - This is a test email message</body></html>';
	 
	$host = "mail.tarjetasdeasistencia-axa.com";
	$username = "planes@tarjetasdeasistencia-axa.com";
	$password = "Usuario2011";
	 
	$headers = array ('From' => $from,
		'To' => $to,
		'Bcc' => $bcc,
		'Subject' => $subject);
	
	$mime = new Mail_mime();

	$mime->setTXTBody($body);
	$mime->setHTMLBody($html);
	$mime->addAttachment($pdf, mime_content_type($pdf));
	$mime->addAttachment($csv, mime_content_type($csv));
	
	$body = $mime->get();
	$headers = $mime->headers($headers);	
	 
	$smtp = Mail::factory('smtp',
		array ('host' => $host,
			'auth' => true,
			'username' => $username,
			'password' => $password));
	 
	$mail = $smtp->send($to.",".implode(",", $bcc), $headers, $body);
	 
	if (PEAR::isError($mail)) {
		echo("<p>" . $mail->getMessage() . "</p>");
	} else {
		echo("<p>Message successfully sent!</p>");
	}

	# envio de .csv a AXA
	/*$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	try {
		$mail->Host       = "mail.tarjetasdeasistencia-axa.com"; // SMTP server
		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "mail.tarjetasdeasistencia-axa.com"; // sets the SMTP server
		$mail->Port       = 26;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "planes@tarjetasdeasistencia-axa.co"; // SMTP account username
		$mail->Password   = "Usuario2011";        // SMTP account password
		$mail->AddAddress('felipe.camacho@imaginamos.com', 'Felipe Camacho');		
		//$mail->AddReplyTo('bdclientes@axa-assistance.com.co');
		//$mail->AddCC('marketing@axa-assistance.com.co');
		//$mail->AddBCC('marisol.arenas@axa-assistance.com.co');
		//$mail->AddBCC('marisolarenasb@gmail.com');
		$mail->SetFrom('noreply@tarjetasdeasistencia-axa.com');
		$mail->FromName = "AXA ASISTENCIA COLOMBIA S.A";
		$mail->Subject = 'pruebas correos - primer envío';
		$mail->MsgHTML("<strong>prueba</strong>");
		$mail->AddAttachment($csv,$csv);      // attachment
		$mail->Send();
		echo "Mensaje 1 enviado\n";
	} catch (phpmailerException $e) {
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
		echo $e->getMessage(); //Boring error messages from anything else!
	}
	# FIN envio .csv a AXA
	
	# envio certificado asistencia a cliente
	unset($mail);
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	try {
		$mail->Host       = "mail.tarjetasdeasistencia-axa.com"; // SMTP server
		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "mail.tarjetasdeasistencia-axa.com"; // sets the SMTP server
		$mail->Port       = 26;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "planes@tarjetasdeasistencia-axa.co"; // SMTP account username
		$mail->Password   = "Usuario2011";        // SMTP account password
		$mail->AddAddress($email);
		//$mail->AddCC('marketing@axa-assistance.com.co');
		//$mail->AddBCC('marisolarenasb@gmail.com');
		//$mail->AddBCC('marisol.arenas@axa-assistance.com.co');
		//$mail->AddBCC('planes@tarjetasdeasistencia-axa.com');
		$mail->SetFrom('noreply@tarjetasdeasistencia-axa.com');
		$mail->FromName = "AXA ASISTENCIA COLOMBIA S.A";
		$mail->Subject = 'pruebas correos - segundo envío';
		$body = "<strong>Mensaje</strong><br><br>";
		$body.= wordwrap($message, 70)."<br>";
		$mail->MsgHTML($body);
		$mail->AddAttachment($pdf,$pdf);
		$mail->AddAttachment("../images/Condiciones Generales.doc", "Condiciones Generales.doc");
		$mail->Send();
		echo "Mensaje 2 enviado\n";
	} catch (phpmailerException $e) {
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
		echo $e->getMessage(); //Boring error messages from anything else!
	}*/
	# FIN envio certificado asistencia a cliente
endif;
?>
</body>
</html>