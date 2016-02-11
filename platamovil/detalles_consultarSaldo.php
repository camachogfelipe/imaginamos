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
    <!-- comercio -->
    <link href="css/detalles.css" rel="stylesheet" type="text/css">
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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Cómo consultar su saldo, movimientos y extractos?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cómo consultar saldo,</strong><br />movimientos y extractos?</div>
       </div>
       <div class="textosBox">
       <span class="titulo">¿Cómo consultar su saldo?</span><br /><br />

       Ingrese al Portal Web Platamóvil,  digite su tipo y número de identificación y clave de acceso. En el inicio está la opción de Resumen de Estado de Cuenta, donde aparece el número de la cuenta y saldo actual de la misma.<br />
<br />
<span class="titulo">¿Cómo consultar movimientos de su cuenta?</span><br /><br />
Ingrese al Portal Web Platamóvil, digite su tipo y número de identificación y clave de acceso. En el menú “Opciones de Mi Cuenta”, seleccione “Movimientos”, luego seleccione el rango de fechas que desea consultar. Aparecerán los movimientos de la cuenta realizados durante el periodo escogido, con opción de descargar el archivo o imprimirlo (se requiere que su computador le permita visualiza archivos en formato PDF).<br />
<br />
<span class="titulo">¿Cómo consultar los extractos de su cuenta?</span><br /><br />
Ingrese al Portal Web Platamóvil, digite su tipo y número de identificación y clave de acceso. En el menú “Opciones de Mi Cuenta”, seleccione “Extractos”, luego seleccione el rango de fechas que desea consultar. Aparecerá el extracto del periodo escogido, con opción de descargar el archivo o imprimirlo (se requiere que su computador le permita visualiza archivos en formato PDF).<br /><br />

Tenga en cuenta al realizar sus consultas en el portal transaccional:<br /><br />
<a href=<?php echo 'detalles_consultarInternet.php?v=' . selecionOrigen(); ?> class="link">Consultas en internet</a><br />

 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido8.png" width="424" height="394" /></div>
        <!--<div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">REGLAMENTO_SIMPLIFICADA_PLATAMÓVIL.pdf<br /><span>17MB</span></a>
        </div>-->
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
