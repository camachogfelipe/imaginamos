<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();
if (isset($_SESSION["usuario"])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Play Date</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="css/playdate.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
</head>

<body>
<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>
<div class="main">
  <div class="blog-titulo">blog</div>
  <?php
   $result2 = $obj->PintarBlog();
   for ($l = 0; $l < count($result2); $l++) {
  ?>
  <div class="box-blog amarillo">
    <div class="titulo"><?php echo $result2[$l]['title_blog']; ?></div>
   
    <div class="texto-2"><p><?php echo $result2[$l]['texto_blog']; ?></p>
    <a class="vermas-blog" href="blog.php?id=<?php echo $result2[$l]['id_blog']; ?>"></a>
    </div>
  </div>
  <?php }?>
   


    
</div>

<?php include("footer.php"); ?>
</body>
</html>
<?php }else{
    
    
    echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='blog-loguin.php';
	</script>
	";
}
    
    ?>