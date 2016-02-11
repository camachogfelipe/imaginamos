<?php require_once('class/class_pintar.php'); 
$obj = new Pintar();
$result = $obj->PintarProductos($_GET['id']);
$result4 = $obj->PintarProductopadre($_GET['id'])
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
          <a href="productos-info.php?id=<?php echo $result4[0]['id_padre']?>">Sub-categoría</a>
          <a class="miga-arrow">></a>
          <a class="miga-activa">Producto</a>
        </div>
        <div id="paging_site" class="container">
        	<div class="page_navigation"></div>
          <ul class="content_paging">
            <li>
                <?php 
                $conta = 1;
                for ($index = 0; $index < count($result); $index++) {
                ?>
              <div class="item-producto">
                <a href="producto-detalle.php?id=<?php echo $result[$index]['productos_id']?>" class="mosaic-block bar">
                  <div class="mosaic-overlay">
                    <div class="details">
                      <p class="t-mosaic"><?php echo utf8_encode($result[$index]['productos_title']) ?></p>
                      <p class="p-mosaic"><?php echo nl2br(utf8_encode($result[$index]['productos_descript'])) ?></p>
                    </div>
                  </div>
                  <?php $result2 = $obj->PintarProductos_pics($result[$index]['productos_id']); 
                  if($result2 != 0){
                         for ($j = 0; $j < count($result2); $j++) {
                  ?>
                    <div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?php echo $result2[$j]['productos_pics_path'] ?>" width="224" height="200" alt="<?php echo $result2[$j]['productos_pics_id'] ?>" /></div>
                <?php 
                            }
                  }
                ?>
                </a>
              </div>
               <?php
                if($conta == 4){
                    if($result[$index+1]['productos_id']==""){ ?>
                            </li>
                        <?php }else{ ?>
                              </li><li>  
                        <?php } ?>
                
             
                
               <?php
               $conta = 0;
               
               }
               $conta++;
               }?>  
              
          </ul>
          <div class="linea-paginador"></div>
       	 	<div class="page_navigation"></div>
        </div>
      </div>
  	</div>
  </div>
          
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
 	<script type="text/javascript" src="js/jquery.pajinate.js"></script> 
	<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jProductos.js"></script>


</body>
</html>