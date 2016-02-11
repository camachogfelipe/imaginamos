<?php session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

	require_once '../php/clases.php';

	$timelineDAO = new timelineDAO();
	$timeline = new timeline();
	$timelines = $timelineDAO->gets();
	$totaltimelines = $timelineDAO->total();

?>
  <script>

   $(document).ready(function() {
	  document.getElementById("nav").style.height="500px";
 	});

  </script> 
  <link href="css/modules.css" rel="stylesheet" type="text/css" />

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
				Gestión de la Sección -> Historia -> Timeline
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>

		      <?php foreach ($timelines as $timeline): ?>
		      	<a href="menuAdmin.php?s=timeLineEdit&id=<?php echo $timeline->getId()."&lang=es" ?>"><li><?php echo $timeline->getAnio() ?></li></a>
		      <?php endforeach ?>		      
		      </ul>
     
			</div>
			<div style="height:60px;"></div>
			<div style="width:100%; height:auto ; border-top:1px solid #333; font-family:sans-serif; font-size:12px;"> 
				<div class="moreActions">					
					<button type="button" onclick="window.open('menuAdmin.php?s=timeLineAdd','_top');">Añadir Año</button>
					<a href="timeLineDelete.php" class="delete" style="text-decoration:none;"><button class="red">Eliminar Año</button></a>

				</div>				
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
