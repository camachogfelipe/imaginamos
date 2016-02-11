<?php session_start();?>
<?php

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

	require_once '../php/clases.php';

	$seccion_id = $_GET['id'];
	$flagDAO = new flagDAO();
	$flag = new flag();
	$flags = $flagDAO->getBySeccion($seccion_id);
	$totalFlags = $flagDAO->total();

?>
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
				Gestión de la Sección -> Acerca de Nosotros.
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>

		      <?php foreach ($flags as $flag): ?>
		      	<a href="menuAdmin.php?s=<?php echo $flag->getAdminFile()."&lang=es" ?>"><li><?php echo $flag->getNombre_e() ?></li></a>
		      <?php endforeach ?>		
		      <a href="menuAdmin.php?s=admServicios"><li>Servicios</li></a>      
		      </ul>
     
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
