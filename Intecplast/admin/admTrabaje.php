<?php session_start();?>
<?php

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

	require_once '../php/clases.php';
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
		      	<a href="menuAdmin.php?s=admConvocatorias"><li>Convocatorias</li></a>
		      	<a class="various" href="admProfesiones.php"><li>Profesiones</li></a>
		      	<a class="various" href="admAspiracion.php"><li>Aspiración Salarial</li></a>
		      </ul>
     
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
