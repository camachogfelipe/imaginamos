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
$query_rsQuienesSomos = "SELECT * FROM t_quienes_somos";
$rsQuienesSomos = mysql_query($query_rsQuienesSomos, $cnn_fic) or die(mysql_error());
$row_rsQuienesSomos = mysql_fetch_assoc($rsQuienesSomos);
$totalRows_rsQuienesSomos = mysql_num_rows($rsQuienesSomos);

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rsImagenes = "SELECT * FROM t_imagenes_blog";
$rsImagenes = mysql_query($query_rsImagenes, $cnn_fic) or die(mysql_error());
$row_rsImagenes = mysql_fetch_assoc($rsImagenes);
$totalRows_rsImagenes = mysql_num_rows($rsImagenes);
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <style >
      .imgGal img {
        width:448px !important;
		height:282px !important;
      }
    </style>
    
    <?php include('commonLibs.php');?>
    
</head>

<body>
<?php include('header.php')?>

<?php $titulo = explode(" ", $row_rsQuienesSomos['titulo']);

$longitud = strlen($titulo[0]);

$titulo2=substr($row_rsQuienesSomos['titulo'],$longitud+1);

?>

<div class="internasWrapper">
  	<div class="quienesLeft">
    	<div class="tituloLine"><span><?php echo $titulo[0]; ?></span> <?php echo $titulo2; ?></div>
        <div class="subtit"><?php echo $row_rsQuienesSomos['subtitulo']; ?></div>
        <div class="text">
        <?php echo $row_rsQuienesSomos['descripcion']; ?>
        </div>
    </div>
    <div class="quienesRight">
       <?php do { ?>
    	<div class="imgGal">
			  <img src="<?php echo $row_rsImagenes['img']; ?>" >
        </div>
          <?php } while ($row_rsImagenes = mysql_fetch_assoc($rsImagenes)); ?>
        <div class="galNav">
        	<div class="goleft"></div>
            <div class="goright"></div>
        </div>
  </div>
    <div class="clear"></div>
</div>

<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rsQuienesSomos);

mysql_free_result($rsImagenes);
?>
