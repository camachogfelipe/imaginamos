<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();
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
<script type="text/javascript" src="js/jquery.over.js"></script>
<script type="text/javascript" src="js/over.js"></script>
<script type="text/javascript" src="js/jquery.paginacion.js"></script>
<script type="text/javascript" src="js/paginacion.js"></script>
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>

</head>

<body>
<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>
<div class="main">
  <div class="galeria-titulo">galería</div>
  <ul class="paginacion">
       <?php 
                        
                        $result3 = $obj->PintarGaleria();
                        for ($l = 0; $l < count($result3); $l++) {
                        ?>
    <li>
      <div class="categoria-galeria"><a href="galeria.php?id=<?php echo $result3[$l]['id_galeria']; ?>" target="_self" class="mosaic-overlay"> </a> <a href="#" target="_self" class="imagen"><img src="imagenes/<?php echo $result3[$l]['imagen_galeria']; ?>" /></a>
        <div class="titulo"><?php echo $result3[$l]['titulo_galeria']; ?></div>
      </div>
    </li>
      <?php }?>
    


  


  </ul>
</div>
<?php include("footer.php"); ?>
</body>
</html>
