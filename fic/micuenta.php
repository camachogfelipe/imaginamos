<?php require_once('Connections/cnn_fic.php'); ?>
<?php



if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "0";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php?error=login";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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




$colname_rs_usuario = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rs_usuario = $_SESSION['MM_Username'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_usuario = sprintf("SELECT * FROM t_usuarios WHERE email = %s", GetSQLValueString($colname_rs_usuario, "text"));
$rs_usuario = mysql_query($query_rs_usuario, $cnn_fic) or die(mysql_error());
$row_rs_usuario = mysql_fetch_assoc($rs_usuario);
$totalRows_rs_usuario = mysql_num_rows($rs_usuario);

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_descarga = "SELECT t_descargas.id_descarga, t_descargas.id_usuario, t_descargas.nombre, t_descargas.descripcion, t_descargas.archivo, t_usuarios.nombre AS usuario FROM t_descargas INNER JOIN t_usuarios ON t_descargas.id_usuario = t_usuarios.id_usuario WHERE t_usuarios.email = '".$row_rs_usuario['email']."' ";
$rs_descarga = mysql_query($query_rs_descarga, $cnn_fic) or die(mysql_error());
$row_rs_descarga = mysql_fetch_assoc($rs_descarga);
$totalRows_rs_descarga = mysql_num_rows($rs_descarga);
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <?php include('commonLibs.php');?>
    
    <script>
	$(document).ready(function(e) {
        $('.descargCont').jScrollPane();
    });
	</script>
    <style>
	.btnc{
		width: 125px;
height: 31px;
background: url(images/menuHeaderBtn.png);
display: block;
float: left;
text-transform: uppercase;
line-height: 31px;
font-family: 'MyriadPro-Semibold';
font-size: 12px;
color: #939393;
position: absolute;
right: -4;
top: -54px;
text-indent: 10px;
text-shadow: 0px 1px 0px white;
margin-left: 5px;}
	.btnc:hover{
		background-position: 0 -31px;
    color: white;
    text-shadow: 0 1px 0 black;}
	</style>
</head>

<body>
<?php include('header.php')?>

<div class="internasWrapper">
 
  	<div class="quienesLeft">
    	<div class="tituloLine"><span>Bienvenido <?php echo $row_rs_usuario['nombre']; ?></span></div>
        <div class="subtit"><?php echo $row_rs_usuario['subtitulo']; ?></div>
        <div class="text">
        <?php echo $row_rs_usuario['descripcion']; ?>
        </div>
    </div>
     
    <div class="miCuentaRight">

    <a href="index.php?salir=1" class="btnc" >Cerrar sesi&oacute;n</a>
		<div class="tit">DESCARGAS</div>
		<div class="subtit">Lorem ipsum dolor sit amet</div>
        <div class="descargCont">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?php do { ?>
              <tr>
                <td width="11%" class="icon">&nbsp;</td>
                <td width="56%" class="text"><?php echo $row_rs_descarga['nombre']; ?><br><span><?php echo $row_rs_descarga['descripcion']; ?></span></td>
                <td width="33%" class="btn"><a href="<?php echo $row_rs_descarga['archivo']; ?>" target="_blank" style="cursor:pointer;" >Descargar</a></td>
              </tr>
                <?php } while ($row_rs_descarga = mysql_fetch_assoc($rs_descarga)); ?>
            </table>

        </div>
        
  	</div>
    
   
    
    <div class="clear"></div>
</div>

<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rs_usuario);

mysql_free_result($rs_descarga);
?>
