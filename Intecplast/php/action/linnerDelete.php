<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/linnerDAO.php';
include '../entities/linner.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';

$linner_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "linner_id";

$validacion = $productoDAO->buscarAtributo($atributo,$linner_id);


if ($validacion != null) {

	$location = "location: ./../../admin/linnersAdd.php?error=";

	header($location.'1');
	exit;

}
else{

	$linnerDAO = new linnerDAO();

	$linner = new linner();

	$result = $linnerDAO->delete($linner_id);

	$location = "location: ./../../admin/linnersAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>