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
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
</head>

<body>
<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>
<?php
$result = $obj->PintarAlmacen();
?>
<div class="main">
  <div class="almacen-titulo">Almacén</div>
   <div class="scroll-pane">
      <div class="box-almacen">
        <div class="left"><img src="imagenes/<?php echo $result[0]['almacen_image']; ?>"  /></div>
        <div class="right">
          <div class="titulo"><?php echo $result[0]['almacen_titulo']; ?></div>
          <div class="texto"><p><?php echo nl2br($result[0]['almacen_texto']); ?></p></div>
        </div>
     </div>
    <div class="box-almacen">
    <div class="left-2"> <div class="titulo"><?php echo $result[1]['almacen_titulo']; ?></div>
             <div class="texto"><p><?php echo nl2br($result[1]['almacen_texto']); ?></p></div></div>
        <div class="right-2">
         <img src="imagenes/<?php echo $result[1]['almacen_image']; ?>"  />
        </div>
   </div>
          <div class="box-almacen">
        <div class="left"><img src="imagenes/<?php echo $result[2]['almacen_image']; ?>"  /></div>
        <div class="right">
          <div class="titulo"><?php echo $result[2]['almacen_titulo']; ?></div>
             <div class="texto"><p><?php echo nl2br($result[2]['almacen_texto']); ?></p></div>
        </div>
     </div>
    <div class="box-almacen">
    <div class="left-2"> <div class="titulo"><?php echo $result[3]['almacen_titulo']; ?></div>
             <div class="texto"><p><?php echo nl2br($result[3]['almacen_texto']); ?></p></div></div>
        <div class="right-2">
         <img src="imagenes/<?php echo nl2br($result[3]['almacen_image']); ?>"  />
        </div>
   </div>
        <div class="box-almacen">
        <div class="left"><img src="imagenes/<?php echo nl2br($result[4]['almacen_image']); ?>"  /></div>
        <div class="right">
          <div class="titulo"><?php echo $result[4]['almacen_titulo']; ?></div>
             <div class="texto"><p><?php echo nl2br($result[4]['almacen_texto']); ?></p></div>
        </div>
     </div>
       
   </div>
   
</div>
<?php include("footer.php"); ?>
</body>
</html>
