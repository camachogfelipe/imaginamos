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
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script> 

</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Qué pasa si olvido alguna clave?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Qué pasa si</strong><br /> olvido alguna clave?</div>
       </div>
       <div class="textosBox">Si olvida la clave del celular: Llame gratis a la Línea Platamóvil #269 únicamente desde el celular registrado. El Ejecutivo de la Línea Platamóvil que lo atienda, realizará algunas preguntas para validar su identidad. Seguido de esto, el Ejecutivo transferirá la llamada al sistema automático que le solicitará registrar una clave nueva.<br /><br />
Si olvida la clave de acceso al Portal WEB: Ingrese como lo hace normalmente, digite su número de identificación y haga clic donde dice "olvidó su clave?". El sistema le solicitará que responda la pregunta de seguridad que registró cuando ingresó por primera vez, una vez la responda, haga clic en el botón "enviar"; en seguida el sistema le solicitará que seleccione su imagen de seguridad. Si la información es correcta, el sistema le informará que una nueva contraseña ha sido enviada al correo electrónico registrado. Una vez reciba el correo, realice de nuevo el procedimiento de activación del Portal WEB.<br /><br />
Para conocer la tarifa de esta transacción, consulte:<br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=3&t2=1'; ?> class="link">Operaciones, Límites y tarifas</a><br />


 </div>
    </div>
	
  <div class="mainContetBoxRight">
    	<div class="imagenDetalles"><img src="imagenes/detalles/detalleImagen4.jpg" width="424" height="314" /></div>
        <!--<div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">REGLAMENTO_SIMPLIFICADA_PLATAMÓVIL.pdf<br /><span>17MB</span></a>
        </div>-->
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
