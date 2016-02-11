<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/sublineaDAO.php';
include '../entities/sublinea.php';


include '../dao/productoDAO.php';
include '../entities/producto.php';

$sublinea_id = $_GET['id'];


$productoDAO = new productoDAO();

$atributo = "sublinea_id";

$validacion = $productoDAO->buscarAtributo($atributo,$sublinea_id);


if ($validacion != null) {

	$location = "location: ./../../admin/sublineasAdd.php?error=";

	header($location.'1');
	exit;

}
else{
	
	$sublineaDAO = new sublineaDAO();

	$sublinea = new sublinea();

	$sublinea = $sublineaDAO->getById($sublinea_id);

	$result = $sublineaDAO->delete($sublinea_id);

	$location = "location: ./../../admin/sublineasAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;

}

?>