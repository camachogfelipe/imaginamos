<?php include('header.php');

$contenido = selecContenido($_GET['id']);

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>KUEHNE - JOYEROS</title>
    
    <meta name="author" content="Gustavo Vera Gomez" />
    <meta name="Copyright" content="" />
    
    <meta name="DC.title" content=" " />
    <meta name="DC.subject" content=" " />
    <meta name="DC.creator" content="" />
    
    <link href="styles/all.css" rel="stylesheet" type="text/css" />
    <link href="styles/reset.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    
    
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/jquery.sudoSlider.js"></script>	
    <script type="text/javascript" src="scripts/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="scripts/maps.js"></script>    
    <script type="text/javascript">	$(function(){$('#datepicker').datepicker({inline: false});});</script>
		

		
  </head>

<body onLoad="initialize();">



<div class="container">

  
  <div class="home">    
    <div class="content_map">
      <div style="position:relative;" align="center">
        <!--slider home -->
		<div id="slider3">
		 <?php selectbannerTienda(); ?>
		</div>  
      </div>
      
      <div class="mapa">
      
        <div class="datos"><?php if($_SESSION['idioma'] == "en"){ echo $contenido->descripcion_en[0]; }else{ echo $contenido->descripcion_es[0]; } ?></div>
        <div class="cont_map">

  <iframe  style="position:absolute; left:0px; top:180px" width="324" height="278" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $contenido->link_cont[0]; ?>&amp;t=m&amp;z=14&amp;output=embed"></iframe>

</div>
      </div>
      
    </div>
      
  </div>
  
</div>	

<?php include('footer.php'); ?>

</body>
</html>
