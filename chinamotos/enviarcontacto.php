<?PHP

  $nombre = $_GET['nombre'];
  $dir = $_GET['dir'];
  $tel = $_GET['tel'];
  $email = $_GET['email'];
  $msj = $_GET['msj'];
  
  
  
  $para  = 'Impo@chmotos.co';
  
  $titulo = 'Mensaje de contacto web CHINAMOTOS';

// message
$mensaje = '
<html>
<head>
  <title>Mensaje de contacto web</title>
</head>
<body>
  <table>
    <tr>
      <td>Nombre:</td><td>'.$nombre.'</td>
    </tr>
    <tr>
      <td>Direcci�n:</td><td>'.$dir.'</td>
    </tr>
	<tr>
      <td>Tel�fono:</td><td>'.$tel.'</td>
    </tr>
	<tr>
      <td>Correo:</td><td>'.$email.'</td>
    </tr>
    <tr>
      <td>Mensaje:</td><td>'.$msj.'</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: ContactoWEB <cms@imaginamos.com>' . "\r\n";
  
  if(mail($para, $titulo, $mensaje, $cabeceras)){
	echo"Gracias, su mensaje fue enviado";
  }else{
	echo"No se pudo enviar su mensaje";
  }
	
  
  //echo"Los datos enviados son: Nombre -> ".$nombre." Tel -> ".$tel." correo -> ".$email." MSJ -> ".$msj;

?>