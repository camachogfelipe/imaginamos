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
<link href="css/popup-actividades.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
<script type="text/javascript" src="js/galeria.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
</head>

<body>
<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>
<div class="main">
  <div class="actividades-titulo">actividades</div>
  <div id="page-wrap">
    <div id="tabs">
     <?php 
     $result3 = $obj->Actividades();
     ?> 
        <ul>
            
 <?php 
                        
                       $var = 1; 
                        for ($i = 0; $i < count($result3); $i++) {
               ?>
        <li><a href="#actividad-<?php echo $var; ?>"></a></li>
        
      
        
         <?php 
         $var++;
         }
                       
               ?>
        </ul>
        
      
        <?php 
                 
                     $var2 = 1;   
                        for ($l = 0; $l < count($result3); $l++) {
                            
                            if($var2 == 1){                                
                                $conclass = "ui-tabs-panel";
                            }else{                                
                                $conclass = "ui-tabs-panel ui-tabs-hide";
                            }
                            
                            
        ?>
      <div id="actividad-<?php echo $var2; ?>" class="<?php echo $conclass; ?>">  <div class="actividades-nombre"><a id="iden-<?php echo $result3[$l]['id_actividades']; ?>"><?php echo $result3[$l]['titulo_actividades']; ?></a></div>
        <div class="scroll-pane-2">
             <?php 
                        
                        $result4 = $obj->Contenido($result3[$l]['id_actividades']);
                        for ($o = 0; $o < count($result4); $o++) {
               ?>
            <div class="box-actividades">
            <div class="actividades-subtitulo"><?php echo $result4[$o]['titulo_contenido']; ?></div>
            <p><?php echo nl2br($result4[$o]['texto_contenido']); ?></p>
            </div>
            <?php 
                        }
            
            ?>
        </div>
        <div class="actividades-left"><img src="cms/modules/actividades/view/files/<?php echo $result3[$l]['imagen_actividades']; ?>" /></div>
        <div class="actividades-right">
          <div class="titulo"><?php echo $result3[$l]['titulo_actividades']; ?></div>
          <div class="subtitulo"><?php echo $result3[$l]['subtitulo_actividades']; ?></div>
          <div class="nombre"><?php echo $result3[$l]['subtitulo2_actividades']; ?></div>
          <div class="texto">
              <p><?php echo nl2br($result3[$l]['texto_actividades']); ?> </p>
          </div>
          <a class="vermas-actividades" id="inline" href="#actividad"></a> </div>
      </div>
        <?php 
                $var2++;
        }
        ?>
      
      
     
    </div>
  </div>
</div>

    
    
    
    
    
    
    
    
    
    <?php include("footer.php"); ?>
</body>
</html>
<?php 

     for ($k = 0; $k < count($result3); $k++) {

?>
<div class="popup-actividades" id="actividad">
  <div class="right">
    <div class="titulo"><?php echo $result3[$k]['titulo_contenido']; ?></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel tortor id massa egestas egestas. Sed eu neque in est scelerisque dapibus non in quam. Vivamus et urna elit, at semper sapien. Sed vitae rutrum odio. Ut sed nunc massa. Morbi cursus, odio sed malesuada fringilla, erat turpis sodales nunc, sit amet pharetra purus mi in magna. Cras tempor posuere diam, sed mattis ante rhoncus vel. Maecenas at orci nisi, eu fringilla tellus.</p>
    <p>Etiam ante nunc, fringilla quis suscipit ut, euismod eu tellus. Ut blandit, dolor eu lobortis hendrerit, erat eros semper elit, suscipit congue felis purus eu lorem. Ut aliquam orci eget est congue pellentesque. Phasellus pulvinar tempor porttitor. Integer vitae massa dolor.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel tortor id massa egestas egestas. Sed eu neque in est scelerisque dapibus non in quam. Vivamus et urna elit, at semper sapien. Sed vitae rutrum odio. Ut sed nunc massa. Morbi cursus, odio sed malesuada fringilla, erat turpis sodales nunc, sit amet pharetra purus mi in magna. Cras tempor posuere diam, sed mattis ante rhoncus vel. Maecenas at orci nisi, eu fringilla tellus.</p>
  </div>
  <div class="content">
    <div id="controls" class="controls"></div>
    <div class="slideshow-container">
      <div id="loading" class="loader"></div>
      <div id="slideshow" class="slideshow"></div>
    </div>
    <div id="caption" class="caption-container">
      <div class="photo-index"></div>
    </div>
  </div>
  <div class="navigation-container">
    <div id="thumbs" class="navigation">
      <ul class="thumbs noscript">
        <li><a class="thumb" name="leaf" href="imagenes/actividades02.jpg" title=""><img src="imagenes/actividades02.jpg" alt="" /></a></li>
        <li><a class="thumb" name="leaf" href="imagenes/actividades03.jpg" title=""><img src="imagenes/actividades03.jpg" alt="" /></a></li>
      </ul>
      <a class="pageLink next" href="#" title="Next Page"></a><a class="pageLink prev" href="#" title="Previous Page"></a></div>
  </div>
  <div style="clear: both;"></div>
</div>
<?php 

     }
?>
