<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/productoDAO.php';
include '../entities/producto.php';
include '../dao/ensambleDAO.php';
include '../entities/ensamble.php';


$producto_codigo = $_GET['id'];

$productoDAO = new productoDAO();

$producto = new producto();
$producto = $productoDAO->getById($producto_codigo);

$ensambleDAO = new ensambleDAO();
$ensamble = new ensamble();

	//Validamos si el producto existe como base en un ensamble 
	$base = $ensambleDAO->getByBase($producto_codigo);


	if ($base != null) {
		$location = "location: ./../../admin/menuAdmin.php?s=view_productos&error=1";
		header($location);
		exit;
	}else{
		//Validamos si el producto existe como complemento en un ensamble 
		$complemento = $ensambleDAO->getByComplemento($producto_codigo);
		if ($complemento != null) {
			$location = "location: ./../../admin/menuAdmin.php?s=view_productos&error=1";
			header($location);
			exit;			

		}else{
			
			//Si el producto no existe como ensamble se permite su eliminación 

			@unlink("./../..".$producto->getProducto_imagen());

			$productoDAO->delete($producto_codigo);

			$location = "location: ./../../admin/menuAdmin.php?s=view_productos&delete=1";
			header($location);
			exit;

		}
	}

	

   



?>