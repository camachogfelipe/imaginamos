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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS">Retiro en Efectivo</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Retiro</strong><br /> en Efectivo</div>
      </div>
       <div class="textosBox"><span class="letraAzul">El retiro en efectivo debe realizarlo en un Punto Platamóvil así:</span><br />
<br />

<div class="destacado"><strong>1.	</strong>Acérquese al Punto Platamóvil que prefiera.</div><br />

<div class="destacado"><strong>2.	</strong>Dígale al Agente Platamóvil que necesita realizar una transacción de retiro.</div><br />
<div class="destacado"><strong>3.	</strong>Infórmele al Agente Platamóvil su número de celular y el monto que va a retirar. Con estos datos el Agente Platamóvil realizará la transacción en el terminal electrónico.</div><br />
<div class="destacado"><strong>4.	</strong>Inmediatamente usted recibirá una llamada del sistema Platamóvil en su teléfono celular, indicándole que está realizando un retiro en el Punto Platamóvil y el monto a retirar, para confirmar la transacción el sistema le pedirá que digite su clave personal en el celular. Una vez el sistema valida su clave, le dirá una clave temporal de dos dígitos.</div><br />
<div class="destacado"><strong>5.	</strong>Digité en el terminal electrónico del Punto Platamóvil, la clave temporal que le fue asignada.</div><br />
<div class="destacado"><strong>6.	</strong>El terminal le indicará al Agente que la transacción fue aprobada, solicite al Agente que le entregue la plata y el comprobante impreso por el Terminal Electrónico; cuente la plata, verifique que los datos del comprobante sean correctos, si hay algún error indíquelo al Agente.</div><br />

Consulte aquí los Puntos Platamóvil.<br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=4&t2=4'; ?> class="link">Red de puntos Platamóvil</a><br />

Para conocer la tarifa de esta transacción, consulte:<br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=3&t2=1'; ?> class="link">Operaciones, Límites y tarifas</a><br />


 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
<div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido7.png" width="424" height="394" /></div>
       
        <span class="letraAzul">Siga estas recomendaciones de seguridad cada vez que realice un retiro en efectivo:</span><br /><br />

- No acepte ayuda de personas desconocidas, sólo entre en contacto con el Agente Platamóvil, quien atiende el Punto Platamóvil y es el único autorizado para operar el terminal electrónico.<br /><br />
- Siempre solicite el comprobante impreso que emite el terminal electrónico.<br /><br />
- Conserve sus comprobantes de depósito para que pueda corroborar las operaciones en la consulta de movimientos de su cuenta.<br /><br />
- Lea y siga las instrucciones de uso que se encuentran en el Punto Platamóvil.<br /><br />
- Realice los retiros solo en Puntos Platamóvil autorizados, consulte el listado de Puntos en el Portal WEB o en la Línea Platamóvil.<br /><br />
- Cuando retire dinero en el Punto Platamóvil no permita que terceros vean su clave cuando la digita en su celular.
        
  </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
