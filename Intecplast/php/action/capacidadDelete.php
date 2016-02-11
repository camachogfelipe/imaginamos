<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/capacidadDAO.php';
include '../entities/capacidad.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';

$capacidad_id = $_GET['id'];

$productoDAO = new productoDAO();

$atributo = "capacidad_id";

$validacion = $productoDAO->buscarAtributo($atributo,$capacidad_id);


if ($validacion != null) {

	$location = "location: ./../../admin/capacidadesAdd.php?error=";

	header($location.'1');
	exit;

}
else{

	$capacidadDAO = new capacidadDAO();

	$capacidad = new capacidad();

	$result = $capacidadDAO->delete($capacidad_id);

	$location = "location: ./../../admin/capacidadesAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>