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
$query_rsBlogs = "SELECT * FROM t_blogs";
$rsBlogs = mysql_query($query_rsBlogs, $cnn_fic) or die(mysql_error());
$row_rsBlogs = mysql_fetch_assoc($rsBlogs);
$totalRows_rsBlogs = mysql_num_rows($rsBlogs);
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1">
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
            <div class="blogItem">
                <img src="images/blog/Untitled-1.png" width="305" height="125">
                <div class="texts">
                    <div class="ticon">Blogspot</div>
                    <div class="tit"><?php echo $row_rsBlogs['titulo']; ?></div>
                    <div class="t"><?php echo $row_rsBlogs['subtitulo']; ?></div>
                    <div class="dataBox">
                        <div class="fecha"><?php echo $row_rsBlogs['fecha']; ?></div>
                        <a href="blogDetalle.php?id_blog=<?php echo $row_rsBlogs['id_blog']; ?>" class="verMasBlog">VER POST</a>
                    </div>
                    <div class="tags"><strong>Tags:</strong>
                    <?php if($row_rsBlogs['tag1']!="" && $row_rsBlogs['tag1']!=NULL) { ?>
                     <a href="<?php echo $row_rsBlogs['url1']; ?>" ><?php echo $row_rsBlogs['tag1']; ?></a>
                     <?php }?>
                      <?php if($row_rsBlogs['tag2']!="" && $row_rsBlogs['tag2']!=NULL){ ?>
                     <a href="<?php echo $row_rsBlogs['url2']; ?>" ><?php echo $row_rsBlogs['tag2']; ?></a> 
                         <?php }?>
                      <?php if($row_rsBlogs['tag3']!="" && $row_rsBlogs['tag3']!=NULL){ ?>
                     <a href="<?php echo $row_rsBlogs['url3']; ?>" ><?php echo $row_rsBlogs['tag3']; ?></a> 
                       <?php }?>
                     
                    </div>
                </div>
            </div>
               <?php } while ($row_rsBlogs = mysql_fetch_assoc($rsBlogs)); ?>
                 
                      
                     
     	</div>
    </div>
    
    
    
    
</div>




<?php include('footer.php')?>
</body>
</html>
<?php
mysql_free_result($rsBlogs);
?>
