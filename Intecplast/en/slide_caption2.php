<?php

	

	$imagenDAO = new imagenDAO();

	$imagen = new imagen();

	$imagenes = $imagenDAO->getBySeccionFlag(4,11);



?>





<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	

	<title>Slides, A Slideshow Plugin for jQuery</title>

	

	<link rel="stylesheet" href="css/global.css">

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

	<script src="js/slides.min.jquery.js"></script>

	<script>

		$(function(){

			$('#slides').slides({

				preload: true,

				preloadImage: 'img/loading.gif',

				play: 5000,

				pause: 2500,

				hoverPause: true,

				animationStart: function(current){

					$('.caption').animate({

						bottom:-35

					},100);

					if (window.console && console.log) {

						// example return of current slide number

						console.log('animationStart on slide: ', current);

					};

				},

				animationComplete: function(current){

					$('.caption').animate({

						bottom:0

					},200);

					if (window.console && console.log) {

						// example return of current slide number

						console.log('animationComplete on slide: ', current);

					};

				},

				slidesLoaded: function() {

					$('.caption').animate({

						bottom:0

					},200);

				}

			});

		});

	</script>
<style type="text/css">
.caption p {
	margin-top:0px;
}
.caption a, .caption a:hover {
	text-decoration:underline;
}

.caption {
	text-decoration:none !important;
	background:url(img/44.png) !important;
}
</style>
</head>

</head>

<body>

	<div id="container">

		<div id="example">



			<div id="slides">

				<div class="slides_container">

					

					<?php foreach ($imagenes as $imagen): ?>	

					<div class="slide">

						<a href="#nogo" title="" target="_blank">
							<div class="caption" style="font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-size:14px;">


								<div style="font-family: DINMedium; color:#FFFFFF; font-size:18px; margin-bottom:0px"><?php echo $imagen->getTitulo_e() ?></div>

								<?php echo $imagen->getDescripcion_e() ?> 

						
						</div>
							<img src=".<?php echo $imagen->getImagen_e() ?>" width="474" height="312" alt="Slide 1">

						</a>

						

					</div>

					<?php endforeach ?>



				</div>

			</div>



		</div>

	</div>

</body>

</html>