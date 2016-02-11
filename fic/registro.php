<?php require_once('Connections/cnn_fic.php'); ?>
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
$query_rss_correo = "SELECT * FROM cms_configuration";
$rss_correo = mysql_query($query_rss_correo, $cnn_fic) or die(mysql_error());
$row_rss_correo = mysql_fetch_assoc($rss_correo);
$totalRows_rss_correo = mysql_num_rows($rss_correo);


	
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}



if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "contactoform")) {
  $insertSQL = sprintf("INSERT INTO t_usuarios (nombre, apellido, email, telefono, pais, ciudad, contrasena) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['pais'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['contrasena'], "text"));

  mysql_select_db($database_cnn_fic, $cnn_fic);
  $Result1 = mysql_query($insertSQL, $cnn_fic) or die(mysql_error());
  
  $email=$row_rss_correo['config_mail_remitent'];
$MESSAGE_BODY='
<p>Un Usuario nuevo registrado FIC.com:</p>
<p>
E-mail: '.$_POST['email'].'<br>
Contraseña: '.$_POST['contrasena'].'<br>
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


  $insertGoTo = "registro.php?envio=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_registro = "SELECT * FROM t_country ORDER BY Name ASC";
$rs_registro = mysql_query($query_rs_registro, $cnn_fic) or die(mysql_error());
$row_rs_registro = mysql_fetch_assoc($rs_registro);
$totalRows_rs_registro = mysql_num_rows($rs_registro);



?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <?php include('commonLibs.php');?>
    <script type="text/javascript"> 
function showselect(str){ 
var xmlhttp; 
if (str=="")
{ 
document.getElementById("txtHint".innerHTML="")
return; 
} 
if (window.XMLHttpRequest) 
{// code for IE7+, Firefox, Chrome, Opera, Safari 
xmlhttp=new XMLHttpRequest(); 
} 
else 
{// code for IE6, IE5 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
} 
xmlhttp.onreadystatechange=function() 
{ 
if (xmlhttp.readyState==4 && xmlhttp.status==200) 
{ 
document.getElementById("ciudad").innerHTML=xmlhttp.responseText;
} 
} 
xmlhttp.open("GET","select-buscar.php?Country="+str,true); 
xmlhttp.send(); 
} 
</script> 
    <script>

function validar(){
  nombre=document.contactoform.nombre.value;
  apellido=document.contactoform.apellido.value;
  email=document.contactoform.email.value;
  telefono=document.contactoform.telefono.value;
  pais=document.contactoform.pais.value;
  ciudad=document.contactoform.ciudad.value;
  contrasena=document.contactoform.contrasena.value;
  contrasena2=document.contactoform.contrasena2.value;
  
  m="0"
  aler="Llenar los datos solicitados para el registro:\n "
if(m=="0"){
  if(nombre==""){
    m++
    aler+="Debes digitar el Nombre \n"
    } 
	if(apellido==""){
    m++
    aler+="Debes digitar el Apellido \n"
    } 
	
   if (!(/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(email)) ){
     m++
    aler+="El E-mail debe ser ingresado correctamente \n"
   }
  if(telefono==""){
    m++
    aler+="Debes digitar el Teléfono \n"
    }    
  if(pais==""){
    m++
    aler+="Debes escojer un Pais\n"
    }
	if(ciudad==""){
    m++
    aler+="Debes escojer una Ciudad\n"
    }
	if(contrasena=="" || contrasena!=contrasena2 || contrasena2==""){
    m++
    aler+="La contraseña no coinciden\n"
    }
    if(m!="0"){
    
    alert(aler);
  
    }else{

    document.contactoform.submit();
      }
}
  }
  
 
</script>
</head>

<body>

<div class="modalBox">
<?php if (!isset($_GET['envio'])){ ?>
	<h1>Registro</h1>
    <h3>Phasellus in ipsum dolor, ac faucibus diam. Aenean in ligula eget enim interdum vehicula posuere vitae magna. </h3>
    <form method="POST" name="contactoform" id="contactoform" action="<?php echo $editFormAction; ?>">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="40%">Nombre </td>
                <td width="60%"><input type="text" name="nombre" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%">Apellido </td>
                <td width="60%"><input type="text" name="apellido" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%">E-mail </td>
                <td width="60%"><input type="text" name="email" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%">Teléfono </td>
                <td width="60%"><input type="text" name="telefono" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%">Pais </td>
                <td width="60%">
                  <select name="pais" class="select" onChange="showselect(this.value)"> 
                      <option value="" selected>Seleccionar</option>                     
                    <?php do { ?>  <option value="<?php echo $row_rs_registro['Code']; ?>"><?php echo $row_rs_registro['Name']; ?></option>  <?php } while ($row_rs_registro = mysql_fetch_assoc($rs_registro)); ?>
  </select>
                   </td>
            </tr>
            <tr>
                <td width="40%">Ciudad </td>
                <td width="60%"><select name="ciudad" id="ciudad" class="select">
                		<option value="" selected>Seleccionar</option>
</select></td>
            </tr>
            <tr>
                <td width="40%">Contraseña </td>
                <td width="60%"><input name="contrasena" type="password" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%">Repetir contraseña </td>
                <td width="60%"><input type="password" name="contrasena2" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%"></td>
                <td width="60%"><input name="Botón" type="button" class="inputSubmit"  onClick="validar()" value="Continuar" /></td>
            </tr>
        </table>
        <input type="hidden" name="MM_insert" value="contactoform">
    </form>
    <?php echo $totalRows_rs_registro2; if (isset($_GET['envio']) and $_GET['envio']=='2'){ ?>
    <script>
	alert("El E-mail ya se encuentra registrado.");
	</script>
    <?php }?>
    <?php }else{  echo $totalRows_rs_registro2; ?>
    Registro realizado satisfactoriamente.
    <?php }?>
</div>

</body>
</html>
<?php
mysql_free_result($rs_registro);

mysql_free_result($rss_correo);

?>
