<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Industrias Metalurgicas Inmetal LTDA</title>
    <meta name="viewport" content="width=1184" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Keywords" lang="es" content="" />
    <meta name="Description" lang="es" content="" />
    <meta name="copyright" content="imaginamos.com" />
    <meta name="date" content="2012" />
    <meta name="author" content="diseño web: imaginamos.com" />
    <meta name="robots" content="All" />
    <link href="css/css_home.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="css/mosaic.css" type="text/css" media="screen" />-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
				$('.fade').mosaic();
      });
    </script>
  </head>
  
  <body>
  
  <div class="con-fondo-home">
  
    <div class="wrapper">   
    
      <div class="menu_home"></div><!--Menu fondo-->
    	<ul id="navi-home">
        <a href="index.php?seccion=index"><li>HOME</li></a>
        <a href="index.php?seccion=quienessomos"><li>QUIENES SOMOS</li></a>
        <a href="index.php?seccion=industrias"><li>INDUSTRIAS</li></a>
        <a href="index.php?seccion=contactenos"><li>CONT&Aacute;CTENOS</li></a><!--./index.php?seccion=-->
      </ul>
    <?php
        	$primer = DbHandler::GetAll("SELECT * FROM cms_home");
        ?>
       
      <div class="logo_home"><a href="./index.php" target="_self" ><img src="images/logo_home.png" width="600" height="285" /></a></div>

      <div class="mosaic-block fade destacado-1">
      	<a href="<?php echo $primer[1]['link_home']?>"><div class="link-destacado"></div></a>
        <div class="mosaic-overlay">
          <div class="details">
            <h4><?php echo utf8_encode($primer[1]['titulo_home'])?></h4>
            <p><?php echo utf8_encode($primer[1]['subtitulo_home'])?></p>
            <div class="destacado_mas"></div>
          </div>
          <img src="images/<?php echo $primer[1]['imagen_home']?>"/>
        </div>
        <div class="mosaic-backdrop"><img src="images/<?php echo $primer[1]['imagenbn_home']?>"/></div>
      </div>
      
      
      
      
      <div class="mosaic-block fade destacado-2">
      	<a href="<?php echo $primer[2]['link_home']?>"><div class="link-destacado"></div></a>
        <div class="mosaic-overlay">
          <div class="details">
            <h4><?php echo utf8_encode($primer[2]['titulo_home'])?></h4>
            <p><?php echo utf8_encode($primer[2]['subtitulo_home'])?></p>
            <div class="destacado_mas"></div>
          </div>
          <img src="images/<?php echo $primer[2]['imagen_home']?>"/>
        </div>
        <div class="mosaic-backdrop"><img src="images/<?php echo $primer[2]['imagenbn_home']?>"/></div>
      </div>
      
      <div class="mosaic-block fade destacado-3">
      	<a href="<?php echo $primer[3]['link_home']?>"><div class="link-destacado"></div></a>
        <div class="mosaic-overlay">
          <div class="details">
            <h4><?php echo utf8_encode($primer[3]['titulo_home'])?></h4>
            <p><?php echo utf8_encode($primer[3]['subtitulo_home'])?></p>
            <div class="destacado_mas"></div>
          </div>
          <img src="images/<?php echo $primer[3]['imagen_home']?>"/>
        </div>
        <div class="mosaic-backdrop"><img src="images/<?php echo $primer[3]['imagenbn_home']?>"/></div>
      </div>
      
      <div class="mosaic-block fade destacado-4">
      	<a href="<?php echo $primer[4]['link_home']?>"><div class="link-destacado"></div></a>
        <div class="mosaic-overlay">
          <div class="details">
            <h4><?php echo utf8_encode($primer[4]['titulo_home'])?></h4>
            <p><?php echo utf8_encode($primer[4]['subtitulo_home'])?></p>
            <div class="destacado_mas"></div>
          </div>
          <img src="images/<?php echo $primer[4]['imagen_home']?>"/>
        </div>
        <div class="mosaic-backdrop"><img src="images/<?php echo $primer[4]['imagenbn_home']?>"/></div>
      </div>

      <div class="social_home"><img src="images/social_home.png" width="67" height="32" usemap="#Map" border="0" />
        <map name="Map" id="Map">
          <area shape="rect" coords="1,5,32,29" href="http://www.linkedin.com/company/2938725/" target="_self" />
          <area shape="rect" coords="37,2,65,32" href="https://www.facebook.com/inmetalltda/" target="_self" />
        </map>
      </div>

      <div class="clear"></div>
      <?php
       $home = DbHandler::GetAll("SELECT * FROM cms_home ORDER BY idcms_home ASC");
      ?>
      <div class="slogan"><?= utf8_encode(nl2br($home[0]["titulo_home"]))?></div>

    </div>
    
    </div>
    
 
    

    <div class="footer_home">
      <div class="footer_txt"> <strong>Direcci&oacute;n:</strong> Calle14b No 123 - 41 <strong>Tel:</strong> +571-4189320 <strong>Fax:</strong> +571 4189320 <strong>Correo:</strong> comercial@inmetal.co 
        <span class="negrilla">BOGOT&Aacute; DC - COLOMBIA</span>
      </div>
      <div class="copy"> © 2012 INMETAL LTDA - Todos los derechos reservados</div>
      <div class="footer-autor"><span id="ahorranito2"></span><a href="http://www.imaginamos.com" target="_new">Dise&ntilde;o Web: </a><a href="http://www.imaginamos.com" target="_new">imagin<span>a</span>mos.com</a></div>
    </div>

  </body>
</html>