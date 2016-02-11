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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Principios de Servicio al Cliente</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Principios de</strong><br /> Servicio al Cliente</div>
       </div>
       <div class="textosBox">
       Mi Plata S.A. tiene principios para la correcta atención y servicio a todos los clientes y usuarios, estos principios orientan a todos los funcionarios de la Compañía en la relación con usted y con otras personas que han depositado su confianza en la institución. Los principios son:<br /><br />


<span class="titulo">Debida Diligencia</span> <br /><br />
<span class="destacado">Mi Plata S.A. le brinda una atención oportuna, amable y respetuosa, donde lo primordial es su satisfacción como cliente o usuario, por medio del cumplimiento de las condiciones acordadas y de comunicaciones claras, concisas y coherentes, siempre cumpliendo las normas de la Superintendencia Financiera de Colombia, en cuanto a seguridad y calidad.</span>  <br /><br />

<span class="titulo">Libertad de Elección</span> <br /><br />
<span class="destacado">Usted tiene derecho a escoger libremente cualquier entidad vigilada, a conocer las condiciones de productos y servicios que le interesen y a no tener repercusiones por sus decisiones en el trato con Mi Plata S.A. ni con las demás entidades. </span> <br /><br />

<span class="titulo">Transparencia e Información Cierta, Suficiente y Oportuna</span> <br /><br />
<span class="destacado">La información que Mi Plata S.A. maneja es verdadera, completa, clara y se comunica en el momento indicado, incluyendo sus derechos, sus deberes, los costos de los productos y servicios que le interesen y adquiera con Mi Plata S.A. </span> <br /><br />

<span class="titulo">Responsabilidad en Trámite de Quejas y Reclamos</span> <br /><br />
<span class="destacado">Mi Plata S.A. lo atenderá eficientemente, cumpliendo con los tiempos de respuesta establecidos, las condiciones pactadas y la regulación de las mismas, identificando las causas de las quejas y reclamos para mejorar permanentemente.</span>   <br /><br />
 
<span class="titulo">Manejo Adecuado de Conflicto de Intereses.</span> <br /><br />
<span class="destacado">Mi Plata S.A. conciliará entre los propios intereses y los de los consumidores financieros, siempre siendo neutral e imparcial, dando prioridad al consumidor.</span>  <br /><br />


</div>
    </div>
	
  <div class="mainContetBoxRight">  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido10.png" width="424" height="394"></div>    
  </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
