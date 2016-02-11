<?PHP
	require_once("includes/clase_parametros.php");
?>
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
    <!-- detalles -->
    <link href="css/detalles.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script>
    <!--header -->
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/header.js"> </script>
    <!--footer -->
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--menu -->
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/menu.js"> </script>
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script>


	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.1.2" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="js/helpers/jquery.fancybox-media.js?v=1.0.5"></script>


</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php if (selecionOrigen()== 'index'){ echo 'Home';}else{echo  ucwords(selecionOrigen());} ; ?></a><span class="arrow"></span><a class="migaslinkS" >Red de Puntos Platamóvil</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>

    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Red de Puntos</strong><br />Platamóvil</div>
       </div>
       <div class="textosBox">
       	<p>
       Para realizar operaciones en los puntos Platamóvil o consultar información, la persona debe acercarse a cualquiera de los comercios afiliados que se muestran a continuación; seleccione el que mas le convenga de acuerdo a su ubicación y horario de atención.</p>
		<br />
		<div>Filtro por ciudad: &nbsp; <select name='ciudad' size='1' id='tiposelect' class="redSelect">
			<?PHP $valores = Parametros::getCityRedP(); echo $valores; ?>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Zona: &nbsp; <select name='sector' size='1' id='tiposelectS' class="redSelect">
			<?PHP $valores2 = Parametros::getSectorRedP(); echo $valores2; ?>
			</select>
		</div>
		<br />
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable"  id='tablaselect'>

		</table>

 </div>
    </div>

</div>

<?php include ('footer.php'); ?>
<script type="text/javascript">

	$(function() {

		var id = $("#tiposelect").find(':selected').val();

		//alert(id);

		$.get('tabladatosRPS.php', { id: id } , function(resultado) {
			//alert(resultado);
			$('#tiposelectS').empty().html(resultado);

			var id2 = $("#tiposelectS").find(':selected').val();
			var id3 = id+"-"+id2;
			$.get('tabladatosRP.php', { id: id3 } , function(resultado2) {
				$('#tablaselect').empty().html(resultado2);
			});
		});

		$("#tiposelect").change(function(event){
			var id = $("#tiposelect").find(':selected').val();
			//alert(id);
			$.get('tabladatosRPS.php', { id: id } , function(resultado) {
				//alert(resultado);
				$('#tiposelectS').empty().html(resultado);

				var id2 = $("#tiposelectS").find(':selected').val();
				//alert(id2);
				var id3 = id+"-"+id2;
				$.get('tabladatosRP.php', { id: id3 } , function(resultado2) {
					$('#tablaselect').empty().html(resultado2);
				});


				$("#tiposelectS").change(function(event){
					var id2 = $("#tiposelectS").find(':selected').val();
					//alert(id2);
					var id3 = id+"-"+id2;
					$.get('tabladatosRP.php', { id: id3 } , function(resultado2) {
						$('#tablaselect').empty().html(resultado2);
					});
				});


			});
		});


		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});


		/*
		$.get('tabladatosRP.php', { id: id } , function(resultado) {
			$('#tablaselect').empty().html(resultado);
		});


		$("#tiposelect").change(function(event){
			var id = $("#tiposelect").find(':selected').val();
			//alert(id);
			$.get('tabladatosRP.php', { id: id } , function(resultado) {
				$('#tablaselect').empty().html(resultado);
			});
		});
		*/





	});

</script>
</body>
</html>
