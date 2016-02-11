<?php

    $cuerpo = "<b>Formulario de Contacto kuehne/</b> <br><br>";
	$cuerpo .= "<b>Este mensaje fue enviado por:</b> " . $_POST["nombre"] . "<br>";
	$cuerpo .= "<b>Telefono</b> " . $_POST["telefono"] . "<br>";
	$cuerpo .= "<b>E-mail:</b> " . $_POST["email"] . "<br>"; 
	$cuerpo .= "<b>Asunto:</b> " . $_POST["asunto"] . "<br>"; 
	
	 
	$cuerpo .= "<b>Comentario:</b> " . $_POST["comentario"] . "<br>";  
	
	$cuerpo.= "<b>Enviado el</b> " . date('d/m/Y');
	
    $enviado = mail("rodrigo.rengifo@imaginamos.com.co", "Mensaje desde el Sitio kuehne",stripslashes($cuerpo),"From: Correo\r\nContent-type: text/html\r\n"); 
	
	if($enviado)
	{
     	echo "<script language=javascript> alert ('Su Mensaje ha sido enviado'); window.location = './';</script>";
	}

	

?>