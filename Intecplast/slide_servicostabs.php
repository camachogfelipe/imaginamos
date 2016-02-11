<?php

    include_once './php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $articulo = new articulo();
	$servicios = $articuloDAO->getBySeccionFlag(1,2);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/stylos_tabs.css" rel="stylesheet" type="text/css" />
	<link href="css/stepCarrousel.css" rel="stylesheet" type="text/css" />
	<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				  generateNextPrev:true,
				  generatePagination: false
			});
		});
	</script>	

	<style type="text/css" media="screen">
		.slides_container {
			width:900px;
			/*display:none;*/
		}
		.slides_container div.slide {
			width:900px;
			height:400px;
			display:block;
		}
		.item {
			float:left;
			width:190px;
			height:350px;
			margin:0 10px;
		}
		.prev, .next {
			display:block;
			width:20px;
			height:40px;
			background-repeat:no-repeat;
			line-height:100px;
			overflow:hidden;
			position:absolute;
			z-index:333;
			top:80px;
		}
		.prev {
			left:0px;
			background-image:url(images/prev.png)	
		}
		.next {
			background-image:url(images/next.png)	;
			right:0px;
		}
		#slides {
			margin-left:30px;
		}
		.title {
			padding:5px;
			width:180px !important;
			color:#666;
			position:absolute;
			bottom:0px;
			background:url(img/00.png);
			font-family:Arial, Helvetica, sans-serif;
			font-size:16px;
			z-index:999;
			width:190px;
		}
		.item img {
			width:188px !important;
			height:188px !important;
			border:solid 1px #CCC;
		}
		.des {
			font-family:Arial, Helvetica, sans-serif;
			font-size:12px;
			text-align:justify;
			height:190px;
			overflow:hidden;
			margin-top:10px;

		}
		.foto {
			position: relative;
			width:190px;
			height:190px;
		}
	</style>


</head>
<body>

<div id="slides">
		<div class="slides_container">
			
			<div class="slide">


				<?php for ($i=0; $i < 4 ; $i++): ?>
				<?php if (!$servicios[$i]){
								
							break;
								
						}
						else{
						 ?>		

				<div class="item">
                	<div class="foto">
                        <div class="title"><?php echo $servicios[$i]->getTitulo_e() ?></div>
                        <img src=".<?php echo $servicios[$i]->getImagen_e() ?>" />
                    </div>
                    <div class="des"><?php echo $servicios[$i]->getDescripcion_e() ?></div>
				</div>


				<?php 
						}	
					endfor 

				?>

			</div>


			<?php if (count($servicios)>4): ?>
	
            
            <div class="slide">

            	<?php for ($i=4, $total=count($servicios); $i<$total ; $i++): ?>

				<div class="item">
                	<div class="foto">
                        <div class="title"><?php echo $servicios[$i]->getTitulo_e() ?></div>
                        <img src=".<?php echo $servicios[$i]->getImagen_e() ?>" />
                    </div>
                    <div class="des"><?php echo $servicios[$i]->getDescripcion_e() ?></div>
				</div>

				<?php endfor ?>



			</div>
			<?php endif ?>

		</div>
	</div>

</body>

</html>