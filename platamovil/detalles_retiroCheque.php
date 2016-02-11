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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Retiro en Cheque</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Retiro </strong><br /> en Cheque</div>
      </div>
       <div class="textosBox">
       <span class="letraAzul">El retiro en cheque debe realizarlo desde el Portal WEB Transaccional Platamóvil así:</span><br />
<br />

<span class="destacado"><strong>1.	</strong>Ingrese al portal transaccional de la forma habitual.</span><br />

<span class="destacado"><strong>2.	</strong>En la parte superior del portal, seleccione la opción “opciones de mi cuenta” y luego “solicitud de fondos”. Seleccione la imagen de seguridad que registró la primera vez que accedió al portal. Seleccione la opción “cheque físico”.</span><br />
<span class="destacado"><strong>3.	</strong>Ingrese el monto del cheque y seleccione las opciones que se le indican en pantalla. Tenga en cuenta la información adicional que se muestra en la parte inferior.</span><br />
<span class="destacado"><strong>4.	</strong>Haga una sola vez clic en el botón “enviar”.</span><br />
<span class="destacado"><strong>5.	</strong>En pantalla se mostrará la información de la solicitud, verifíquela e imprímala si lo necesita. Cualquier irregularidad que se presente, por favor comuníquela a la Línea Platamóvil.</span><br />
<span class="destacado"><strong>6.	</strong>Haga clic en el botón “finalizar”.</span><br />
<span class="destacado"><strong>7.	</strong>Cumplido el tiempo de generación del cheque, comuníquese con la Línea Platamóvil para verificar si ya está disponible.</span><br />
<span class="destacado"><strong>8.	</strong>Si ya está disponible, acérquese a la sede principal a reclamarlo. Si viene personalmente no olvide presentar su cédula; si autorizó a un tercero, no olvide la carta de autorización.</span><br /><br />

Para conocer la tarifa de esta transacción, consulte:<br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=3&t2=1'; ?> class="link">Operaciones, Límites y tarifas</a><br />




 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido8.png" width="424" height="394" /></div><br />
<br />

        

<span class="letraAzul">Siga estas recomendaciones de seguridad cada vez que realice un retiro en cheque.</span><br /><br />
- Al ingresar siempre digite en la barra de direcciones https://www.platamovil.co<br /><br />
- Ingrese desde un computador seguro, no use computadores públicos ni se conecte a redes públicas.<br /><br />
- Al ingresar verifique que la barra donde se observa la dirección esté sombreada de color verde y que aparezca un candado al lado derecho de la dirección o en la parte inferior de la pantalla.<br /><br />
- Mantenga su computador personal con un antivirus actualizado.<br /><br />
- Ignore los correos electrónicos en los que le ofrezcan premios o soliciten datos personales o financieros. Platamóvil nunca pide este tipo de información vía correo electrónico.<br /><br />
- Verifique que terceros no observen su clave o su imagen, al momento que se le solicita en el portal transaccional.<br /><br />
- Al terminar sus operaciones y/o consultas, no olvide hacer clic en el botón “quiero salir” que se encuentra ubicado en la parte superior derecha del portal.<br /><br />
- Por su seguridad, la sesión se cierra automáticamente después de un periodo de inactividad. 
  </div>
        
</div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
