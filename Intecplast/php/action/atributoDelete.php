<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/atributoDAO.php';
include '../entities/atributo.php';

include '../dao/productoDAO.php';
include '../entities/producto.php';

$atributo_id = $_GET['id'];



$productoDAO = new productoDAO();

$atributo = "producto_atributo1";
$atributo2 = "producto_atributo2";

$validacion = $productoDAO->buscarAtributo($atributo,$atributo_id);

$validacion2 = $productoDAO->buscarAtributo($atributo2,$atributo_id);


if ($validacion != null) {

	$location = "location: ./../../admin/atributosAdd.php?error=";

	header($location.'1');
	exit;

}else if($validacion2 != null){
	$location = "location: ./../../admin/atributosAdd.php?error=";

	header($location.'1');
	exit;
}
else{

	$atributoDAO = new atributoDAO();

	$atributo = new atributo();

	$result = $atributoDAO->delete($atributo_id);

	$location = "location: ./../../admin/atributosAdd.php?delete=";

	if (!$result) {
	    header($location.'&error');
	    exit;
	}

	header($location.'1');
	exit;
}

?>