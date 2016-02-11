<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/unidadDAO.php';
include '../entities/unidad.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';


$unidad_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "producto_unidadCap";

$validacion = $productoDAO->buscarAtributo($atributo,$unidad_id);


if ($validacion != null) {

	$location = "location: ./../../admin/unidadesAdd.php?error=";

	header($location.'1');
	exit;

}
else{

	$unidadDAO = new unidadDAO();

	$unidad = new unidad();

	$result = $unidadDAO->delete($unidad_id);

	$location = "location: ./../../admin/unidadesAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>