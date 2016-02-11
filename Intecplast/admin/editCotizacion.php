<?php

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

include("fckeditor/fckeditor.php");

  $cotizacion_id = $_GET['id'];
  $cotizacionDAO = new cotizacionDAO();
  $cotizacion = new cotizacion();
  $cotizacion = $cotizacionDAO->getById($cotizacion_id);
  $update="./../php/action/cotizacionEdit.php";

  $estadoDAO = new estadoDAO();
  $estado = new estado();
  $estados = $estadoDAO->gets();

?>

<!doctype html>
<head>
  <title>.::Clases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Adición de Clases">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

  <script>

   $(document).ready(function() {
	  document.getElementById("form_add").style.float="none";
	  document.getElementById("form_add").style.height="580px";
	  document.getElementById("form_add").style.width="89%";
 	});

  </script> 
</head>
<body>
  <link rel="stylesheet" href="../jquery/development-bundle/themes/base/jquery.ui.all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>

  <script>
  $(function() {
    $( "#fecha" ).datepicker();
  });
  </script>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Responsabilidad Social
    	<div class="cerrar">
    		<a href="../php/action/logout.php">
    			<img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" />
    		</a>
    	</div>
    </div>
</div>
<!--Fin Titulos-->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
	<div class="subcontenido">

		<div class="subtitulos">
				Gestión de Cotizaciones
		</div>	

	</div>
	<div class="subcontenido2">
		<div id="dashboard" role="dashboard">

		<div id="form_add">
		<h3>Editar Cotización</h3>

			<form method="post" id="form1" name="form1" action="<?php echo $update ?>"  enctype="multipart/form-data">	
				
				<input type="hidden" name="id" id="id" value="<?php echo $cotizacion->getId() ?>"/>
					
				<label for="fecha">Fecha de Respuesta:</label>
				
				<input type="text" id="fecha" name="fecha" value="<?php echo $cotizacion->getFechaRespuesta() ?>" />

				<label for="texto">Observacion:</label>
				<select id="estado" name="estado">
					<?php foreach ($estados as $estado): ?>
						<option value="<?php echo $estado->getid() ?>"><?php echo $estado->getnombre() ?></option>
					<?php endforeach ?>
				</select>
				<p></p>

				<label for="texto">Observacion:</label>
				
				<p>
				<?php
		            $oFCKeditor_l = new FCKeditor('descripcion') ;
		            $oFCKeditor_l->BasePath = 'fckeditor/';
		            $oFCKeditor_l->Width  = '670px' ;
		            $oFCKeditor_l->Height = '260' ;
		            $oFCKeditor_l->Value = ''.$cotizacion->getObservacion();
		            $oFCKeditor_l->Create() ;
				?>	
        		</p>

        		<div class="space"></div>
				

				
				<div class="moreActions">
 	
						
					<input type="submit" name="submit" value="Guardar">

				</div>

			</form>    
		</div>


		</div>
	</div>

</div>

<div class="contenido_marco_inf"></div>

<?php if ($_GET['edit']==1 &&$_GET['lang']=="es"):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Articulo En Español Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['edit']==1 &&$_GET['lang']=="en"):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Articulo En Ingles Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
</body>
</html>