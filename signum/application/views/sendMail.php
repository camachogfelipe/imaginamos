<?php 
if ($_POST["email"]<>'') { 
	$ToEmail = 'ingeniero.sebas@gmail.com'; 
	$EmailSubject = 'Contacto desde Mi web'; 
	$mailheader = "From: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$MESSAGE_BODY = "<span style='font-size:18px'>Se envió este mensaje desde: Mi Web</span><br><br>";
	$MESSAGE_BODY .= "<b style='color:#003366'>Nombre: ".$_POST["name"]."</b><br>"; 
	$MESSAGE_BODY .= "<b style='color:#003366'>Email: ".$_POST["email"]."</b><br>";
	$MESSAGE_BODY .= "<b style='color:#003366'>Mensaje: ".nl2br($_POST["comment"])."</b><br>"; 
	if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)){
		echo "1";
	}else{
		echo "2";
	}
}
?> 