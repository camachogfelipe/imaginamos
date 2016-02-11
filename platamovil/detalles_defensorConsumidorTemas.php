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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslink" href="detalles_defensorConsumidor.php?v=<?php echo selecionOrigen();?>">Defensor del consumidor financiero</a><span class="arrow"></span><a class="migaslinkS" >Temas en los que no interviene el defensor</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="javascript:history.back();"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Temas en los que no </strong><br />interviene el defensor del consumidor</div>
       </div>
       <div class="textosBox">
       
       <span class="destacado">- Los que no estén directamente relacionados con las operaciones autorizadas a Mi Plata S.A.</span><br />

<span class="destacado">- Los referentes al vínculo laboral entre Mi Plata S.A. y sus empleados o contratistas.</span><br />
<span class="destacado">- Los que se refieren a cuestiones que se encuentren en trámite judicial o arbitral o que hayan sido resueltas en estas vías.</span><br />
<span class="destacado">- Aquellos que correspondan a la decisión sobre la prestación de un servicio o producto.</span><br />
<span class="destacado">- Los que se refieran a hechos sucedidos con tres (3) años o más de anterioridad a la fecha de presentación de la solicitud ante el Defensor.</span><br />
<span class="destacado">- Los que tengan por objeto los mismos hechos y afecten a las mismas partes, cuando hayan sido objeto de decisión previa por parte del Defensor.</span><br />
<span class="destacado">- Aquéllos cuya cuantía sumados todos los conceptos, supere los cien (100) salarios mínimos legales mensuales vigentes al momento de su presentación.</span><br />
<span class="destacado">- Las demás que definan las normas o el Gobierno Nacional. </span><br /><br>

<span class="letraAzul">Si después de iniciado el trámite de la solicitud, el Defensor del Consumidor Financiero tiene conocimiento que la solicitud no es de su competencia, dará por terminada su actuación, comunicando inmediatamente su decisión a Mi Plata S.A. y al consumidor financiero.</span> <br /><br />

 </div>
    </div>

</div>

<?php include ('footer.php'); ?>

</body>
</html>
