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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Consultas en Internter</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Consultas en</strong><br />Internet</div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">Para realizar consultas en Internet usted debe ingresar al Portal WEB Platamóvil www.platamovil.co y digitar la información de documento de identificación y clave que quedaron registrados al momento de la activación.</span><br /><br />

Para acceder al Portal Web Platamóvil, el sistema valida toda la información que usted digita (documento y clave), en caso de error, el sistema le permitirá intentar de nuevo hasta que se completen tres intentos máximo, si supera este número de intentos errados, automáticamente el acceso al portal se bloqueará; para desbloquearlo, consulte el procedimiento de olvido de clave.<br /><br />
Para conocer la tarifa de esta transacción, consulte el listado de tarifas.<br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=3&t2=1'; ?> class="link">Operaciones, Límites y tarifas</a><br />

<span class="letraAzul">Siga estas recomendaciones de seguridad cada vez que ingrese al Portal Web Platamóvil.</span><br /><br />
- Al ingresar siempre digite en la barra de direcciones https://www.platamovil.co<br /><br />
- Ingrese desde un computador seguro, no use computadores públicos ni se conecte a redes públicas.<br /><br />
- Al ingresar verifique que la barra donde se observa la dirección esté sombreada de color verde y que aparezca un candado al lado derecho de la dirección o en la parte inferior de la pantalla.<br /><br />
- Mantenga su computador personal con un antivirus actualizado.<br /><br />
- Ignore los correos electrónicos en los que le ofrezcan premios o soliciten datos personales o financieros. Platamóvil nunca pide este tipo de información vía correo electrónico.<br /><br />
- Verifique que terceros no observen su clave o su imagen, al momento que se le solicita en el portal transaccional.<br /><br />
- Al terminar sus operaciones y/o consultas, no olvide hacer clic en el botón “quiero salir” que se encuentra ubicado en la parte superior derecha del portal.
- Por su seguridad, la sesión se cierra automáticamente después de un periodo de inactividad.<br /><br />


Conozca los procesos para realizar consultas:<br /><br />
<a href=<?php echo 'detalles_consultarSaldo.php?v=' . selecionOrigen(); ?> class="link">¿Cómo consultar su saldo, movimientos y extractos?</a><br />

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
