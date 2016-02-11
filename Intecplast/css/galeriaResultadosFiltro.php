<?php
$clase_id=$_GET["clase"];
$linea_id=$_GET["linea"];
$sublinea_id=$_GET["sublinea"];
$categoria_id=$_GET["categoria"];
$material_id=$_GET["material"];
$forma_id=$_GET["forma"];
$capacidad_id=$_GET["capacidad"];
$boca_id=$_GET["boca"];

include_once './php/clases.php';
$productoDAO = new productoDAO();
$producto = new producto();


	if ($linea_id!=0 && $linea_id!="" ) {
		$parametro .=" AND sublineas.linea_id = ".$linea_id;
	}

	if ($sublinea_id!=0 && $sublinea_id!="") {
		
		$parametro .=" AND productos.sublinea_id=".$sublinea_id;
	}
	if ($material_id!=0 && $material_id!="") {
		$parametro .=" AND productos.material_id=".$material_id;
	}
	if ($forma_id!=0 && $forma_id!="") {
		$parametro .=" AND productos.forma_id=".$forma_id;
	}
	if ($capacidad_id!=0 && $capacidad_id!="") {
		$parametro .=" AND productos.capacidad_id=".$capacidad_id;
	}
	if ($boca_id!=0  && $boca_id!="") {
		$parametro .=" AND productos.boca_id=".$boca_id;
	}
	$productos = $productoDAO->getByLinea($clase_id,$parametro);

$total = $productoDAO->total();
$totalProductos = count($productos);

function paginacion( $pagActual=0, $regPorPagina=0, $cantidad=0, $showPages=5, $objData = NULL ){
	$pagFirst = 'javascript:void(0);';
	$pagLast = 'javascript:void(0);';
	$pagPrev = 'javascript:void(0);';
	$pagNext = 'javascript:void(0);';
	$paginacion = array();
	$paginacionFin = array();
	$paginas = ceil( $cantidad / $regPorPagina );
	$pagNextPrev = ($showPages-1)/2;
	$addIni = 0;
	$addIniInd = 999;
	$addFin = 0;
	$addFinInd = 999;

	// Construimos paginacion interna
	for( $i=1; $i<=$paginas ; $i++ ){
		$paginacion[$i] = array(
			"label" => $i,
			"accion" => "javascript:cambiarInputPagina(".$i.");"
			);
	}

	// Validamos la pagina actual y agregamos link a primero y anterior en caso de estar en pagian actual superior a 1
	if( $pagActual>1 ){
		$pagFirst = "javascript:cambiarInputPagina(1);";
		$pagPrev = "javascript:cambiarInputPagina(".($pagActual-1).");";
	}

	// Validamos la pagina actual y agregamos link a ultimo y siguiente en caso de estar en pagian actual no sea la ultima
	if( $pagActual<$paginas ){
		$pagLast = "javascript:cambiarInputPagina(".$paginas.");";
		$pagNext = "javascript:cambiarInputPagina(".($pagActual+1).");";
	}

	// Obtenemos las dos primeras paginas
	for( $i=$pagActual; $i<($pagActual+$pagNextPrev) ; $i++){
		if( isset($paginacion[($i-2)]) ){
			$paginacionFin[] = $paginacion[($i-2)];
			$addIniInd = $i-2;
			$addIni ++;
		}
	}


	// Agregamos pagina actual, debemos colocar los estilos de activo
	if( isset($paginacion[$pagActual]) ){
		$paginacionFin[] = $paginacion[$pagActual];
	}

	// Obtener las dos paginas finales
	for( $i=$pagActual; $i<($pagActual+$pagNextPrev) ; $i++){
		if( isset($paginacion[($i+1)])){
			$paginacionFin[] = $paginacion[($i+1)];
			$addFinInd = ($i+1);
			$addFin ++;
		}
	}

	// Verificamos si se agregaron las cantidides iniciales completas, de hacer falta alguna, tratamos de agregar al final
	if( $addIni < $pagNextPrev ){
		$faltante = $pagNextPrev - $addIni;
		for( $i=$addFinInd ; $i<($addFinInd+$faltante) ; $i++ ){
			if( isset($paginacion[($i+1)]) ){
				$paginacionFin[] = $paginacion[($i+1)];
			}
		}
	}

	// Verificamos si se agregaron las cantidides iniciales completas, de hacer falta alguna, tratamos de agregar al final
	if( $addFin < $pagNextPrev ){
		$faltante = $pagNextPrev - $addFin;
		$arrayFin = array();
		$ult = $addIniInd-1;
		for( $i=($ult-$faltante); $i<$ult ; $i++ ){
			if( isset($paginacion[$i]) ){
				$arrayFin[] = $paginacion[$i];
			}
		}
		for( $i=0,$tot=count($paginacionFin); $i<$tot; $i++ ){
			$arrayFin[] = $paginacionFin[$i];
		}
		unset($paginacionFin);
		$paginacionFin = $arrayFin;
	}

	// Recorremos y obtenemos solo los datos para mostrar
	$hasta = $regPorPagina * $pagActual;
	$desde = $hasta - $regPorPagina;
	$objDataSalida = array();
	for( $i=$desde; $i<$hasta ; $i++ ){
		if( isset($objData[$i])){
			$objDataSalida[] = $objData[$i];
		}
	}

	// Agregar links faltantes al inicio del array
	$retorno = array(
		'first'=>$pagFirst,
		'prev'=>$pagPrev,
		'paginacion'=>$paginacionFin,
		'next'=>$pagNext,
		'last'=>$pagLast,
		'data'=>$objDataSalida
		);

	return $retorno;
}

