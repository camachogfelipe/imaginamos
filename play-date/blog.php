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
  <div class="box-blog amarillo">
    <?php 
    $blog = $obj->PintarBlog2($_GET['id']);
    ?>
    <div class="titulo"><?php echo $blog[0]['title_blog']?></div>
   
    <div class="texto-2"><p><?php echo $blog[0]['texto_blog']?></p>
    
    </div>
  </div>
  
  
  <?php 
                        
  $result3 = $obj->PintarComentarios($_GET['id']);
  for ($l = 0; $l < count($result3); $l++) {
      ?>
  <div class="box-blog amarillo">
    <div class="usuario"><?php echo $result3[$l]['nombre_comentario']; ?></div>
    <div class="fecha"><?php echo $result3[$l]['fecha_comentario']; ?></div>
    <div class="texto"><p><?php echo nl2br($result3[$l]['texto_comentario']); ?></p></div>
  </div>
  
  <?php } ?>
  <form action="" method="POST" id="">
   <textarea name="coment" cols="" rows="" onblur="if(this.value=='') this.value='Participa';" onfocus="if(this.value=='Participa') this.value='';" class="blog">Participa</textarea>
   <input name="" type="submit" class="publicar" value="Publicar" />
   <input type="hidden" name="grabar" value="si"/>
  <?php
                //print_r($_POST);exit;
                if (isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
                       $obj->Guardar($_GET['id']);		
                  //print_r($_POST);
                    
                  }
                ?>
</form>
</div>

<?php include("footer.php"); ?>
</body>
</html>
<?php 

}else{
    
    echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='blog-loguin.php';
	</script>
	";
}
?>