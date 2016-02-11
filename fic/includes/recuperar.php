<?php require_once('../Connections/cnn_fic.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_rs_recuperar = "-1";
if (isset($_POST['email'])) {
  $colname_rs_recuperar = $_POST['email'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_recuperar = sprintf("SELECT * FROM t_usuarios WHERE email = %s", GetSQLValueString($colname_rs_recuperar, "text"));
$rs_recuperar = mysql_query($query_rs_recuperar, $cnn_fic) or die(mysql_error());
$row_rs_recuperar = mysql_fetch_assoc($rs_recuperar);
$totalRows_rs_recuperar = mysql_num_rows($rs_recuperar);



$email=$row_rs_recuperar['email'];

$MESSAGE_BODY='
<p>
<img src="http://repositorio.imaginamos.com/SBC/fic/images/logo.png"><br />
Recuerde su usuario y contraseña:<br />
Usuario:'.$row_rs_recuperar['email'].'<br />
Contraseña:'.$row_rs_recuperar['contrasena'].'
</p>
Para más información ingrese en:<a href="http://www.fic.com.pa/">http://www.fic.com.pa/</a>

';

$mensaje    = $MESSAGE_BODY;


$cabeceras  = "From: fic@fic.com\n"; 
$cabeceras .= "Reply-To: fic@fic.com\n"; 
$cabeceras .= "MIME-version: 1.0\n"; 
$cabeceras .= "Content-type: multipart/mixed; "; 
$cabeceras .= "boundary=\"Message-Boundary\"\n"; 
$cabeceras .= "Content-transfer-encoding: 7BIT\n"; 
$cabeceras .= "X-attachments: $nombref"; 
$body_top  = "--Message-Boundary\n"; 
$body_top .= "Content-type: text/html; charset=US-ASCII\n"; 
$body_top .= "Content-transfer-encoding: 7BIT\n"; 
$body_top .= "Content-description: Mail message body\n\n"; 

$cuerpo = $body_top.$mensaje;

if($tamano_archivo>0)
{  
 //Leo el fichero
   $oFichero = fopen($_FILES["adjunto"]["tmp_name"], 'r'); 
   $sContenido = fread($oFichero, filesize($_FILES["adjunto"]["tmp_name"]));
   $sAdjuntos .= chunk_split(base64_encode($sContenido));
   fclose($oFichero);
   //Adjunto el fichero
   $cuerpo .= "\n\n--Message-Boundary\n";
   $cuerpo .= "Content-type: Binary; name=\"$nombref\"\n";
   $cuerpo .= "Content-Transfer-Encoding: BASE64\n";
   $cuerpo .= "Content-disposition: attachment; filename=\"$nombref\"\n\n";
   $cuerpo .= "$sAdjuntos\n";
   $cuerpo .= "--Message-Boundary--\n";
}

$asunto="Recuperación de contraseña";

mail($email, $asunto, $cuerpo, $cabeceras);


header('Location: ../pass.php?envio');
	

mysql_free_result($rs_recuperar);
?>
