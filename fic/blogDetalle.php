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

$sId_rsBlogs = "-1";
if (isset($_GET['id_blog'])) {
  $sId_rsBlogs = $_GET['id_blog'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rsBlogs = sprintf("SELECT * FROM t_blogs WHERE t_blogs.id_blog = %s", GetSQLValueString($sId_rsBlogs, "int"));
$rsBlogs = mysql_query($query_rsBlogs, $cnn_fic) or die(mysql_error());
$row_rsBlogs = mysql_fetch_assoc($rsBlogs);
$totalRows_rsBlogs = mysql_num_rows($rsBlogs);

$colname_rsImagenes = "-1";
if (isset($_GET['id_blog'])) {
  $colname_rsImagenes = $_GET['id_blog'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rsImagenes = sprintf("SELECT * FROM t_imagenes WHERE id_blog = %s", GetSQLValueString($colname_rsImagenes, "int"));
$rsImagenes = mysql_query($query_rsImagenes, $cnn_fic) or die(mysql_error());
$row_rsImagenes = mysql_fetch_assoc($rsImagenes);
$totalRows_rsImagenes = mysql_num_rows($rsImagenes);
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1">
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



<?php $titulo = explode(" ", $row_rsBlogs['titulo']);

$longitud = strlen($titulo[0]);

$titulo2=substr($row_rsBlogs['titulo'],$longitud+1);

?>


<div class="internasWrapper">
  	<div class="quienesLeft">
    	<div class="tituloLine"><span><?php echo $titulo[0]; ?></span> <?php echo $titulo2; ?></div>
        <div class="subtit"><?php echo $row_rsBlogs['subtitulo']; ?></div>
        <div class="fecha">Fecha: <?php echo $row_rsBlogs['fecha']; ?></div>
        <div class="text">
        <?php echo $row_rsBlogs['descripcion']; ?>
        </div>
    </div>
  
    <div class="blogDetRight">
    	<a href="blog.php" class="volverBlog" style="z-index:100;">Volver al blog</a>
        
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fbbbc225cad9aff"></script>
        <!-- AddThis Button END -->
   
    <div class="quienesRight" style="background:none;">
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
  
  
  </div>
    <div class="clear"></div>
</div>


	
  
<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rsBlogs);

mysql_free_result($rsImagenes);
?>
