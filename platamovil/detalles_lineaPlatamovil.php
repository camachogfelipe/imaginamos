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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php if (selecionOrigen()== 'index'){ echo 'Home';}else{echo  ucwords(selecionOrigen());} ; ?></a><span class="arrow"></span><a class="migaslinkS" >Línea Platamóvil</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Línea Platamóvil</strong><br />#269</div>
       </div>
       <div class="textosBox">
       <span class="destacado">Para comunicarse marque desde su celular al <strong>#269</strong>, desde un teléfono fijo en Bogotá al <strong>743 1810</strong> o desde un fijo en otra ciudad al <strong>01-8000-975-282</strong>.</span>
<br />
       
       <span class="letraAzul">La <strong>Línea Platamóvil</strong> es un número de atención telefónica personalizado donde lo atenderemos para conocer de primera mano todas sus inquietudes.<br />
<br />



El horario de atención de la Línea Platamóvil es de <strong>lunes a viernes de 7:00 a.m. a 8:00 p.m. y los sábados de 8:00 a.m. a 1:00 p.m.</strong> <br />
<br />

Comunicarse con la Línea Platamóvil no tiene ningún costo, es totalmente gratis. Si se comunica desde un teléfono fijo, el operador de telefonía sólo le cobrará el valor de la llamada local.</span>

 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido5.png" width="424" height="394" /></div>
        <!--<div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">REGLAMENTO_SIMPLIFICADA_PLATAMÓVIL.pdf<br /><span>17MB</span></a>
        </div>-->
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
