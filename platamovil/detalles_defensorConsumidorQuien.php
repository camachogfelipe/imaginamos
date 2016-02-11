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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslink" href="detalles_defensorConsumidor.php?v=<?php echo selecionOrigen();?>">Defensor del consumidor financiero</a><span class="arrow"></span><a class="migaslinkS" >¿Quién es el defensor del consumidor financiero?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="javascript:history.back();"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Quién es el Defensor</strong><br /> del Consumidor financiero?</div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">Mi Plata S.A. eligió al doctor Darío Laguado Monsalve, como Defensor del Consumidor Financiero, quien se encuentra posesionado ante la Superintendencia Financiera de Colombia.</span> <br /><br />

Todos los consumidores de productos o servicios ofrecidos por Mi Plata S.A. pueden acceder a la Defensoría del Consumidor Financiero de manera gratuita, sin importar el lugar del país donde se encuentren, a través de alguno de los siguientes medios: <br /><br />
<span class="destacado" style=" text-align:left">- Personalmente o por escrito a la dirección: <strong>Calle 70 A No. 11 – 83, en Bogotá.</strong></span> <br />
<span class="destacado" style=" text-align:left">- Telefónicamente al número: <strong>2492597 - 5439850</strong></span><br />
<span class="destacado" style=" text-align:left">- Vía Fax al número: <strong>5439855</strong></span> <br />
<span class="destacado" style=" text-align:left">- Por correo electrónico: <strong>reclamaciones@defensorialaguadogiraldo.com.co</strong></span><br />
<span class="destacado" style=" text-align:left">- Página web:<strong> www.defensorialg.com.co</strong></span> <br /> <br />

<span class="titulo">¿Cuáles son sus funciones? </span><br /><br />

 
- Atender de manera acertada y eficaz a los consumidores financieros de Mi Plata S.A.<br /><br />
- Conocer y resolver en forma objetiva y gratuita para los consumidores, las quejas presentadas por ellos, relativas a un posible incumplimiento de las normas legales, contractuales o procedimientos internos que rigen la ejecución de los servicios o productos que ofrece o presta Mi Plata S.A. <br /><br />
- Actuar como conciliador extrajudicial en derecho, entre los consumidores financieros y Mi Plata S.A. cuando exista solicitud explícita para que el caso sea atendido en desarrollo de la función de conciliación y se trate de asuntos susceptibles de solucionar mediante tal mecanismo. <br /><br />
- Servir como vocero de los consumidores financieros ante Mi Plata S.A. <br /><br />
- Efectuar recomendaciones a Mi Plata S.A. relacionadas con los servicios y la atención al consumidor financiero, y en general en materias enmarcadas en el ámbito de su actividad. <br /><br />
- Proponer a las autoridades competentes las modificaciones normativas que resulten convenientes para la mejor protección de los derechos de los consumidores financieros. <br /><br />
- Y todas las demás que le asigne el Gobierno Nacional y que tengan como propósito el adecuado desarrollo del Sistema de Atención al Consumidor Financiero - SAC.

 </div>
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
