<?php

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

include("fckeditor/fckeditor.php");

$articuloDAO = new articuloDAO();
$articulo = new articulo();
$instalaciones = $articuloDAO->getById(3);

$lang=$_GET['lang'];

$recurso=$_GET['s'];

$otherLang = $lang=="es" ? "en" : "es";

$desLagn= $lang=="es" ? "Español" : "Ingles"; 

$titulo = $lang=="es" ? $instalaciones->getTitulo_e() : $instalaciones->getTitulo_i() ;

$descripcion = $lang=="es" ? $instalaciones->getDescripcion_e() : $instalaciones->getDescripcion_i();

$update="./../php/action/articuloEdit.php?lang=".$lang."&s=".$recurso;

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
	  document.getElementById("form_add").style.height="570px";
	  document.getElementById("form_add").style.width="89%";
 	});

  </script> 
</head>
<body>

<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Instalaciones
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
				Gestión de la Sección -> Acerca de Nosotros -> Instalaciones
		</div>	

	</div>
	<div class="subcontenido2">
		<div id="dashboard" role="dashboard">

		<div id="form_add">
		<h3>Editar Instalaciones - <?php echo $desLagn ?></h3>

			<form method="post" id="form1" name="form1" action="<?php echo $update ?>"  enctype="multipart/form-data">	
				
				<input type="hidden" name="id" id="id" value="<?php echo $instalaciones->getId() ?>"
					
				<label for="nombre">Titulo En <?php echo $desLagn ?>:</label>
				
				<input type="text" id="titulo" name="titulo" value="<?php echo $titulo ?>" />

				<label for="texto">Texto En <?php echo $desLagn ?>:</label>
				
				<p>
				<?php
		            $oFCKeditor_l = new FCKeditor('descripcion') ;
		            $oFCKeditor_l->BasePath = 'fckeditor/';
		            $oFCKeditor_l->Width  = '670px' ;
		            $oFCKeditor_l->Height = '260' ;
		            $oFCKeditor_l->Value = ''.$descripcion;
		            $oFCKeditor_l->Create() ;
				?>	
        		</p>

        		<div class="space"></div>
				
				<label for="nombre">Imagen:</label>

				<input type="file" id="imagen" name="imagen"/>
				
				<div class="moreActions">

					<button type="button" onclick="window.open('menuAdmin.php?s=admOficinas&lang=<?php echo $otherLang ?>','_top');">Versión <?php echo $otherLang=="es" ? "Español" : "Ingles" ?></button>
					<button type="button" onclick="window.open('menuAdmin.php?s=viewGaleriaOficinas','_top');" >Galeria</button>	
			
					<button class="red" type="button" onclick="window.open('menuAdmin.php?s=acercaDeNosotros&id=1','_top');" >Volver</button>			
					


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
           noty({"text":"Instalaciones En Español Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['edit']==1 &&$_GET['lang']=="en"):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Instalaciones En Ingles Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
</body>
</html>