<?php require_once('class/class_pintar.php'); 
$obj2 = new Pintar();
$result = $obj2->Pintarnovedad();

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
      	<a id="novedad"></a>
      	<h6>NOVEDADES</h6>
        <div class="con-info-dina">
        	
            <div class="novedad-<?php echo utf8_encode($result[0]['novedad_title']) ?> novedad-big" style="display:block;">
                <h3><?php echo utf8_encode($result[0]['novedad_title'])?></h3>
            <h4><?php 
            
            $pizza = $result[0]['novedad_fecha'];
            $piece = explode("-",$pizza);
            echo $piece[2]."/".$piece[1]."/".$piece[0]; 
           
             ?></h4>
          	<a class="iframe" href="novedad-info.php?id=<?php echo $result[0]['novedad_id'] ?>"><img src="cms/modules/novedades/files/big/<?php echo $result[0]['novedad_image']?>" width="576" height="400" alt="" /></a>
            <p><?php //echo $result[0]['novedad_texto'];
             if(strlen($result[0]['novedad_texto']) > 720){$content = html_entity_decode($result[0]['novedad_texto']); $content = substr($content,0,720); echo utf8_encode($content)."...";} else{ echo html_entity_decode(utf8_encode($result[0]['novedad_texto']));}
            
            ?></p>
            <a class="iframe" href="novedad-info.php?id=<?php echo $result[0]['novedad_id'] ?>"><div class="bt-mas-novedad">Ver más</div></a>
          </div>
            
          
            <?php 
            
             
            
            for ($a = 0; $a < count($result); $a++){
            ?>
            
            <div class="novedad-<?php echo $result[$a]['novedad_id'] ?> novedad-big">
                <h3><?php echo utf8_encode($result[$a]['novedad_title'])?></h3>
            <h4><?php 
            $pizza = $result[$a]['novedad_fecha'];
            $piece = explode("-",$pizza);
            echo $piece[2]."/".$piece[1]."/".$piece[0]; 
            
            ?></h4> 
          	<a class="iframe" href="novedad-info.php?id=<?php echo $result[$a]['novedad_id'] ?>"><img src="cms/modules/novedades/files/big/<?php echo $result[$a]['novedad_image']?>" width="576" height="400" alt="" /></a>
                <p> <?php 
                
              
                if(strlen($result[$a]['novedad_texto']) > 720){$content = html_entity_decode($result[$a]['novedad_texto']); $content = substr($content,0,720); echo utf8_encode($content)."...";} else{ echo html_entity_decode(utf8_encode($result[$a]['novedad_texto']));}
            
                
                ?></p>
            <a class="iframe" href="novedad-info.php?id=<?php echo $result[$a]['novedad_id'] ?>"><div class="bt-mas-novedad">Ver más</div></a>
          </div>
            <?php 
            }
            ?>
            
           
        </div>
        <div class="con-item-dina">
        	<div id="paging_site" class="container">
            <div class="page_navigation"></div>
            <ul class="content_paging">
                <li><?php 
               $conta = 1;
                for ($i = 0; $i < count($result); $i++) {
    
                        ?> 
                <div class="item-producto">
                  
                    <a href="#novedad<?php echo $result[$i]['novedad_id'] ?>" data-id="novedad-<?php echo $result[$i]['novedad_id'];?>" class="mosaic-block bar item-novedad activo" title="Clic para ver">
                    <div class="mosaic-overlay">
                      <div class="details">
                          <p class="t-mosaic"><?php echo utf8_encode($result[$i]['novedad_title'])?></p>
                          <p class="p-mosaic"><?php echo nl2br(utf8_encode($result[$i]['novedad_descript']))?></p>
                        
                      </div>
                    </div>
                    <div class="mosaic-backdrop"><img src="cms/modules/novedades/files/middle/<?php echo $result[$i]['novedad_image']?>" width="224" height="200" alt="" /></div>
                  </a>
                </div>
                    
                <?php
                if($conta == 4){
                    ?>
                </li><li>

                    <?php
                    $conta = 0;
                }
                $conta++;
                } ?>
              </li>
                
              
            </ul>
            <div class="linea-paginador"></div>
            <div class="page_navigation"></div>
        	</div>
        </div>
      </div>
  	</div>
  </div>
  
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.pajinate.js"></script>
	<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
  <script type="text/javascript" src="js/jquery.colorbox.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jNovedades.js"></script>


</body>
</html>
<?php
function palabraComplete($texto) {
                $textoTemp = explode(" ", $texto);
                unset($textoTemp[(count($textoTemp) - 1)]);
                return implode(" ", $textoTemp);
            }
?>