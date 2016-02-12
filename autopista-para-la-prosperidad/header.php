<?php include './cms/core/mapping/include.mapping.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1024, maximum-scale=2" />
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	<meta name="author" content="imaginamos.com">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 month">
	<title>Autopistas Para la Prosperidad</title>

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">

	<!-- fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>

	<!-- tweet -->
	<link rel="stylesheet" href="css/jquery.tweet.css">
	<script type="text/javascript" src="js/jquery.tweet.js"></script>

	<!-- validation engine -->
	<link rel="stylesheet" href="css/validationEngine.jquery.css" media="all">
	<script type="text/javascript" src="js/jquery.validationEngine-es.js"></script>
	<script type="text/javascript" src="js/jquery.validationEngine.js"></script>


	<link rel="stylesheet" href="css/app.css">
	<script type="text/javascript" src="js/app.js"></script>

</head>
<body>

<header>
	<div class="headerWrap">
		<div class="upperBox">
			<div class="upperCont" style="position:relative;">
					<!-- <a href="#" class="link">ENGLISH</a>
					<div class="sep"></div>
					<a href="#" class="link">ESPAÑOL</a>
					<div class="sep"></div> -->
					<a href="#" class="link" id="map-bt">MAPA DEL SITIO<span><img src="img/more.gif"></span></a>
          <div id="map-nav">
          	<div class="con-map-nav">
            	<h1>Mapa de navegación</h1>
              <ul>
              	<a href="index.php"><li>Inicio</li></a>
                <a href="proyecto.php"><li>Proyecto</li></a>
				<a href="cronograma.php"><li>Cronograma</li></a>
			  </ul>
              <ul>
				<a href="dataroom.php"><li>Data room</li></a>
				<a href="prensa.php"><li>Sala de prensa</li></a>	                
                <a href="terminosmodal.php" id="modalterminos" class="cBoxTer fancybox.ajax"><li>Términos</li></a>
              </ul>
              <div class="arrow-map-nav"></div>
            </div>
          </div>
			</div>
		</div>
		<div class="lowerBox">
			<div class="logo"><a href="index.php"><img src="img/logo.png" height="115" width="370" alt="Logo"></a></div>
			<?php if($m == 'dataroom'){ ?>
                        <?php if($_SESSION['usuario'] != NULL){?>
			<div class="userBox">
				<div class="name"><?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></div>
                                <a href="logout.php" class="close">Cerrar Sesión</a>
			</div>
                        <?php }else{ ?>
                        
                            <?php } ?>
                        
			<?php } ?>
		</div>
	</div>
</header>
<nav>
	<div class="navWrap">
		<div class="decorR"></div>
		<div class="decorL"></div>
		<ul>
    	<li <?php if($m == 'prensa'){echo 'class="selected"'; } ?>><a href="prensa.php">SALA DE PRENSA<span></span></a></li>
      <li <?php if($m == 'dataroom'){echo 'class="selected"'; } ?>><a href="dataroom.php">DATA ROOM<span></span></a></li>
      <li <?php if($m == 'cronograma'){echo 'class="selected"'; } ?>><a href="cronograma.php">CRONOGRAMA<span></span></a></li>
			<li <?php if($m == 'proyecto'){echo 'class="selected"'; } ?>><a href="proyecto.php">PROYECTO<span></span></a></li>
			<li class="home <?php if($m == 'home'){echo 'selected'; } ?>"><a href="index.php">&nbsp;</a></li>
		</ul>
	</div>
</nav>