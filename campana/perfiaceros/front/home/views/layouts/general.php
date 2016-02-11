<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<html class="no-js ie9">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>PERFIACEROS</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="acero, aceros, estructuras metálicas, construcción, metalmecánica, industria, siderúrgica, metales, 
metálicos, vigas, cubiertas, entrepisos, fachadas, láminas de acero, laminas, tuberías, perfiles metálicos, perfiles, ornamentación, fleje cortina, tubería metálica, galvanizada, alfajor, decapada, aceitada, cold rolled, aluzinc, perlin, ipe, hea, canal, angulo, tubería mueble, tubería estructural, tubería cerramiento, tubería agua negra, teja de zinc, teja de cinc, cubierta arquitectónica, lamina colaborante, steel deck, metal deck, deck steel, corpalosa, placafacil, placa colaborante, plancha, pisos, techos, cerramientos, ferretería, corte transversal, corte longitudinal, corte slitter, entrepiso, Bogotá, Colombia, ASTM, JIS, SAE, aceros al carbono, aceros planos, tanques, carrocerías, encofrados, puertas, ventanas, cofres, transformadores, campana, autopartes, muebles, oficina, mobiliario, carro tanques, compactadores, contenedores, astilleros, petróleo, campo petrolero, constructoras, constructor, gabinetes, cajas metálicas, furgones, muebles metálicos, bicicletas, coches, corrales, perforadoras, iluminación, avisos, vallas, construcción liviana, señalización, drywall, mezzanine, fracktan, formaletas, andamios, puente grua, polipasto, torres eléctricas, carrocerías, corpatecho, master 1000, sillas, barandas, portones, pórticos, 
cerchas, puentes, electrodomésticos, línea blanca, cajas fuerte, troquelado, estantería, bandeja portacables, maquinaria, refrigeradores, neveras, refrigeración, estufas, cilindros para gas, transmilenio, buses, cama baja, tambores, hornos, blindaje, hierro, tejas, molino, calibres, espesores, perfiles metálicos, aceros Bogotá, láminas de acero, venta de acero" />
<meta name="Description" lang="es" content="Somos un equipo de trabajo apasionado por el acero, la innovación y por lo que podemos brindar 
a nuestros clientes. Contamos con un gran surtido de productos de acero de alta calidad, que cumplan con las normas internacionales y respaldadas con certificados de calidad. Trabajamos con las principales siderúrgicas a nivel internacional. Somos fabricantes de tuberías y perfiles en acero." />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta property="og:url" content="<?= current_url() ?>">
<meta property="og:type" content="website" /> 
<?php if(isset($datos['productos']->img)) : ?>

    <meta property="og:title" content="<?= $datos['productos']->titulo ?>" /> 
    <meta property="og:image" content="<?= base_url() . $datos['productos']->img ?>" /> 
    <meta property="og:description" content="<?= strip_tags($datos['productos']->texto) ?>" /> 

<?php endif; ?> 

<link rel="caninocal" href="<?php echo current_url() ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
<script type="text/javascript">
	var BASE_URL = '<?php echo base_url(); ?>'; 
</script>

<!--social img-->


<!-- Estilos -->
<link href="css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>chat/views/stylesheet/stylesheet.css" rel="stylesheet" type="text/css" />

<!-- Reset
================================================== -->
<link href="js/lib/isotope/style.css" rel="stylesheet" type="text/css" />

 <!-- Estilizar
================================================== -->
<link rel="stylesheet" type="text/css" href="js/lib/dd/dd.css"/>
<link rel="stylesheet" type="text/css" href="js/lib/estilizar/jscrollpane/css/jScrollPane.css">

 <!-- isotope
================================================== -->
<link rel="stylesheet" type="text/css" href="js/lib/isotope/isotope.css"/>

<!-- Slider
================================================== -->
<!--<link rel="stylesheet" type="text/css" href="js/lib/Elastideslide/css/custom.css"/>-->
<link rel="stylesheet" type="text/css" href="js/lib/Elastideslide/css/elastislide.css"/>
<link rel="stylesheet" type="text/css" href="js/lib/bxslider/css/jquery.bxslider.css"/>

<!-- Bootstrap -->
<link href="js/lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="js/lib/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" type="text/css" />

<!-- Fancybox
================================================== -->
<link rel="stylesheet" type="text/css" href="js/lib/source/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="js/lib/source/helpers/jquery.fancybox-thumbs.css"/>

<!-- Menu
================================================== -->
<link rel="stylesheet" href="js/lib/sidr/css/jquery.sidr.dark.css">
<link rel="stylesheet" href="css/menu_campana.css">

<!-- General
================================================== -->

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/campana.css" rel="stylesheet" type="text/css" />
<link href="css/responsivo.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php echo $template['partials']['header'], $template['body'], $template['partials']['footer'] ?>
</body>
</html>