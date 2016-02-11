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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Cómo activar su celular como medio de pago?  </a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cómo activar su celular </strong><br />como medio de pago?  </div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">Un Ejecutivo de la Línea Platamóvil lo llamará al número de celular registrado para que active el teléfono como medio de pago. <br />
<br />
Durante la llamada, será comunicado con un sistema automático que le solicitará digitar una clave personal de 4 dígitos, el sistema registrará la clave y le confirmará que el proceso se completó exitosamente.</span><br /><br />

Recuerde que su clave es personal y con ella autorizará todas las transacciones, por favor siga estas recomendaciones de seguridad: <br /><br />
- Cree una clave difícil de identificar y cámbiela frecuentemente, evite usar números relacionados con su fecha de nacimiento o documento de identidad.<br /><br />
- Memorice la clave, no la escriba, ni guarde en su celular. <br /><br />
- No permita que terceros conozcan o vean su clave al digitarla en el teléfono celular.<br /><br />
- Ignore los mensajes que lleguen a su celular o correo electrónico, en los que le soliciten su información personal, su clave o le pidan descargar aplicaciones en su celular.<br /><br />
- En caso de pérdida o robo del aparato celular llame a su operador telefónico y solicite el bloqueo del servicio, inmediatamente después, comuníquese con la Línea Platamóvil para bloquear su medio de pago.<br /><br />


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