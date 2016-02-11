<?php
session_start();

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

include("fckeditor/fckeditor.php");


$timeLineAdd="./../php/action/timeLineAdd.php";


?>
<!doctype html>
<head>
  <title>.::Timeline-Anios</title>
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
	  document.getElementById("form_principal").style.height="590px";
	  $('#anio').focus();
 	});

  </script> 
</head>
<body>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Linea de Tiempo
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
		Agregar Años.
		</div>  

	</div>

	<div class="subcontenido2">
		<div id="container">
			<div id="form_principal">
				<h3>Nuevo Año</h3>

				<form method="post" id="form1" name="form1" action="<?php echo $timeLineAdd ?>"  enctype="multipart/form-data">	
					<!--Columna izquierda-->
						<label for="anio">Año:</label><br/>
						<input type="text" id="anio" name="anio" value=""/>
					<div class="left">

						<label for="descripcionEspanol">Descripción en Español:</label>
						<p>
							<?php
					            $oFCKeditor_l = new FCKeditor('descripcionEspanol') ;
					            $oFCKeditor_l->BasePath = 'fckeditor/';
					            $oFCKeditor_l->Width  = '100%' ;
					            $oFCKeditor_l->Height = '260px' ;
					            $oFCKeditor_l->Value = '';
					            $oFCKeditor_l->Create() ;
							?>	
        				</p>
        				
        				<div class="space"></div>

        				<label for="imagen">Imagen Español:</label>
						<input type="file" id="imagenEspanol" name="imagenEspanol"/>
					</div>
					<!--Fin Columna Izquierda-->

					<!--Columna derecha-->
					<div class="right">

						<label for="descripcionIngles">Descripción en Ingles:</label>
						<p>
							<?php
					            $oFCKeditor_l = new FCKeditor('descripcionIngles') ;
					            $oFCKeditor_l->BasePath = 'fckeditor/';
					            $oFCKeditor_l->Width  = '100%' ;
					            $oFCKeditor_l->Height = '260px' ;
					            $oFCKeditor_l->Value = '';
					            $oFCKeditor_l->Create() ;
							?>	
        				</p>
        				
        				<div class="space"></div>
        				
        				<label for="imagen">Imagen Ingles:</label>
						<input type="file" id="imagenIngles" name="imagenIngles"/>
					</div>
					<!--Fin Columna Izquierda-->

					<div class="actions">
						<input type="submit" name="submit" value="Guardar">
						<button type="reset">Deshacer</button>
						<button class="red" type="button" onclick="window.open('menuAdmin.php?s=timeLine','_top');" >Volver</button>			
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
<?php if ($_GET['error']==1):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"El Año Ingresado Ya Existe!","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>


</body>
</html>