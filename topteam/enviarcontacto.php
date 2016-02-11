<?PHP

  $nombre = $_GET['nombre'];
  $tel = $_GET['tel'];
  $email = $_GET['email'];
  $msj = $_GET['msj'];
  
  
  $mensaje = "Nombre: $nombre \n";
  $mensaje .= "Teléfono: $tel \n";
  $mensaje .= "Correo: $email \n";
  $mensaje .= "Mensaje: $msj \n";
  
  if(mail('info@topteamgroup.com', 'Mensaje TopTeam', $mensaje)){
	echo"Gracias, su mensaje fue enviado";
  }else{
	echo"No se pudo enviar su mensaje";
  }

  
  //echo"Los datos enviados son: Nombre -> ".$nombre." Tel -> ".$tel." correo -> ".$email." MSJ -> ".$msj;

?>