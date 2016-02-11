<?php 
require_once('class/class_pintar.php');
$obj = new Pintar();
$result = $obj->PintarcatarBanner();
$result2 = $obj->PintarcatarDestacado()
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
<link type="text/css" href="css/navegador.css" rel="stylesheet" />

</head>
<body>


	<!--<div id="loader"><div id="progress"></div></div>-->


	<div class="con-general">
  	<div class="margen-general">
    
    
      <?php include("header.php"); ?>
      
      
      <div id="banner-home">
        <ul id="banner-tecnosalud">
          <?php 
          
                for ($i = 0; $i < count($result); $i++) {
                    
                
          ?>
            <li>
          	<a href="<?php echo $result[$i]["url"];?>">
              <img src="cms/modules/home/files/big/<?php echo $result[$i]['news_image']?>" width="972" height="330" alt=""  />
                  <div class="slide-titulo-<?php echo $result[$i]['news_id']?>"><?php echo utf8_encode(nl2br($result[$i]['news_title']))?></div>
              <div class="slide-producto"><img src="cms/modules/home/files/big/<?php echo $result[$i]['new_image2']?>" width="145" height="280" alt="" /></div>
              <div class="slide-texto"><?php echo utf8_encode($result[$i]['news_article'])?></div>
              <div class="slide-opa"></div>
            </a>
          </li>
            <?php 
            
            }
            ?>
          
        </ul>
        <div class="banner-sombra"></div>
      </div>
      <div class="destacados-home">
        <div class="destacado-izq">
          <div class="icono-destacado"><img src="cms/modules/destacados/files/big/<?php echo $result2[0]['destacados_image_logo']?>" width="40" height="40" alt="" /></div>
          <p class="t-destacado"><?php 
          
        $pizza = utf8_encode($result2[0]['destacados_title_logo']);
         $piecess = explode(" ", $pizza);
          echo '<strong>'.$piecess[0].'</strong>';
          for($i = 1; $i < sizeof($piecess);$i++){   
            echo $piecess[$i].'&nbsp;';
          }
          ?></p>
          
          
          
          
          <div class="textos-destacado">
            <div class="scroll-destacados">
              <h4><?php echo $result2[0]['destacados_title_texto']?></h4>
              <p><?php 
				$txt = utf8_encode($result2[0]['destacados_texto_contenido']);
				$txt = nl2br($txt);				
				echo $txt; 
			  
			  ?></p>
              </div>
          </div>
          <div class="imagen-destacado destacado-1"><img src="cms/modules/destacados/files/big/<?php echo $result2[0]['destacados_image_fondo']?>" width="212" height="160" alt="" /></div>
          <div class="destacado-sombra"></div>
        </div>
        <div class="destacado-der">
          <div class="icono-destacado"><img src="cms/modules/destacados/files/big/<?php echo $result2[1]['destacados_image_logo']?>" width="40" height="40" alt="" /></div>
          <p class="t-destacado"><?php 
          
          $pizza = $result2[1]['destacados_title_logo'];
          $pieces = explode(" ", $pizza);
          echo '<strong>'.$pieces[0].'</strong>';
          for($j = 1; $j < sizeof($pieces);$j++){   
            echo $pieces[$j].'&nbsp;';
          }
          ?></p>
          <div class="textos-destacado">
            <div class="scroll-destacados">
              <h4><?php echo $result2[1]['destacados_title_texto']?></h4>
            <p><?php 
				$txt2 = utf8_encode($result2[1]['destacados_texto_contenido']);
				$txt2 = nl2br($txt2);				
				echo $txt2;			
			
			?></p>  
            </div>
          </div>
          <div class="imagen-destacado destacado-2"><img src="cms/modules/destacados/files/big/<?php echo $result2[1]['destacados_image_fondo']?>" width="212" height="160" alt="" /></div>
          <div class="destacado-sombra"></div>
        </div>
      </div>
  	</div>
  </div>
          
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.zaccordion.min.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jHome.js"></script>
  <script type="text/javascript" src="js/navegador.js"></script>


</body>
</html>