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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslink" href="detalles_defensorConsumidor.php?v=<?php echo selecionOrigen();?>">Defensor del consumidor financiero</a><span class="arrow"></span><a class="migaslinkS" >Procedimiento para la atención de quejas o reclamos</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="javascript:history.back();"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft"  style="width:100%; ">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Procedimiento para la </strong><br />atención de quejas o reclamos</div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">En caso de tener alguna queja o reclamo frente a Mi Plata S.A. que usted quiera que sea analizada  
y resuelta por nuestro Defensor del Consumidor, deberá seguir este procedimiento:</span><br /><br />

Usted deberá presentar un documento que contenga: <br /><br />
<span class="destacado">- Sus datos personales: nombre y cédula.</span><br />
<span class="destacado">- La información de contacto: número teléfono celular, fijo, dirección de correspondencia y correo electrónico.</span><br />
<span class="destacado">- Descripción de los hechos, de la queja, reclamo o petición.</span><br />
<span class="destacado">- La solicitud específica de su queja, reclamo o petición. </span><br />
<span class="destacado">- El documento podrá ser remitido directamente al Defensor del Consumidor o podrá ser presentado en las oficinas de Mi Plata S.A. En este último caso, Mi Plata deberá dar traslado de la queja o reclamación al Defensor del Consumidor Financiero dentro de los tres días hábiles siguientes a la recepción de su documento. </span><br />
<span class="destacado">- Una vez recibida la queja o reclamo, el Defensor del Consumidor Financiero decidirá si es o no de su competencia, decisión que será comunicada tanto al consumidor financiero como a Mi Plata S.A.</span><br /> 
<span class="destacado">- Tenga en cuenta que el Defensor del Consumidor Financiero podrá solicitar a Mi Plata S.A. o a usted la información necesaria para decidir sobre la aceptación o no de la queja, reclamo o petición. </span><br />
<span class="destacado">- En el evento que usted no atienda la solicitud de información realizada por parte del Defensor del Consumidor Financiero, se entenderá desistida la queja. Dada esta situación posteriormente podrá presentar su queja con la información completa, la cual se entenderá presentada como si fuera la primera vez.</span><br />
<span class="destacado">- Admitida la queja o reclamo, el Defensor del Consumidor Financiero dará traslado de ella a la Compañía, a fin de reunir la información y presentar los argumentos que fundamenten su posición.</span><br />
<span class="destacado">- Mi Plata S.A. deberá dar respuesta al Defensor del Consumidor Financiero dentro de un término de ocho días hábiles, contados desde el día siguiente al que se haga el traslado, término que podrá ser ampliado a petición de Mi Plata S.A. y a juicio del Defensor del Consumidor Financiero, debiendo la entidad informar las razones de su demora.</span><br />

 </div>
    </div>
	
</div>

<?php include ('footer.php'); ?>

</body>
</html>
