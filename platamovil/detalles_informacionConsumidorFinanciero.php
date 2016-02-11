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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Información Consumidor Financiero</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Información</strong><br /> Consumidor Financiero</div>
       </div>
       <div class="textosBox">
       <span class="titulo">¿Cuáles son los derechos del consumidor financiero?</span><br /><br />

       <span class="destacado">- Recibir todos los productos y servicios de Mi Plata S.A. como la cuenta de ahorros Platamóvil, cumpliendo con todos los estándares de seguridad y calidad, de acuerdo con las condiciones, derechos y deberes.</span><br />
<span class="destacado">- Recibir información clara, veraz, completa y verificable, sobre las características propias de los productos y servicios ofrecidos, las cuales permiten y facilitan al consumidor financiero, su comparación y comprensión frente a los diferentes productos y servicios ofrecidos en el mercado.</span><br />
<span class="destacado">- Recibir de Mi Plata S.A. una atención oportuna, amable y respetuosa, donde lo primordial es su satisfacción, por medio del cumplimiento de las condiciones acordadas y de comunicaciones claras, concisas y coherentes, siempre desde la debida diligencia.</span><br />
<span class="destacado">- Recibir una adecuada educación sobre las diferentes formas de uso de los productos y servicios que tome o use en Mi Plata S.A. los derechos y deberes, los costos, los diversos mecanismos de protección establecidos para la defensa de sus derechos, entre otros temas.</span><br />
<span class="destacado">- Presentar con respeto y claridad consultas, peticiones, solicitudes, quejas o reclamos ante Mi Plata S.A. el Defensor del Consumidor o la Superintendencia Financiera de Colombia.</span><br /><br />


<span class="titulo">¿Cuáles son los deberes del consumidor financiero?</span><br /><br />

<span class="destacado">- Usted, como consumidor financiero, debe suministrar información verdadera, completa y oportuna a la entidad.</span><br />
<span class="destacado">- Debe cumplir con el reglamento de la cuenta y acatar las recomendaciones en materia de seguridad que le imparte la Mi Plata S.A.</span><br />
<span class="destacado">- Debe actualizar cuando menos una vez al año sus datos personales y el resto de información que suministró al momento de abrir su cuenta. </span><br />
<span class="destacado">- Por otra parte, usted está en el deber de informar a la Superintendencia Financiera de Colombia y a las demás autoridades competentes sobre el conocimiento que tenga de entidades o personas que suministran productos o servicios financieros sin estar legalmente autorizadas para ello.</span><br /><br />

<span class="titulo">Recomendaciones de seguridad y buenas prácticas del consumidor financiero</span><br /><br />
<span class="destacado">- Verificar que la Entidad de la que usted es consumidor esté autorizada y vigilada por la Superintendencia Financiera de Colombia.</span><br />
<span class="destacado">- Informarse sobre los productos o servicios que piensa adquirir, así como los costos y límites de los mismos.</span><br />
<span class="destacado">- Leer y revisar términos y condiciones de los contratos de apertura de productos, como las cuentas de ahorro.</span><br />
<span class="destacado">- Informarse sobre los medios que le ofrece la entidad para presentar peticiones, solicitudes, quejas o reclamos.</span><br />


</div>
    </div>
	
</div>

<?php include ('footer.php'); ?>

</body>
</html>
