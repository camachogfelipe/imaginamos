<?php session_start();?>
<?php

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

?>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">
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
		</div>	

	</div>
	<div class="subcontenido2">
				


	</div>
</div>
<div class="contenido_marco_inf"></div>
