<?php 

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}


require_once '../php/clases.php';

	$producto_codigo = $_GET['id'];
	$productoDAO = new productoDAO();
	$producto = new producto();
	$producto = $productoDAO->getById($producto_codigo);

	$ejemploDAO = new ejemploDAO();
	$ejemplo = new ejemplo();
	$ejemplos = $ejemploDAO->getsByProducto_codigoCms($producto_codigo);
	$total = $ejemploDAO->totalProducto_codigo($producto_codigo);

	$recurso = $_GET['s'];

?>
	    <script type="text/javascript">
            function confirma(formObj) { 
                if(!confirm("¿Está seguro de realizar esta acción?")) { 
                    return false;
                }
            }

        </script>


	<link href="css/modules.css" rel="stylesheet" type="text/css" />

<!--Titulos-->
<div class="titulos">
		<div class="titulos_texto1">Productos
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
				Administración de Productos >> Ejemplos >>  <?php echo $producto->getProducto_codigo() ?>
		</div>	

	</div>
	<div class="subcontenido2">
			<div id="dashboard" role="dashboard">
				<div id="consultas">

					<div id="toolbar">

					<form style="float:left; margin:5px;" method="POST" action="./../php/action/ejemploAdd.php" enctype="multipart/form-data">

					<label style="font-weight:bold;" for="nombre">Añadir Ejemplo:</label>
					<input type="file" id="imagen" name="imagen"/>
					<input type="hidden" id="id" name="id" value="<?php echo $producto->getProducto_codigo() ?>"/>
					<input type="submit" name="submit" value="Guardar">

					</form>

					</div>

				</div>
		    <div id="nav">
		      
		      <ul>
		      
					<?php if ($total>0): ?>
						<?php foreach ($ejemplos as $ejemplo): ?>
		      	<div style="width:134px; display:block; float:left; margin:10px;">
								 
									<img src="./..<?php echo $ejemplo->getimagen() ?>" width="134" height="88" border="0" />
									<div style="margin:10px 0 0 40px;">

						<?php      		
					    
					        echo "<a href='./../php/action/ejemploDelete.php?producto=".$_GET['id']."&id=".$ejemplo->getId()."' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-left:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
		
							?>
		      				</div>

						</div>
						<?php endforeach ?>
					<?php endif ?>

		      </ul>
     		
			</div>
			<div style="height:60px;"></div>			
			</div>

	</div>
</div>

<div class="contenido_marco_inf"></div>