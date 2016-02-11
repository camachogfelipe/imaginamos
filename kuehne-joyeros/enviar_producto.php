<?php include("admin/core/mapping/include.mapping.php"); 
	
	$pro = SelectProductoPedido($_POST["id"]);


	$fecha = substr($_POST["datepicker"],6,4)."-".substr($_POST["datepicker"],3,2)."-".substr($_POST["datepicker"],0,2);
	GuardarProducto($_POST["id"],$_POST["nombre"],$_POST["correo"],$fecha);
	

    $cuerpo = "<b>Formato de visita programada kuehne/</b> <br><br>";
	$cuerpo .= "<b>Este mensaje fue enviado por:</b> ".$_POST["nombre"]."<br>";
	$cuerpo .= "<b>Correo</b> ".$_POST["correo"]."<br>";
	$cuerpo .= "<b>Fecha estimada de visita:</b> ".$_POST["datepicker"]."<br>";
	$cuerpo .= "<b>Producto:</b> ".$pro->nombre_producto_es[0]."<br>"; 
	
	$cuerpo.= "<b>Enviado el</b> ".date('d/m/Y');
	
    $enviado = mail("rodrigo.rengifo@imaginamos.com.co", "Formato de visita programada kuehne",stripslashes($cuerpo),"From: Correo\r\nContent-type: text/html\r\n"); 
	$enviado = mail($_POST["correo"], "Formato de visita programada kuehne",stripslashes($cuerpo),"From: Correo\r\nContent-type: text/html\r\n"); 
	
	if($enviado)
	{
     	echo "<script language=javascript> alert ('Su Mensaje ha sido enviado'); window.location = './';</script>";
	}


?>

