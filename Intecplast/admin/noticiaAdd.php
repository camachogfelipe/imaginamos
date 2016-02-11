<?php
session_start();

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

include("fckeditor/fckeditor.php");


$noticiaAdd="./../php/action/noticiaAdd.php";


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
	  document.getElementById("form_principal").style.height="650px";
 	});

  </script> 
</head>
<body>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Noticias
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
		Agregar Noticia.
		</div>  

	</div>

	<div class="subcontenido2">
		<div id="container">
			<div id="form_principal">
				<h3>Nueva Noticia</h3>

				<form method="post" id="form1" name="form1" action="<?php echo $noticiaAdd ?>"  enctype="multipart/form-data">	
					<!--Columna izquierda-->
					<div class="left">
						<label for="tituloEspanol">Titulo en Español:</label>
						<input type="text" id="tituloEspanol" name="tituloEspanol" value="" />

						<label for="descripcionEspanol">Descripción en Español:</label>
						<p>
							<?php
					            $oFCKeditor_l = new FCKeditor('descripcionEspanol') ;
					            $oFCKeditor_l->BasePath = 'fckeditor/';
					            $oFCKeditor_l->Width  = '100%' ;
					            $oFCKeditor_l->Height = '260px' ;
					            $oFCKeditor_l->Value = ''.$descripcion;
					            $oFCKeditor_l->Create() ;
							?>	
        				</p>
        				
        				<div class="space"></div>

						<label for="enlaceEspanol">Enlace en Español:</label>
						<input type="text" id="enlaceEspanol" name="enlaceEspanol" value="" />

        				<label for="imagen">Imagen Español:</label>
						<input type="file" id="imagenEspanol" name="imagenEspanol"/>
					</div>
					<!--Fin Columna Izquierda-->

					<!--Columna derecha-->
					<div class="right">
						<label for="tituloIngles">Titulo en Ingles:</label>
						<input type="text" id="tituloIngles" name="tituloIngles" value="" />

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
        				<label for="enlaceIngles">Enlace en Ingles:</label>
						<input type="text" id="enlaceIngles" name="enlaceIngles" value="" />
        				
        				<label for="imagen">Imagen Ingles:</label>
						<input type="file" id="imagenIngles" name="imagenIngles"/>
					</div>
					<!--Fin Columna Izquierda-->

					<div class="actions">
						<input type="submit" name="submit" value="Guardar">
						<button type="reset">Deshacer</button>
						<button class="red" type="button" onclick="window.open('menuAdmin.php?s=admNoticias','_top');" >Volver</button>			
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
</body>
</html>