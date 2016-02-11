<?php session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

	require_once '../php/clases.php';

    $promocionDAO = new promocionDAO();
    $promocion = new promocion();
	$promociones = $promocionDAO->gets();

?>

<!doctype html>
<head>
  <title>.::Promociones</title>
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
    <div class="titulos_texto1">Promociones
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
				Gestión de la Sección -> Promociones
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>
		      <?php if ($promociones>0): ?>
		      <?php foreach ($promociones as $promocion): ?>
		      	<a href="menuAdmin.php?s=promocionEdit&id=<?php echo $promocion->getId()."&lang=es" ?>"><li><?php echo $promocion->getTitulo_e() ?></li></a>
		      <?php endforeach ?>		      
		      <?php endif ?>
		      </ul>
     
			</div>

			<div style="width:100%; height:auto ; border-top:1px solid #333; font-family:sans-serif; font-size:12px;"> 
				<div class="moreActions">
					
					<?php if (count($promociones)<5): ?>
					
						<button type="button" onclick="window.open('menuAdmin.php?s=promocionAdd','_top');">Añadir Promociones</button>
						
					<?php endif ?>
			
					<a href="promocionDelete.php" class="delete" style="width:200px;"><button class="red">Eliminar Promociones</button></a>
					<a href="promocionPrincipal.php" class="delete" style="width:200px;"><button>Destacar Promociones</button></a>
					
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
           noty({"text":"Promoción Creada Correctamente!","layout":"center","type":"success","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['delete']==1):?>

  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Promoción Eliminada Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
</body>
</html>