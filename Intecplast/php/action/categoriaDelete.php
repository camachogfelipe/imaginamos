<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/categoriaDAO.php';
include '../entities/categoria.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';


$categoria_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "categoria_id";

$validacion = $productoDAO->buscarAtributo($atributo,$categoria_id);


if ($validacion != null) {

	$location = "location: ./../../admin/categoriasAdd.php?error=";

	header($location.'1');
	exit;

}
else{

	$categoriaDAO = new categoriaDAO();

	$categoria = new categoria();

	$result = $categoriaDAO->delete($categoria_id);

	$location = "location: ./../../admin/categoriasAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;

}

?>