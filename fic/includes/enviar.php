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

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_correo = "SELECT * FROM cms_configuration";
$correo = mysql_query($query_correo, $cnn_fic) or die(mysql_error());
$row_correo = mysql_fetch_assoc($correo);
$totalRows_correo = mysql_num_rows($correo);
 

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "contactoform")) {
 $insertSQL = sprintf("INSERT INTO t_contacto (nombre, email, asunto, mensaje) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['asunto'], "text"),
                       GetSQLValueString($_POST['mensaje'], "text"));

  mysql_select_db($database_cnn_fic, $cnn_fic);
  $Result1 = mysql_query($insertSQL, $cnn_fic) or die(mysql_error());
}

$email=$row_correo['config_mail_remitent'];

$MESSAGE_BODY='
<p>Nuevo mensaje de cont&aacute;ctenos a travez de FIC.com, los datos suminstrados son los siguientes:</p>
<p>
Nombre: '.$_POST['nombre'].'<br>
E-mail: '.$_POST['email'].'<br>
Asunto: '.$_POST['asunto'].'<br>
Mesaje: '.$_POST['mensaje'].'
</p>
';

$mensaje    = $MESSAGE_BODY;

$body = 'Su información ha sido enviada con éxito, responderemos  tu solicitud lo mas pronto posible<br />
Gracias por contactarnos. 
';

$cabeceras  = "From: contacto@fic.com\n"; 
$cabeceras .= "Reply-To: contacto@fic.com\n"; 
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
$cuerpo2 = $body_top.$body;

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

$asunto="Solicitud de contacto";

mail($email, $asunto, $cuerpo, $cabeceras);
mail($_POST['email'], $asunto, $cuerpo2, $cabeceras);


header('Location: ../contactenos.php?envio2');
	

mysql_free_result($correo);
?>
