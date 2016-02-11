<?php
	
	$imagenDAO = new imagenDAO();
	$imagen = new imagen();
	$imagenes = $imagenDAO->getBySeccionFlag(3,10);

?>


	<link rel="stylesheet" href="css/global.css">
	<style type="text/css">
	.caption {
		z-index:999;
		left:0px;
	}
	</style>
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
</head>
<body>
	<div id="container">
		<div id="example">

			<div id="slides">
				<div class="slides_container">
					
					<?php foreach ($imagenes as $imagen): ?>	
					<div class="slide">
						<a href="#nogo" title="" target="_blank">
							<img src=".<?php echo $imagen->getImagen_e() ?>" width="474" height="312" alt="Slide 1">
						</a>
						<div class="caption" style="font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-size:14px; bottom:">
							<p>
								<span style="font-family: DINMedium; color:#FFFFFF; font-size:18px;"><?php echo $imagen->getTitulo_e() ?></span>
								<br/><?php echo $imagen->getDescripcion_e() ?> 
							</p>
						</div>
					</div>
					<?php endforeach ?>

				</div>
			</div>

		</div>
	</div>
