<?PHP

  $nombre = $_GET['nombre'];
  $emp = $_GET['emp'];
  $dir = $_GET['dir'];
  $city = $_GET['city'];
  $tel = $_GET['tel'];
  $email = $_GET['email'];
  $msj = $_GET['msj'];
  
  
  
  $para  = 'fercho.ba@gmail.com';
  
  $titulo = 'Mensaje de distribuidores CHINAMOTOS';

// message
$mensaje = '
<html>
<head>
  <title>Mensaje de distribuidores</title>
</head>
<body>
  <table>
    <tr>
      <td>Nombre:</td><td>'.$nombre.'</td>
    </tr>
	<tr>
      <td>Empresa:</td><td>'.$emp.'</td>
    </tr>
	<tr>
      <td>Dirección:</td><td>'.$dir.'</td>
    </tr>
	<tr>
      <td>Ciudad:</td><td>'.$city.'</td>
    </tr>
    <tr>
      <td>Teléfono:</td><td>'.$tel.'</td>
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
$cabeceras .= 'From: DistribuidoresWEB <cms@imaginamos.com>' . "\r\n";
  
  if(mail($para, $titulo, $mensaje, $cabeceras)){
	echo"Gracias, su mensaje fue enviado";
  }else{
	echo"No se pudo enviar su mensaje";
  }
	
  
  //echo"Los datos enviados son: Nombre -> ".$nombre." Tel -> ".$tel." correo -> ".$email." MSJ -> ".$msj;

?>