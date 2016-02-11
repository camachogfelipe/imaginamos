<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/bocaDAO.php';
include '../entities/boca.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';


$boca_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "boca_id";

$validacion = $productoDAO->buscarAtributo($atributo,$boca_id);


if ($validacion != null) {

	$location = "location: ./../../admin/bocasAdd.php?error=";

	header($location.'1');
	exit;

}
else{
	$bocaDAO = new bocaDAO();

	$boca = new boca();

	$result = $bocaDAO->delete($boca_id);

	$location = "location: ./../../admin/bocasAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>