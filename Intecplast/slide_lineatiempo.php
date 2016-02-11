<?php

    include_once './php/clases.php';

    

    $timelineDAO = new timelineDAO();

    $timeline = new timeline();

	$timeline = $timelineDAO->gets();





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



	<title>jQuery Timeline 0.9.4 - Dando vida al tiempo</title>

	<link rel="stylesheet" href="css_lineatiempo/style_lineatiempo.css" type="text/css" media="screen" />

	<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

	<script src="js_lineatiempo/jquery.timelinr-0.9.4.js" type="text/javascript"></script>

	<script type="text/javascript"> 

		$(function(){

			$().timelinr()

		});

	</script>

	<style type="text/css">

	

	#Layer1 {

		position:absolute;

		left:197px;

		top:461px;

		width:793px;

		height:53px;

		z-index:1;

	}


ul#dates {
	z-index:9999;
	position:absolute !important;
}
#timeline {
	position:relative;
}
</style>

</head>



<body>

	

<div id="timeline">
		<div style="height:100px">
		<ul id="dates">

			<?php for ($i=0; $i < count($timeline); $i++): ?>

				

				<li><a href="#199<?php echo $i ?>"><?php echo $timeline[$i]->getAnio() ?></a></li>



			<?php endfor ?>

		</ul>
        </div>

		<ul id="issues">

			<?php for ($i=0; $i < count($timeline); $i++):?>

			<li id="199<?php echo $i ?>">

				<div id="conthist1">



					<div id="colderlinea">



						<span class="colderlineaanio"><?php echo $timeline[$i]->getAnio() ?></span><br/><br/>



						<?php echo $timeline[$i]->getDescripcion_e() ?>

					</div>



					<div id="colizqlinea">

						<img src=".<?php echo $timeline[$i]->getImagen_e() ?>" width="167" height="177" />				

					</div>



				</div>

			</li>

			<?php endfor ?>	

		</ul>



		<div id="grad_left"></div>

		<div id="grad_right"></div>

		<a href="#" id="next">+</a>

		<a href="#" id="prev">-</a>	</div>

	



</body>

</html>

