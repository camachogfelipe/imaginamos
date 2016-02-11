<?php require_once('Connections/cnn_fic.php');


if(isset($_GET['salir']) && $_GET['salir']==1){ 
session_start(); 
session_unset(); 
session_destroy(); 
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



mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_slide = "SELECT * FROM t_home_slide";
$rs_slide = mysql_query($query_rs_slide, $cnn_fic) or die(mysql_error());
$row_rs_slide = mysql_fetch_assoc($rs_slide);
$totalRows_rs_slide = mysql_num_rows($rs_slide);

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_carrusel = "SELECT * FROM t_carrusel ORDER BY id_img ASC";
$rs_carrusel = mysql_query($query_rs_carrusel, $cnn_fic) or die(mysql_error());
$row_rs_carrusel = mysql_fetch_assoc($rs_carrusel);
$totalRows_rs_carrusel = mysql_num_rows($rs_carrusel);
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
<div class="sliderBox">
	<?php $valor="0"; do { $valor++; ?>
	  <img src="<?php echo $row_rs_slide['img']; ?>" width="1000" height="445" <?php if ($valor!='1'){ ?>style="opacity:1"<?php }else{?>style="opacity:0"<?php }?>>
	  <?php } while ($row_rs_slide = mysql_fetch_assoc($rs_slide)); ?>
    <div class="navSlider">
    <div class="goLeft"></div>
        <div class="goRight"></div>
    </div>
</div>
<div class="destWrap">
	<div class="destBox">
        <div class="indicadoresBox">
           	<div id="bgBody" style="display:none">
				<script type="text/javascript">
					  // <![CDATA[
					  var bgHost = "http://www.applab.in/";
					  var bgType = "CO-19284-1";
					  var bgIndi = "1|2|9|10";
					  (function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src='"+f+"' type='text/javascript'%3E%3C/script%3E")); })(document);
					  // ]]>
					$(document).ready(function(e) {
						setTimeout(function(){
							//var t = $('#bgUl li span').text();
							var indicadoresName = [];
							var indicadoresNum = [];
							var indicadoresGoes = [];
							$('#bgUl li').each(function(index, element) {
                               indicadoresName.push($(this).find('a').text());
                               indicadoresNum.push($(this).find('span').text());
							   var goesSplit = $(this).css('list-style').split('/');
                               indicadoresGoes.push(goesSplit[goesSplit.length - 1].replace(')',''));
                            });
							
							for(i=0; i<indicadoresName.length; i++){
								var name = indicadoresName[i];
								var num = indicadoresNum[i];
								if(indicadoresGoes[i] == 'indica_green.png') {
									var goes = 'up'
								}else if(indicadoresGoes[i] == 'indica_firebrick.png'){
									var goes = 'down'
								} 
								var st = '<div class="'+goes+'"><span class="name">'+name+'</span> <span class="num">'+num+'</span></div>';
								$('.indicadores').append(st);
							}
						},1000);
					});
                </script>
        	</div>
        	<div class="indicadores">
            	<!--<div class="up"><span class="name">Dólar, (Compra)</span> <span class="num">$1235</span></div>-->
            </div>
    	</div>
        <div class="clear"></div>
        <div class="destacados">
        	<div class="destacadosMask">
            	<div class="destacadosScroll">
                		<?php do { ?>
               	    <a class="destItem" href="#">
                	    <div class="frame"><?php echo $row_rs_carrusel['texto']; ?></div>
                	    <img src="<?php echo $row_rs_carrusel['img']; ?>" width="210" height="115">
               	      </a>
                	  <?php } while ($row_rs_carrusel = mysql_fetch_assoc($rs_carrusel)); ?>
                
                </div>
            </div>
            <div class="goLeft"></div>
            <div class="goright"></div>
        </div>	
    </div>
    
    
</div>
<?php include('footer.php');?>
</div>
</body>
</html>
<?php
mysql_free_result($rs_slide);

mysql_free_result($rs_carrusel);
?>
