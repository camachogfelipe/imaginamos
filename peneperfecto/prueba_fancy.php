<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>



	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '25%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			:  true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>






<style type="text/css">
<!--
body {
	background-image: url(images/bg_pp.png);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>





<link href="stylesheet.css" rel="stylesheet" type="text/css" />







<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
</head>

<body>

























<div id="envpie"><div id="col1_logcien"><img src="images/logocienxcien.png" width="164" height="109" /></div>
	 <div id="col1_pie">
	 <span class="titulopie">Pene Perfecto </span>
	 <div id="menupie">
	 
	 <ul>
	 <li><a href="#nogo">Inicio</a></li>
	  <li><a href="como_funciona.php">Cómo funciona </a></li>
	   <li><a href="beneficios.php">Beneficios </a></li>
	   <li><a href="resultados.php">Resultados </a></li>
	   <li><a href="compárenos.php">Compárenos</a></li>
	 </ul>
	 
	 
	 
	 
	 </div>
	 
	 
	 
	 </div>
	 
	 
	 
	 <div id="col1_pie">
	 <span class="titulopie">Soporte </span>
	 <div id="menupie">
	 
	 <ul>
	 <li><a href="soporte_enlinea.php">Soporte en línea </a></li>
	  <li><a href="preguntas_frecuentes.php">Preguntas frecuentes  </a></li>
	   <li><a href="contactenos.php">Contáctenos</a></li>
	   <li><a href="politica_privacidad.php">Política de privacidad </a></li>
	   <li><a href="terminos_condiciones.php">Términos del servicio </a></li>
	 </ul>
	 
	 
	 
	 
	 </div>
	 
	 
	 
	 </div>
  
  
  
  
  	 <div id="col1_pie">
	 <span class="titulopie">Otros Enlaces </span>
	 <div id="menupie">
	 
	 <ul>
	 <li><a href="empresa.php">Empresa</a></li>
	  <li><a href="tecnicas_aevitar.php">Técnicas a evitar </a></li>
	   <li><a href="comentarios.php">Comentarios</a></li>
	   <li><a id="various3" href="mod_encuesta.php">Encuesta</a></li>
	   
	 </ul>
	 
	 
	 
	 
	 </div>
	 
	 
	 
	 </div>

  <div id="col1_pie">
	 <span class="titulopie">Síganos </span>
	 <div id="facebook">	 
	 <ul>
	 <li><a href="empresa.php">Facebook</a></li>	   
	 </ul>	 	 
	 </div>
	 
	  <div id="twitter">	 
	 <ul>
	 <li><a href="empresa.php">Twitter</a></li>	   
	 </ul>	 	 
	 </div>
	 
	 <div id="ytube">	 
	 <ul>
	 <li><a href="empresa.php">Youtube</a></li>	   
	 </ul>	 	 
	 </div>
	 
	 
	 
	 
	 
	 
	 
	 
  </div>
  
  
  
  
  
	 
	 	  
	 
	 </div> 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
</body>



</html>
