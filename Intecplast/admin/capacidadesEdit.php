<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}



$capacidad_id = $_GET['id'];

$capacidadDAO = new capacidadDAO();

$capacidad = new capacidad();
$capacidad = $capacidadDAO->getById($capacidad_id);

?>


<!doctype html>
<head>
  <title>.::Capacidades</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Edición de capacidades">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
 
</head>
<body>
	<div id="container">

		<div id="form_add">
		<h3>Editar Capacidad</h3>

			<form method="post" id="form1" name="form1" action="./../php/action/capacidadEdit.php" enctype="multipart/form-data">

				<label for="nombre">Capacidad:</label>
				<input type="text" id="capacidad" name="capacidad" value="<?php echo $capacidad->getCapacidad_rango() ?>" />
				      			
        		<input type="hidden" id="id" name="id" value="<?php echo $capacidad->getId() ?>" />
				
				<div class="actions">
					<input type="submit" name="submit" value="Guardar">
					<button type="reset">Deshacer</button>
					<button class="red" type="button" onclick="window.open('menuAdmin.php?s=miscelanea','_top');" >Volver</button>			
				</div>

			</form>

		</div>
		  <div id="widget">
		    <?php
		    include ('wg_capacidades.php');
		    ?>
		  </div>
	</div>
</body>
</html>