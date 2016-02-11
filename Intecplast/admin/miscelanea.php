<?php session_start();?>
<?php

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}

?>

  <script>

   $(document).ready(function() {
    document.getElementById("dashboard").style.height="300px";
  });

  </script> 


<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Miscelanea de Atributos
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
				Panel de administración de atributos pertenecientes a cada producto.
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    
		    <div id="nav">
		      
		      <ul>
		      <a class="various" href="clasesEdit.php?id=1"><li>Clases</li></a>
		      <a class="various" href="categoriasAdd.php"><li>Categorias</li></a>
		      <a class="various" href="lineasAdd.php"><li>Lineas</li></a>
		      <a class="various" href="sublineasAdd.php"><li>Sublineas</li></a>
		      <a class="various" href="formasAdd.php"><li>Formas</li></a>
		      <a class="various" href="atributosAdd.php"><li>Atributos</li></a>
		      <a class="various" href="coloresAdd.php"><li>Colores</li></a>
		      <a class="various" href="materialesAdd.php"><li>Materiales</li></a>
		      <a class="various" href="unidadesAdd.php"><li>Medidas</li></a>
		      <a class="various" href="tamanosAdd.php"><li>Tamaños</li></a>
		      <a class="various" href="linnersAdd.php"><li>Linners</li></a>
		      <a class="various" href="faldasAdd.php"><li>Faldas</li></a>
		      <a class="various" href="bocasAdd.php"><li>Bocas</li></a>
		      <a class="various" href="capacidadesAdd.php"><li>Capacidades</li></a>
		      </ul>
     
			</div>

		</div>
	</div>
</div>
<div class="contenido_marco_inf"></div>
