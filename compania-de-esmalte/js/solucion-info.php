<?php 
//Validamos y asignamos id para buscar el producto.
if(!isset($_GET['idp'])){
    header('Location: index.php');
    exit();
}else{
    $idp=$_GET['idp'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GRUPO NORTH</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/north.css" rel="stylesheet" />

</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php");
  //Prog: Héctor Fernández
  // Detalles del producto Tablas: productos e item Productos.
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  $details = DbHandler::GetAll("SELECT * FROM productos WHERE id=$idp");
  $contador = count($details);
  if($contador==0){ header('Location: index.php'); exit();}
  ?>
  <div class="info-general">
  	<div class="con-info-general">
    	<div class="con-info-sol">
      	<img src="imagenes/titulos/home-1.png" width="500" height="100" alt="">
      	<!--<h2>Nuestras</h2>
      	<h1>Soluciones</h1>-->
        <div class="bt-back"><a href="<?php
					echo "?seccion=soluciones-1";
					if(isset($_GET['sol'])) echo "&sol=".(int)$_GET['sol'];
					if(isset($_GET['cat'])) echo "&cat=".(int)$_GET['cat'];
					if(isset($_GET['scat'])) echo "&scat=".(int)$_GET['scat'];
          if(isset($_GET['pag'])) echo "&pag=".(int)$_GET['pag'];
        ?>"><span></span><p>Volver</p></a></div>
        <div class="con-info-d1">
        	<div class="img-d1">
                    <img src="img/productos/<?php echo str_replace('original','redimension',$details[0]['imagen2']); ?>" width="410" height="292" alt="">
            <div class="img-d1-bg"><img src="imagenes/info-sol-d1-bg.png" width="515" height="445" alt=""></div>
          </div>
          <div class="tx-d1">
          	<div class="scroll-sol">
            	<h1><?php echo utf8_encode($details[0]['nombre']); ?></h1>
              <h2>Ref: <?php echo utf8_encode($details[0]['referencia']); ?></h2>
              <p><?php echo utf8_encode(nl2br($details[0]['texto_descripcion'])); ?></p>
            </div>
          </div>
        </div>
        <div class="con-info-d2">
        	<div class="img-d2">
            <img src="img/productos/<?php echo str_replace('original','redimension',$details[0]['imagen3']); ?>" width="288" height="362" alt="">
            <div class="img-d2-bg"><img src="imagenes/info-sol-d2-bg.png" width="460" height="452" alt=""></div>
            <div class="img-aceite"><img src="imagenes/aceite.png" width="126" height="156" alt=""></div>
          </div>
          <div class="tx-d2">
          	<div class="scroll-sol">
            	<h1>Especificaciones</h1>
              <ul>
                  <?php $especificaciones = DbHandler::GetAll("SELECT * FROM items_productos WHERE productos_id = $idp"); 
                  $contadorEsp = count($especificaciones);
                  for($i=0; $i<$contadorEsp; $i++):
                      ?><li><p><strong><?php echo utf8_encode($especificaciones[$i]['titulo']); ?>:</strong> <?php echo utf8_encode($especificaciones[$i]['texto_contenido']); ?></p></li><?php
                  endfor;
                  ?>
              </ul>
            	<p><?php echo utf8_encode(nl2br($details[0]['texto_descripcion2'])); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>

	<?php include("footer.php"); ?>
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jInfo.js"></script>

</body>
</html>