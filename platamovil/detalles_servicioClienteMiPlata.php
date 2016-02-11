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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >En Mi Plata S.A.</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>En </strong><br />Mi Plata S.A.</div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">Mi Plata S.A. tiene varios medios para que usted se comunique con el área de Servicio al Cliente de la Compañía, la cual está disponible para recibir, registrar y darle seguimiento a sus requerimientos, con el fin de entregarle una respuesta oportuna y clara; los medios disponibles son:</span><br /><br />

<span class="destacado">- En la Línea Platamóvil #269 desde su celular, desde un número fijo en Bogotá al 743 1810 o desde fijo en otras ciudades al 01-8000-975-282.</span><br />
<span class="destacado">- En el Portal Web www.platamovil.co diligenciando el formulario de solicitud que se encuentra ubicado en la sección de Servicio al Cliente.<br /><br />
Consulte el siguiente link:<br />

<a href="detalles-formularioContacto.php?v=comercio" class="link">Contacto Web</a></span><br />

<span class="destacado">- En la Oficina principal ubicada en la Calle 93 No. 11 A 11 Oficina 601 Edificio Platamóvil en Bogotá, mediante carta física dirigida al área de Servicio al Cliente.</span><br />
Las peticiones quejas y reclamos presentadas por cualquiera de estos medios, serán atendidas en un plazo máximo de 15 días hábiles, mediante comunicación escrita dirigida a su última dirección registrada o a su correo electrónico.<br /><br />
A cada solicitud se le asignará un número de radicación, con el cual podrá efectuar el seguimiento para conocer el estado del requerimiento a través de la Línea Platamóvil.



 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido18.png" width="424" height="394" /></div>
        <!--<div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">REGLAMENTO_SIMPLIFICADA_PLATAMÓVIL.pdf<br /><span>17MB</span></a>
        </div>-->
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
