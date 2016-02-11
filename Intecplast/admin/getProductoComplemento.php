<?php
require_once '../php/clases.php';

	$param   = $_GET['name_startsWith'];
	$base   = $_GET['productoComplemento'];


	$productoDAO = new productoDAO();
	$producto = new producto();
	$productos = $productoDAO->getAutoCompleteBase($base,$param);


			foreach ($productos as $item) {

			  		$options['categorias'][] = array(
				        'name' =>$item->getProducto_codigo(),
				        'nameComplete'    => $item->getProducto_nombre()
					); 

			}



		echo json_encode( $options );



?>
