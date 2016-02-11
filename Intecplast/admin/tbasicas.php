<?php session_start();?>
<?php

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

?>

<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Tablas Básicas
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
				Panel de administración de tablas básicas de parametrización.
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>
		      <a class="various" href="paisesAdd.php"><li>Paises</li></a>
		      <a class="various" href="ciudadesAdd.php"><li>Ciudades</li></a>
		      <a class="various" href="tipoidsAdd.php"><li>Identificaciones</li></a>
		      <a class="various" href="estadosAdd.php"><li>Estados</li></a>
		      </ul>
     
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
