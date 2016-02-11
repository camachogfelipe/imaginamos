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
     <!--LITE TABS from: http://nicolahibbert.com/lightweight-jquery-tab-plugin/-->
    <script language="javascript" type="text/javascript" src="js/litetabs.jquery.js"> </script>
    <link href="css/comercio.litetabs.css" rel="stylesheet" type="text/css">
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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Qué es SAC?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Qué es</strong><br /> SAC?</div>
      </div>
       <div class="textosBox">
       <span class="letraAzul">Es el Sistema de Atención al Consumidor Financiero que busca promover las buenas relaciones y el cumplimiento de derechos y deberes en las entidades vigiladas frente al consumidor financiero, como Mi Plata S.A. con todos los Clientes y Usuarios Platamóvil.</span> <br /><br />
Cumpliendo la Ley 1328 de 2009 sobre el Régimen de Protección al Consumidor Financiero, el presente régimen tiene por objeto establecer los principios y reglas que rigen la protección de los consumidores financieros en las relaciones entre estos y las entidades vigiladas por la Superintendencia Financiera de Colombia, sin perjuicio de otras disposiciones que contemplen medidas e instrumentos especiales de protección.  <br /><br /><br />

<span class="titulo">Promesa de servicio a nuestro cliente y usuario</span> <br /><br />
En Mi Plata S.A. el compromiso es con usted.  Inicia desde el momento del primer contacto, durante su vinculación y después del servicio ofrecido.
Buscamos construir relaciones de largo plazo, basadas en la confianza y en la transparencia, para ello cuando usted hace contacto con Mi Plata S.A. puede estar seguro que encuentra: <br /><br />




</div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido21.png" width="424" height="394"></div>
        <div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="#">Manual del SAC.pdf<br /><span>17MB</span></a>
        </div>          
  </div>
    
    <div class="mainContetBoxLeft" style="width:100%; margin-top:0px;">
       <div class="textosBox">
<span class="destacado">- Un servicio especializado, personalizado, cercano, cordial y respetuoso, pensando en sus necesidades, entregando servicios satisfactorios. </span><br />
<span class="destacado">- Medios en los cuales hallará respuestas concretas y claras a cada una de las inquietudes que tenga.</span><br /><br />

<span class="titulo">Instantes de contactos satisfactorios...</span> <br /><br />
<span class="destacado">En Mi Plata S.A. el servicio al cliente es la actitud que día a día nos permite generar relaciones de valor de largo plazo con nuestros clientes y usuarios a todo nivel.  </span><br />
<span class="destacado">Nuestro objetivo y responsabilidad es generar experiencias de satisfacción y bienestar, cumpliendo las promesas que le hemos hecho a Usted, como nuestro cliente, y de hacernos cargo de sus inquietudes. </span><br /><br />

<span class="titulo">Temas que le debe informar Mi Plata S.A.</span> <br /><br />
- Los diferentes productos y servicios que presta, incluyendo las tarifas y límites de los mismos. <br /><br />
- Los procedimientos para la atención de sus quejas, solicitudes o peticiones. <br /><br />
- La existencia, funciones y procedimientos del Defensor del Consumidor Financiero. <br /><br />
- Las consecuencias derivadas del incumplimiento de los contratos firmados y reglamentos. <br /><br />
- Los derechos, deberes y los costos que se generan en la relación con Mi Plata S.A. <br /><br />
    </div>
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
