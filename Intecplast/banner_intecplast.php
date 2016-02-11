<?php
	include_once './php/clases.php';
	$imagenDAO = new imagenDAO();
	$imagen = new imagen();
	$imagenes = $imagenDAO->getBySeccionFlag(5,1);
?>
<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Slider Kit > Photos sliders</title>

		

<style type="text/css">





	#wrapbannintec {

		width:965px;

		height:383px;

		margin:auto;

		position:relative;

	}





	#wrapelemintec {

		width:920px;

		height:332px;

		margin:auto;

	}





	#colbann1 {

		width:469px;

		height:321px;

		float:left;

		margin-top:50px;

		margin-left:30px;



	}



	#frasebann {

		width:469px;

		height:100px;

		font-family: 'DejaVuSansCondensed';

		color: #2D5F9F;

		font-weight: bold;

		font-size: 42px;

		letter-spacing: -2px;

	}





	.frasebann2 {

		font-family: 'DejaVuSansCondensed';

		color:#3F89C5;

		font-weight: bold;

		font-size: 42px;

		letter-spacing: -2px;

	}



	#txtbann {

		width:469px;

		height:60px;

		font-family: 'DejaVuSansCondensed';

		color: #333333;

		font-weight: normal;

		font-size: 14px;		

	}





	#colbann2 {

		width:303px;

		height:312px;

		float:right;

		margin-right:70px;

		margin-top:-4px;	

	}



	#envbtminfo {

		width:469px;

		height:43px;

	}

					

	#btminfo {

		float:left;

		margin:0px;

		padding: 0;

		width: 179px;

		height: 43px;

		text-align: center;

		background: url("images/btmasinformacion.png") 0 0 no-repeat;

		letter-spacing: -1px;

	} 



	#btminfo  a {

		padding-top: 12px;

		width: 100%;

		height: 100%;

		display: block;

		overflow: hidden;

		font-family: 'DejaVuSansCondensed';

		color: #ffffff;

		font-weight: bold;

		font-size: 12px;

		text-decoration: none;

		background: url("images/btmasinformacion.png") 0 0 no-repeat;

		letter-spacing: -1px;

	} 



	#btminfo a:hover {

		font-family: 'DejaVuSansCondensed';

		background-position: -179px 0;

		color: #ffffff;

		font-weight: bold;

		font-size: 12px;

		letter-spacing: -1px;

	}



	#btminfo a:active {

		font-family: 'DejaVuSansCondensed';

		background-position: -358px 0;

		color: #ffffff;

		font-weight: bold;

		font-size: 12px;

		letter-spacing: -1px;

	}

			



</style>
<!--[if IE 7]>
<style type="text/css">
.photoslider-bullets .sliderkit-nav {
	top:327px !important;
    height:40px !important;
}
</style>
<![endif]-->
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>



<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<!-- Plugin scripts -->

<script type="text/javascript" src="lib2/js/jquery-1.3.min.js"></script>

<script type="text/javascript" src="lib2/js/jquery.sliderkit.1.5.1.js"></script>

<!--<script type="text/javascript" src="../lib/js/jquery.sliderkit.1.5.1.pack.js"></script>-->

<script type="text/javascript" src="lib2/js/jquery.easing.1.3.min.js"></script>

<script type="text/javascript" src="lib2/js/jquery.mousewheel.min.js"></script>



<!-- Launch Slider Kit -->

<script type="text/javascript">

	jQuery(window).load(function(){ //jQuery(window).load() must be used instead of jQuery(document).ready() because of Webkit compatibility				

		

		// Photo slider > Bullets nav

		jQuery(".photoslider-bullets").sliderkit({

			auto:true,

			circular:true,

			mousewheel:false,

			shownavitems:5,

			panelfx:"sliding",

			panelfxspeed:1200,

			panelfxeasing:"easeInOutExpo" // "easeOutExpo", "easeInOutExpo", etc.

		});

		

	

	});	

</script>

		

<!-- Plugin styles -->

<link rel="stylesheet" type="text/css" href="lib2/css/sliderkit-core.css" media="screen, projection" />

<link rel="stylesheet" type="text/css" href="lib2/css/sliderkit-demos.css" media="screen, projection" />



<!-- Site styles -->

<link rel="stylesheet" type="text/css" href="lib2/css/sliderkit-site.css" media="screen, projection" />



<!-- Compatibility -->



<!--[if IE 6]>

<link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie6.css" />

<![endif]-->



<!--[if IE 7]>

<link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie7.css" />

<![endif]-->



<!--[if IE 8]>

<link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie8.css" />

<![endif]-->

<link href="css/stylos_comunidadtalk.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapbannintec">

		<!-- Start photoslider-bullets -->

		<div class="sliderkit photoslider-bullets">
			<div style="clear:both"></div>
			<div class="sliderkit-nav">

				<div class="sliderkit-nav-clip" style="width:700px">



					<ul>

					<?php if ($imagenes>0): ?>

					<?php foreach ($imagenes as $imagen): ?>

						

						<li><a href="#" title="Photo sample"><?php echo $imagen->getTitulo_e() ?></a></li>

						

					<?php endforeach ?>

					<?php endif ?>

						<!--

						<li><a href="#" title="Photo sample">PRODUCTO<br/> DESTACADO</a></li>

						<li><a href="#" title="Photo sample">TITULO DEL<br/> PRODUCTO</a></li>

						<li><a href="#" title="Photo sample">TITULO DEL<br/> PRODUCTO</a></li>-->

					</ul>



				</div>

			</div>

	

			<div class="sliderkit-panels">

			<?php if ($imagenes>0): ?>

			<?php foreach ($imagenes as $imagen): ?>			

				<div class="sliderkit-panel">

					<div id="wrapelemintec">



						<!--Imagen-->

						<div id="colbann2">

							<img src=".<?php echo $imagen->getImagen_e() ?>">

						</div>

						

						<div id="colbann1">

							<!--Titulo-->

							<div id="frasebann">

								<?php echo $imagen->getTitulo_e() ?>

								<!--

								Soluciones Integrales <br/> 

								<span class="frasebann2">

									en Envases

								</span>

								-->

							</div>

							<!--Descripción-->

							<div id="txtbann">

								<?php echo $imagen->getDescripcion_e() ?>

							</div>						

							<!--Enlace-->

							<div id="envbtminfo">

								<div id="btminfo">

									<a href="<?php echo $imagen->getEnlace_e() ?>" target="_blank">&nbsp;</a>

								</div>

							</div>

						</div>	

					</div>

				</div>			

			<?php endforeach ?>			

			<?php endif ?>

							

			</div>

		</div>

		<!-- // end of photoslider-bullets -->	

</div>

</body>

</html>

