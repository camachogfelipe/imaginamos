<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/sudo.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/jquery.fancybox.css">
	<link rel="stylesheet" href="../css/anythingslider.css">
	<link rel='stylesheet' href='../css/fullcalendar.css' />
	<link rel="shortcut icon" href="../img/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/jquery.sudoSlider.min.js" type="text/javascript"></script>
	<script src="../js/jquery.anythingslider.js" type="text/javascript"></script>
	<script src="../js/jquery-ui.js" type="text/javascript"></script>
	<script src="../js/fullcalendar.js" type='text/javascript'></script>
	<script src="../js/acciones.js" type='text/javascript'></script>
	<script src="../js/modernizr.custom.js" type='text/javascript'></script>
	<title>Bancoldex</title>
	<script type="text/javascript" >


	    $(document).ready(function(){	
	       var sudoSlider = $("#slider").sudoSlider({
	       	speed : 3000,
	       	pause: 4000,
	       	numeric:true,
	        auto:true,
	        continuous: true
	       });

	       $("#slider_t").anythingSlider({
	       	buildNavigation     : true,
	       	buildArrows			: false,
			buildStartStop      : false
	       });

	       $(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			disableDragging: true,
			header: {
				left: 'prev',
				center: 'title',
				right: 'next'
			},
			editable: true,
			events: [
				{
					title: 'Evento de todo el dia',
					start: new Date(y, m, 1)
				},
				{
					title: 'Evento largo',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Evento proximo',
					start: new Date(y, m, d-3, 10, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Evento repetido',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Reunion',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Almuerzo',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},

				{
					title: 'Fiesta de cumpleaños',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click para detalle',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'javascript:cambiar(this);'
				}
			]
		});
		
	});

	    });

	</script>
</head>
<body>
	<div id="bg_top"></div>
	<header>
		<div class="log"><a href="index.php"><img src="../img/logo1.png" alt="" width="211" height="243" /></a></div>
		<nav>
			<ul>
				<li class="li_bl"><a href="nosotros.php">Acerca de nosotros</a></li>
				<li class="li_br"><a href="sectores.php">Sectores</a></li>
				<li class="li_br"><a href="conversatorios.php">Conversatorios</a></li>
				<li class="li_br"><a href="links.php">Links de interés</a></li>
				<li class="li_br"><a href="noticias.php">Noticias</a></li>
				<li class="li_br"><a href="contactenos.php">Contáctenos</a></li>
			</ul>
		</nav>
		<div class="log2"><img src="../img/logo2.png" alt="" width="160" height="75" /></div>
		<div id="home"><a href="index.php"><img src="../img/home.jpg" alt="" width="46" height="43" /></a></div>
	</header>