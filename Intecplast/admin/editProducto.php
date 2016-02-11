<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

  $producto_codigo = $_GET['id'];
  $productoDAO = new productoDAO();
  $producto = new producto();
  $producto = $productoDAO->getById($producto_codigo);


$claseDAO = new claseDAO(); $clase = new clase(); $clases = $claseDAO->gets(); $totalClase = $claseDAO->total();
$clase_id = $producto->getClase_id();
$claseActual = $claseDAO->getById($clase_id);

$sublineaDAO = new sublineaDAO(); $sublinea = new sublinea(); $sublineas = $sublineaDAO->getsAdmin(); $totalSublinea = $sublineaDAO->total();
$sublinea_id = $producto->getSublinea_id();
$sublineaActual = $sublineaDAO->getById($sublinea_id);

$categoriaDAO = new categoriaDAO(); $categoria = new categoria(); $categorias = $categoriaDAO->gets(); $totalCategoria = $categoriaDAO->total();
$categoria_id = $producto->getCategoria_id();
$categoriaActual = $categoriaDAO->getById($categoria_id);

$formaDAO = new formaDAO(); $forma = new forma(); $formas = $formaDAO->gets(); $totalForma = $formaDAO->total();
$forma_id = $producto->getForma_id();
$formaActual = $formaDAO->getById($forma_id);

$atributoDAO = new atributoDAO(); $atributo = new atributo(); $atributos = $atributoDAO->gets(); $totalAtributos = $atributoDAO->total();
$atributo1_id = $producto->getProducto_atributo1();
$atributo1Actual = $atributoDAO->getById($atributo1_id);

$atributo2_id = $producto->getProducto_atributo2();
$atributo2Actual = $atributoDAO->getById($atributo2_id);

$tamanoDAO = new tamanoDAO(); $tamano = new tamano(); $tamanos = $tamanoDAO->gets(); $totalTamano = $tamanoDAO->total();
$tamano_id = $producto->getTamano_id();
$tamanoActual = $tamanoDAO->getById($tamano_id);

$unidadDAO = new unidadDAO(); $unidad = new unidad(); $unidades = $unidadDAO->gets(); $totalUnidad = $unidadDAO->total();
$unidadCap_id = $producto->getProducto_unidadCap();
$unidadCapActual = $unidadDAO->getById($unidadCap_id);

$unidadBoca_id = $producto->getProducto_unidadBoca();
$unidadBocaActual = $unidadDAO->getById($unidadBoca_id);

$materialDAO = new materialDAO(); $material = new material(); $materiales = $materialDAO->gets(); $totalMateriales = $materialDAO->total();
$material_id = $producto->getMaterial_id();
$materialActual = $materialDAO->getById($material_id);

$colorDAO = new colorDAO(); $color = new color(); $colores = $colorDAO->gets(); $totalColor = $colorDAO->total(); 
$color_id = $producto->getColor_id();
$colorActual = $colorDAO->getById($color_id);

$linnerDAO = new linnerDAO(); $linner = new linner(); $linners = $linnerDAO->gets(); $totalLinner = $linnerDAO->total();
$linner_id = $producto->getLinner_id();
$linnerActual = $linnerDAO->getById($linner_id);

$faldaDAO = new faldaDAO(); $falda = new falda(); $faldas = $faldaDAO->gets(); $totalFalda = $faldaDAO->total();
$falda_id = $producto->getFalda_id();
$faldaActual = $faldaDAO->getById($falda_id);

$capacidadDAO = new capacidadDAO(); $capacidad = new capacidad(); $capacidades = $capacidadDAO->gets();
$capacidad_id = $producto->getCapacidad_id();
$capacidadActual = $capacidadDAO->getById($capacidad_id);

$bocaDAO = new bocaDAO(); $boca = new boca(); $bocas = $bocaDAO->gets();
$boca_id = $producto->getBoca_id();
$bocaActual = $bocaDAO->getById($boca_id);

?>


<!doctype html>
<head>
  <title>.::Clases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Adición de Clases">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
 
