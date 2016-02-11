<?php session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

	require_once '../php/clases.php';

    $articuloDAO = new articuloDAO();
    $servicio = new articulo();
	$servicios = $articuloDAO->getBySeccionFlag(1,2);

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
	  document.getElementById("nav").style.height="300px";
 	});

  </script> 
</head>
<body>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Acerca de Nosotros
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
				Gestión de la Sección -> Acerca de Nosotros -> Servicios
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>

		      <?php foreach ($servicios as $servicio): ?>
		      	<a href="menuAdmin.php?s=servicioEdit&id=<?php echo $servicio->getId()."&lang=es" ?>"><li><?php echo $servicio->getTitulo_e() ?></li></a>
		      <?php endforeach ?>		      
		      </ul>
     
			</div>

			<div style="width:100%; height:auto ; border-top:1px solid #333; font-family:sans-serif; font-size:12px;"> 
				<div class="moreActions">
					
					<button type="button" onclick="window.open('menuAdmin.php?s=servicioAdd','_top');">Añadir Servicio</button>
			
					<a href="servicioDelete.php" class="delete"><button class="red">Eliminar Servicio</button></a>
					
				</div>

				
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>

<?php if ($_GET['add']==1):?>


	<script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Servicio Creado Correctamente!","layout":"center","type":"success","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['delete']==1):?>

  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Servicio Eliminado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
</body>
</html>