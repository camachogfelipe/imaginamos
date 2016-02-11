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
    <script type="text/javascript" src="scripts/maps.js"></script>    
    <script type="text/javascript">	$(function(){$('#datepicker').datepicker({inline: false});});</script>
		

		
  </head>

<body onLoad="initialize();">



<div class="container">
  
  <div class="home">    
    <div class="content_map servi">
      <?php if($_SESSION['idioma'] == "en"){ echo $contenido->descripcion_en[0]; }else{ echo $contenido->descripcion_es[0]; } ?>
    </div>
  </div>
  
  
<?php include('footer.php'); ?>

</div>	

	





</body>
</html>
