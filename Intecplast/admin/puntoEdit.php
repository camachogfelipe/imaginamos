<?php

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

include("fckeditor/fckeditor.php");

$punto_id = $_GET['id'];

$puntoDAO = new puntoDAO();
$punto = new punto();
$punto = $puntoDAO->getById($punto_id);

$ciudadDAO = new ciudadDAO();
$ciudad  = new ciudad();
$ciudades = $ciudadDAO->getByPais(5);
$totalCiudad = $ciudadDAO->total();

$recurso=$_GET['s'];

$update="./../php/action/puntoEdit.php?s=".$recurso;

?>

<!doctype html>
<head>
  <title>.::Servicios</title>
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
	  document.getElementById("form_principal").style.height="740px";
	});

  </script> 
</head>
<body>

<!--Titulos-->
<div class="titulos">
	<div class="titulos_texto1">Puntos de Venta
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
				Gestión de la Sección -> Puntos de Venta
		</div>	

	</div>
	<div class="subcontenido2">
		<div id="container" role="dashboard">

		<div id="form_principal">
		<h3>Editar Punto</h3>

			<form method="post" id="form1" name="form1" action="<?php echo $update ?>"  enctype="multipart/form-data">	
				
				<input type="hidden" name="id" id="id" value="<?php echo $punto_id ?>" />
					
			<!--Columna izquierda-->
			<div class="left">
				<label for="nombre">Nombre del Punto:</label>
				<input type="text" id="nombre" name="nombre" value="<?php echo $punto->getNombre()?>" />


				<label for="ciudad">Ciudad:</label>

				<select name='ciudad' id='ciudad'>
				<?php if($totalCiudad>0): ?>
				<?php foreach ($ciudades as $ciudad): ?>
				  
				  <option value="<?php echo $ciudad->getid() ?>"><?php echo $ciudad->getnombre_e() ?></option>  

				<?php endforeach; ?>
				<?php endif; ?>
				</select>            
				
				<label for="direccion">Direccion:</label>
				<input type="text" id="direccion" name="direccion" value="<?php echo $punto->getDireccion()?>" />

				<label for="telefono">Teléfono:</label>
				<input type="text" id="telefono" name="telefono" value="<?php echo $punto->getTel()?>" />
			</div>
			<!--Columna derecha-->
			<div class="right">
				<label for="pbx">PBX:</label>
				<input type="text" id="pbx" name="pbx" value="<?php echo $punto->getPbx()?>" />

				<label for="email">E-mail:</label>
				<input type="text" id="email" name="email" value="<?php echo $punto->getEmail()?>" />

				<label for="hlv">Horario Lunes a Viernes:</label>
				<input type="text" id="hlv" name="hlv" value="<?php echo $punto->getHlv() ?>" />

				<label for="hs">Horario Sabados:</label>
				<input type="text" id="hs" name="hs" value="<?php echo $punto->getHs() ?>" />
			</div>

				<label for="texto">Google Map</label>
				<input type="text" id="gmap" name="gmap" value="<?php echo $punto->getGmap() ?>" />


				<div class="space"></div>
					<div class="actions">
						<input type="submit" name="submit" value="Guardar">
						<button type="reset">Deshacer</button>
						<button class="red" type="button" onclick="window.open('menuAdmin.php?s=admPuntos','_top');" >Volver</button>			
					</div>

			</form>    
		</div>


		</div>
	</div>

</div>

<div class="contenido_marco_inf"></div>

<?php if ($_GET['edit']==1):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


	<script>

		$('.ex1.alert').ready(function() {
		   noty({"text":"Punto Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
		});
	</script>


<?php endif; ?>
</body>
</html>