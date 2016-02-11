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

$sId_rsInfoServicios = "-1";
if (isset($_GET['id_servicios'])) {
  $sId_rsInfoServicios = $_GET['id_servicios'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rsInfoServicios = sprintf("SELECT * FROM t_servicios where id_servicios= %s", GetSQLValueString($sId_rsInfoServicios, "int"));
$rsInfoServicios = mysql_query($query_rsInfoServicios, $cnn_fic) or die(mysql_error());
$row_rsInfoServicios = mysql_fetch_assoc($rsInfoServicios);
$totalRows_rsInfoServicios = mysql_num_rows($rsInfoServicios);
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <?php include('commonLibs.php');?>
</head>

<body>
<?php include('header.php')?>

<?php $titulo = explode(" ", $row_rsInfoServicios['titulo']);

$longitud = strlen($titulo[0]);

$titulo2=substr($row_rsInfoServicios['titulo'],$longitud+1);

?>


<div class="internasWrapper">
  	<div class="quienesLeft">
    	<div class="tituloLine"><span><?php echo $titulo[0]; ?></span> <?php echo $titulo2; ?></div>
        <div class="subtit"><?php echo $row_rsInfoServicios['subtitulo']; ?></div>
        <div class="text">
        <?php echo $row_rsInfoServicios['descripcion_completa']; ?>
        </div>
    </div>
    <div class="servDetRight">
     	<a href="servicios.php" class="volverBlog">Ver servicios</a>
      <?php echo $row_rsInfoServicios['datos_cuenta']; ?>
  	</div>
    <div class="clear"></div>
</div>

<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rsInfoServicios);
?>