$pag=1;
if( isset( $_GET["pag"])){
	$pag = (int)$_GET["pag"];
}

$resultadoFinal = paginacion( $pag, 10, count($productos), 5, $productos );
$productos = $resultadoFinal["data"];

?>

<div id="subtit1">

	<div id="envpaginacion">

		<div id="btpag1"><a href="<?php echo $resultadoFinal['first'] ?>" >PRIMERO</a></div>
		<div id="btpag1"><a href="<?php echo $resultadoFinal['prev'] ?>">ANTERIOR</a></div>
		<?php
		//echo "<pre>"; var_dump($resultadoFinal['paginacion']); echo"</pre>";
		foreach ($resultadoFinal['paginacion'] as $resultado): ?>
		  <?php if ($resultado['label']==$pag): ?>
		    <div id="btpag2"><a href="<?php echo $resultado['accion'] ?>"><span style="color:red;" ><?php echo $resultado['label'] ?></span></a></div>
		  <?php else: ?>
		    <div id="btpag2"><a href="<?php echo $resultado['accion'] ?>"><?php echo $resultado['label'] ?></a></div>
		  <?php endif ?>
		<?php endforeach ?>

		<div id="btpag1"><a href="<?php echo $resultadoFinal['next'] ?>">SIGUIENTE</a></div>
		<div id="btpag1"><a href="<?php echo $resultadoFinal['last'] ?>">ÚLTIMO</a></div>
		<?php 

		$totalResultados = count($productos); 
	 
		?>

	</div>Mostrando <?php echo $totalResultados ?> de <?php echo $totalProductos ?> entradas
</div>

<?php if ($total>0): ?>
<div id="envcontprodinf">
	<?php 

 foreach ($productos as $producto): 
	  $material_id = $producto->getMaterial_id();
	  $materialDAO = new materialDAO();
	  $material = new material();
	  $material = $materialDAO->getById($material_id);
   $boca_id = $producto->getBoca_id();
   $bocaDAO = new bocaDAO();
   $boca = new boca();
   $boca = $bocaDAO->getById($boca_id);
  
	?>
				<a href="google.ocm" class="carga_modal">prueba</a>
				<div id="thumb2col">
					<div id="imgthumb2">  
						<div id="btmodprodsec">
							<a class="carga_modal" href="catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>">&nbsp;
								<img src=".<?php echo $producto->getProducto_imagen() ?>" width="170" height="153" />
							</a>
						</div>
					</div>
					<div id="textosdetalle">
						<h1><a href="" onclick="window.open('catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>','', 'width=1084, height=780, location=no, menubar=no, status=no,toolbar=no, scrollbars=no, resizable=no'); return false"><?php echo $producto->getProducto_nombre()?></a></h1>
						Boca:&nbsp;<?php echo $boca->getBoca() ?><br />
						Material:&nbsp;<?php echo $material->getnombre_e() ?><br />
					</div>
				</div>

			<?php endforeach ?>
		<?php endif ?>

	<div id="sepclear"></div>
	<div id="sepclear2"></div>
</div>

