<?php require_once('class/class_pintar.php'); 
$obj = new Pintar();
$result = $obj->PintarProductos_pics($_GET['id']);
$result2 = $obj->PintarProductos2($_GET['id']);
$result3 = $obj->Pintarcatalogo_pics2sebas($_GET['id']);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>.: TECNOSALUD :.</title>
<meta name="viewport" content="width=1008, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/tecnosalud.css" rel="stylesheet" />

</head>
<body>


	<!--<div id="loader"><div id="progress"></div></div>-->


	<div class="con-general">
  	<div class="margen-general">
    
    
      <?php include("header.php"); ?>
      
      
      <div class="info-auto">
      	<h6>PRODUCTOS</h6>
        <div class="miga-pan">
        	<a href="productos.php">Categoría</a>
          <a class="miga-arrow">></a>
          <a href="productos-info.php">Sub-categoría</a>
          <a class="miga-arrow">></a>
          <a href="producto.php?id=<?php echo$result2[0]['id_subcategoria']?>">Producto</a>
          <a class="miga-arrow">></a>
          <a class="miga-activa">Detalle</a>
        </div>
        
        <div class="imagen-producto">
        	
            <a class="album" href="cms/modules/productos/files/small/<?php echo $result3[0]['productos_pics_path']?>" title="<?php echo $result2[0]['productos_title'];?>">
          	
                
                <img src="cms/modules/productos/files/small/<?php echo $result[0]['productos_pics_path'] ?>" width="375" height="350" alt="" />
            <div class="agrandar"></div>
          </a>
          <div class="imagenes-album">
          	<?php
              $result4 = $obj->Pintarcatalogo_picssebas($_GET['id']);
              if($result4 != 0){
                  for ($j = 2; $j < count($result4); $j++){
              ?>
              <a class="album" href="cms/modules/productos/files/small/<?php echo $result4[$j]['productos_pics_path'] ?>" title="Galería del producto"></a>
            <?php 
                  }
            
                }
            ?>
             
          </div>
        </div>
        <div class="texto-producto">
        	<div class="scroll-producto">
          	<h3><?php echo $result2[0]['productos_title'];?></h3>
                <h4>Ref:<?php echo $result2[0]['productos_referencia']?></h4>
            <p>
                <?php 
             echo utf8_encode(nl2br($result2[0]['productos_texto']));
            
            ?></p>
          	</div>
        </div>
      </div>
  	</div>
  </div>
          
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.colorbox.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jInfo.js"></script>


</body>
</html>