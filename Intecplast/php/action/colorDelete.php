<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/colorDAO.php';
include '../entities/color.php';


include '../dao/productoDAO.php';
include '../entities/producto.php';

$color_id = $_GET['id'];


$productoDAO = new productoDAO();

$atributo = "color_id";

$validacion = $productoDAO->buscarAtributo($atributo,$color_id);


if ($validacion != null) {

	$location = "location: ./../../admin/coloresAdd.php?error=";

	header($location.'1');
	exit;

}
else{
	$colorDAO = new colorDAO();

	$color = new color();

	$result = $colorDAO->delete($color_id);

	$location = "location: ./../../admin/coloresAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>