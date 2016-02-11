<?php require_once('class/class_pintar.php');
$obj = new Pintar();
$result = $obj->PintarcatarNosotros();
$resul2 = $obj->PintarcatarNosotrosBanner();
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
      	<h6>NOSOTROS</h6>
        <div class="banner-empresa">
        	<div id="page-nosotros"> 
            <div class="nosotros-wrap">
              <ul id="slider-nosotros" class="multiple">
                
                  <?php 
                
                //for ($index = 0; $index < count($resul2); $index++) {
                ?>
                 <li> <img src="cms/modules/banner_nosotros/files/big/<?php echo $resul2[2]['bannernosotros_image'] ?>" width="976" height="350" alt="" /></li>
                 <li> <img src="cms/modules/banner_nosotros/files/big/<?php echo $resul2[0]['bannernosotros_image'] ?>" width="976" height="350" alt="" /></li>
                  <li> <img src="cms/modules/banner_nosotros/files/big/<?php echo $resul2[1]['bannernosotros_image'] ?>" width="976" height="350" alt="" /></li>
                
                <?php 
                
                //}
                
                ?>
                
              </ul>
            </div>
          </div>
        	<div class="banner-nosotros-sombra"></div>
        </div>
        <a id="valores-1"></a>
        <div class="fila-nosotros">
            <a style="padding-top: 358px" name="Ancla" id="a"></a>
        	<div class="nosotros-item">
                    <h3><?php echo utf8_encode($result[0]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            <p><?php echo nl2br(utf8_encode($result[0]['nosotros_article']))?></p>	
            </div>
          </div>
          <div class="nosotros-item">
          	<h3><?php echo utf8_encode($result[1]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            <p><?php echo nl2br(utf8_encode($result[1]['nosotros_article']))?></p>	
            </div>
          </div>
          <div class="nosotros-item">
          	<h3><?php echo utf8_encode($result[2]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            	<p><?php echo nl2br(utf8_encode($result[2]['nosotros_article']))?></p></div>
          </div>
        </div>
        <a id="valores-2"></a>
         
        <div class="fila-nosotros">
           <a style="padding-top: 19px" name="Ancla1" id="a"></a>
        	<div class="nosotros-item">
          	<h3><?php echo utf8_encode($result[3]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            <p><?php echo nl2br(utf8_encode($result[3]['nosotros_article']))?></p>	
            </div>
          </div>
          <div class="nosotros-item">
          	<h3><?php echo utf8_encode($result[4]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            <p><?php echo nl2br(utf8_encode($result[4]['nosotros_article']))?></p>	
            </div>
          </div>
          <div class="nosotros-item">
          	<h3><?php echo utf8_encode($result[5]['nosotros_title'])?></h3>
            <h4></h4>
            <div class="scroll-nosotros">
            <p><?php echo nl2br(utf8_encode($result[5]['nosotros_article']))?></p>	
            </div>
          </div>
        </div>
      </div>
  	</div>
  </div>
  
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="js/jNosotros.js">
  	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('#slider-nosotros').bxSlider({displaySlideQty:1, moveSlideQty:1, pager:true, auto:true, pause:6000, easing: 'easeInQuart' });
		$('.scroll-nosotros').jScrollPane();
		$('#slider-footer').bxSlider({displaySlideQty:1, moveSlideQty:1, auto:true, pause:6000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});
  </script>


</body>
</html>