</head>
<body>
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
        Edición de Productos.
    </div>  

  </div>
  <div class="subcontenido2">
	<div id="container">

		<div id="form_principal">
		<h3>Editar Producto</h3>

			<form method="post" id="form1" name="form1" action="./../php/action/productoEdit.php" enctype="multipart/form-data">
      <div class="left">
		<label for="cod">Código:</label>
		<input type="text" id="cod" name="cod" value="<?php echo $producto->getProducto_codigo() ?>" readonly=readonly />
				
    <label for="des">Descripción:</label>
    <input type="text" id="des" name="des" value="<?php echo $producto->getProducto_descripcion() ?>" />		

    <label for="des">Descripción (Ingles):</label>
		<input type="text" id="des_i" name="des_i" value="<?php echo $producto->getProducto_descripcion_i() ?>" />
				
        <label for="nombre">Nombre:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $producto->getProducto_nombre() ?>" />        

        <label for="nombre">Nombre (Ingles):</label>
        <input type="text" id="nom_i" name="nom_i" value="<?php echo $producto->getProducto_nombre_i() ?>" />
        
        <label for="clase">Clase:</label>
          <select name='clase' id='clase'>
	         	<option><?php echo $claseActual->getnombre_e() ?></option>  
          <?php if($totalClase>0): ?>
            <?php foreach ($clases as $clase): ?>
              
              	<option><?php echo $clase->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

        <label for="sublinea">Sublinea:</label>
          <select name='sublinea' id='sublinea'>
          		<option><?php echo $sublineaActual->getnombre_e() ?></option>
          <?php if($totalSublinea>0): ?>

            <?php foreach ($sublineas as $sublinea): ?>
              
              	<option><?php echo $sublinea->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>
        
        <label for="categoria">Categoria:</label>
          <select name='categoria' id='categoria'>
          		<option><?php echo $categoriaActual->getnombre_e() ?></option>
          <?php if($totalCategoria>0): ?>
            <?php foreach ($categorias as $categoria): ?>
              
              	<option><?php echo $categoria->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>      

          
        <label for="forma">Forma:</label>
          <select name='forma' id='forma'>
          		<option><?php echo $formaActual->getnombre_e() ?></option>
          <?php if($totalForma>0): ?>
            <?php foreach ($formas as $forma): ?>
              
              	<option><?php echo $forma->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            
                          
        <label for="atributo">Atributo #1:</label>
          <select name='atributo1' id='atributo1'>
          		<option><?php echo $atributo1Actual->getnombre_e() ?></option>
          <?php if($totalAtributos>0): ?>
              <option value="1">N/A</option>  
            <?php foreach ($atributos as $atributo): ?>
              
              	<option><?php echo $atributo->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>      
                
        <label for="atributo">Atributo #2:</label>
          <select name='atributo2' id='atributo2'>
          		<option><?php echo $atributo2Actual->getnombre_e() ?></option>
          <?php if($totalAtributos>0): ?>
              <option value="1">N/A</option>  
            <?php foreach ($atributos as $atributo): ?>
              
    	          <option><?php echo $atributo->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>    

        <label for="entradas">Entradas:</label>
        <input type="text" id="entradas" name="entradas" value="<?php echo $producto->getProducto_entradas() ?>" />

        <label for="tamano">Tamaño:</label>
          <select name='tamano' id='tamano'>
          		<option><?php echo $tamanoActual->getnombre_e() ?></option>
          <?php if($totalTamano>0): ?>
          		<option value="1">N/A</option>  
          	<?php foreach ($tamanos as $tamano): ?>
                  
				<option><?php echo $tamano->getnombre_e() ?></option>  

			<?php endforeach; ?>
		  <?php endif; ?>
              </select>     
                    

		<label for="material">Material:</label>
			<select name='material' id='material'>
				<option><?php echo $materialActual->getnombre_e() ?></option>
			<?php if($totalMateriales>0): ?>
				<?php foreach ($materiales as $material): ?>

				<option><?php echo $material->getnombre_e() ?></option>  

				<?php endforeach; ?>
			<?php endif; ?>
			</select>            
        </div>
        <!--Fin Columna Izquierda-->
        
        <!--Columna derecha-->
        <div class="right">
        <label for="capacidad">Capacidad:</label>
        <input type="text" id="capacidad" name="capacidad" value="<?php echo $producto->getProducto_capacidad() ?>" />
        
		<label for="unidadCapacidad">Unidad de Medida de Capacidad:</label>
			<select name='unidadCapacidad' id='unidadCapacidad'>
				<option><?php echo $unidadCapActual->getnombre() ?></option>
			<?php if($totalUnidad>0): ?>
        <option value="1">N/A</option>  

				<?php foreach ($unidades as $unidad): ?>

				<option><?php echo $unidad->getnombre() ?></option>  

				<?php endforeach; ?>
			<?php endif; ?>
			</select>       
      
      
      <label for="capacidad_rango">Rango de Capacidad:</label>
          <select name='capacidad_rango' id='capacidad_rango'>
        <option value="<?php echo $capacidadActual->getId() ?>"><?php echo $capacidadActual->getCapacidad_rango() ?></option>

          <?php if($capacidades>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($capacidades as $capacidad): ?>
              
              <option value="<?php echo $capacidad->getId() ?>"><?php echo $capacidad->getCapacidad_rango() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>           

		<label for="color">Color:</label>
			<select name='color' id='color'>
					<option><?php echo $colorActual->getnombre_e() ?></option>
			<?php if($totalColor>0): ?>
				<?php foreach ($colores as $color): ?>

					<option><?php echo $color->getnombre_e() ?></option>  

				<?php endforeach; ?>
			<?php endif; ?>
			</select>            
        
          
		<label for="boca">Boca:</label>
			<select name='boca' id='boca'>
					<option value="<?php echo $bocaActual->getId() ?>"><?php echo $bocaActual->getBoca() ?></option>
	     <?php if($bocas>0): ?>
          <option value="1">N/A</option>  

        <?php foreach ($bocas as $boca): ?>
          
          <option value="<?php echo $boca->getId() ?>"><?php echo $boca->getBoca() ?></option>  

        <?php endforeach; ?>
      <?php endif; ?>
			</select>           
		        
        <label for="peso">Peso:</label>
        <input type="text" id="peso" name="peso" value="<?php echo $producto->getProducto_peso() ?>" />

        <label for="terminado">Terminado:</label>
        <input type="text" id="terminado" name="terminado" value="<?php echo $producto->getProducto_terminado() ?>" />

        <label for="terminado">Terminado (Ingles):</label>
        <input type="text" id="terminado_i" name="terminado_i" value="<?php echo $producto->getProducto_terminado_i() ?>" />
        
        <label for="linner">Linner:</label>
          <select name='linner' id='linner'>
          		<option><?php echo $linnerActual->getnombre_e() ?></option>
          <?php if($totalLinner>0): ?>
              	<option>N/A</option>  

            <?php foreach ($linners as $linner): ?>
              
              	<option><?php echo $linner->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <label for="falda">Falda:</label>
          <select name='falda' id='falda'>
          		<option><?php echo $faldaActual->getnombre_e() ?></option>
          <?php if($totalFalda>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($faldas as $falda): ?>
              
              	<option><?php echo $falda->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

        <label for="cavidades">Cavidades:</label>
        <input type="text" id="cavidades" name="cavidades" value="<?php echo $producto->getProducto_cavidades() ?>" />

        <label for="anotacion">Anotación:</label>
        <input type="text" id="anotacion" name="anotacion" value="<?php echo $producto->getProducto_anotacion() ?>" />

        <label for="anotacion">Anotación (Ingles):</label>
        <input type="text" id="anotacion_i" name="anotacion_i" value="<?php echo $producto->getProducto_anotacion_i() ?>" />
        
        <label for="nombre">Imagen:</label>
				<input type="file" id="imagen" name="imagen"/>
        </div>
        <!--Fin Columna Izquierda-->

				
				
				<div class="actions">
					<input type="submit" name="submit" value="Guardar">
					<button type="reset">Deshacer</button>
					<button class="red" type="button" onclick="window.open('menuAdmin.php?s=view_productos','_top');" >Volver</button>	
					
					        
				</div>

		</form>

		</div>
	</div>
  </div>
</div>
<div class="contenido_marco_inf"></div>
</body>
</html>