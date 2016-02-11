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
$query_rsServic = "SELECT * FROM t_servicios";
$rsServic = mysql_query($query_rsServic, $cnn_fic) or die(mysql_error());
$row_rsServic = mysql_fetch_assoc($rsServic);
$totalRows_rsServic = mysql_num_rows($rsServic);
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
		var numOfBLogItems = $('.blogContain .blogContScroll .blogItem').size();
		$('.blogContScroll').width(numOfBLogItems*325);
		
        $('.blogContain').jScrollPane();
		
    });
	</script>    
</head>

<body>
<?php include('header.php')?>

<div class="internasWrapper">
<div class="blogContain">
  		<div class="blogContScroll">
<?php do{ ?>
 <div class="blogItem" style="background:none; box-shadow:none;">
 
	<a href="servicioDetalle.php?id_servicios=<?php echo $row_rsServic['id_servicios']; ?>" class="servItem">
    
    	<div class="icon icon1"></div>
       	<div class="texts">
            <div class="tit"><?php echo $row_rsServic['titulo']; ?></div>
            <div class="subtit"><?php echo $row_rsServic['subtitulo']; ?></div>
            <div class="t"><?php echo $row_rsServic['descripcion_detalle']; ?></div>
            <div class="verMasBtn">M&Aacute;S INFORMACI&Oacute;N</div>
        </div>
   	</a>
   
    </div>
     <?php } while ($row_rsServic = mysql_fetch_assoc($rsServic)); ?>
    
    <div class="clear"></div>
    </div>
    </div>
</div>

<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rsServic);
?>
