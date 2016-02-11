<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tamanoDAO.php';
include '../entities/tamano.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';

$tamano_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "tamano_id";

$validacion = $productoDAO->buscarAtributo($atributo,$tamano_id);


if ($validacion != null) {

	$location = "location: ./../../admin/tamanosAdd.php?error=";

	header($location.'1');
	exit;

}
else{

	$tamanoDAO = new tamanoDAO();

	$tamano = new tamano();

	$result = $tamanoDAO->delete($tamano_id);

	$location = "location: ./../../admin/tamanosAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>