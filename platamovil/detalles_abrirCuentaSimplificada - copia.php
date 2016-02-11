<!DOCTYPE html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <title>Platamovil</title>
      
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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Cómo abrir una cuenta Simplificada Platamóvil?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cómo abrir una cuenta</strong><br /> Simplificada Platamóvil?</div>
       </div>
       <div class="textosBox">
<span class="letraAzul">Abrir una cuenta de ahorros Platamóvil Simplificada es muy fácil, simplemente siga estos pasos:</span><br />
<br />

<span class="destacado"><strong>1.</strong>	En el Portal Web Platamóvil www.platamovil.co consulte toda la información sobre la cuenta Platamóvil, preste mucha atención al reglamento, instructivos de uso, recomendaciones, tarifas, límites, sistema de atención al consumidor y demás temas que están a su disposición.</span><br />

<span class="destacado"><strong>2.</strong>	Comuníquese a Línea Platamóvil #269 desde su celular, desde fijo en Bogotá al 743 1810 o desde un fijo a nivel nacional al 01-8000-975-282.</span><br />

<span class="destacado"><strong>3.</strong>	Un ejecutivo de la Línea Platamóvil lo atenderá, le brindará información y le solicitará los datos de su documento de identidad y otros datos personales. De acuerdo con la información suministrada, el ejecutivo creará su cuenta Platamóvil Simplificada inmediatamente o le programará la visita de un Ejecutivo de Ventas que lo atenderá personalmente.</span><br />

<span class="letraAzul">Después de estos tres sencillos pasos, usted ya tendrá su cuenta Platamóvil creada, lo siguiente que debe hacer es activar los canales a través de los cuales realizará todas las operaciones.</span><br />
<br />

Por favor siga estas recomendaciones de seguridad al momento de abrir su cuenta Platamóvil:<br />
<br />

-	Platamóvil no lo llamará a su teléfono para que abra su cuenta. Si recibe una llamada donde le solicitan información personal, no entregue sus datos y termine la llamada. Comuníquese con la Línea Platamóvil y por favor infórmele al ejecutivo que lo atienda, acerca de la situación.<br />
<br />

-	Recuerde que para abrir su cuenta usted no debe pagar nada, es totalmente gratis. Si un Ejecutivo o alguien le solicita dinero por la apertura de la cuenta, no continúe con el proceso y por favor comunique el caso a la Línea Platamóvil.<br />
<br />

-	Si se comunica a la Línea Platamóvil para abrir su cuenta, evite hacerlo en lugares públicos prefiera lugares como su casa o trabajo, ya que Platamóvil le solicitará información personal, como: datos de su cédula, dirección, teléfonos, correo electrónico, entre otros.

 </div>
    </div>
	
  <div class="mainContetBoxRight">
    	<div class="imagenDetalles"><img src="imagenes/detalles/detalleImgen1.jpg" width="424" height="314" /></div>
        <div class="imagenDetalles2"><img src="imagenes/detalles/detalleImagen3.jpg" width="424" height="728" /></div>
        <!--<div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">REGLAMENTO_SIMPLIFICADA_PLATAMÓVIL.pdf<br /><span>17MB</span></a>
        </div>-->
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
