<!DOCTYPE html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <title>PLATAMÓVIL</title>
      
    <meta name="keywords" content="Palabras clave" />
    <meta name="description" content="Texto empresarial o descripción">
    <meta name="author" content="Diseño web: imaginamos.com">
    <meta name="robots" content="all" />
    <meta name="date" content="2012" />
    
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />  
   <link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script> 
    
     <!--JQUERY-->
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"> </script>
    <!-- detalles -->
    <link href="css/detalles.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script> 
    <!--header -->
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/header.js"> </script> 
    <!--footer -->
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--menu -->
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/menu.js"> </script> 

</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslink" href="#">Qué es Platamóvil</a><span class="arrow"></span><a class="migaslinkS" >Cuáles son las características de Platamóvil</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href=""></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cuáles son las</strong><br />características de Platamóvil?</div>
       </div>
       <div class="textosBox">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisl mauris, hendrerit ac sagittis tempus, egestas vitae felis. Mauris elementum leo eget lectus feugiat dapibus. Etiam justo nibh, mattis at porttitor eget, fermentum id eros. Maecenas ultrices auctor quam a mattis. Suspendisse adipiscing ante a enim tempus scelerisque. Pellentesque a sem vitae lectus tincidunt vestibulum vitae a diam. Curabitur semper vulputate dolor.<br /><br />

Et cursus diam porta vel. Cras id ipsum ac justo faucibus accumsan. Donec ullamcorper ipsum sit amet nisl posuere vehicula. Donec elit lorem, venenatis et pharetra a, mollis sodales lectus.<br /><br />

Nunc bibendum tristique faucibus. Maecenas euismod porta pulvinar. Curabitur pellentesque, lectus non mollis tincidunt, ipsum erat auctor velit, in aliquet orci magna ut orci. Aenean tempor leo sit amet massa congue eleifend. Vestibulum porta, dui non vestibulum adipiscing, erat quam pulvinar ligula, eu scelerisque nunc lectus ac neque. Vivamus feugiat ipsum bibendum ligula lobortis at feugiat orci pellentesque.<br /><br />

Suspendisse rutrum metus ac mi auctor tincidunt. Nunc tempus tempus elementum. Sed vitae arcu eget orci rutrum pellentesque. </div>
    </div>
	
  <div class="mainContetBoxRight">
    	<div class="imagenDetalles"><img src="imagenes/detalles/detalleImgen1.jpg" width="424" height="314" /></div>
        <div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">Caracteristicas_platamovil.pdf<br /><span>17MB</span></a>
        </div>
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
