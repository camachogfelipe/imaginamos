<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/promocionDAO.php';
include '../entities/promocion.php';

$promocion_id = $_POST['id'];

$promocionDAO = new promocionDAO();

$principalActual = new promocion();
$principalActual = $promocionDAO->getByPrincipal();

if ($principalActual!=NULL) {
	
	$principalActual->setDestacada(0);
	$promocionDAO->asigPrincipal($principalActual);
	
}

$promocion = new promocion();
$promocion = $promocionDAO->getById($promocion_id);

$promocion->setDestacada(1);

$result = $promocionDAO->asigPrincipal($promocion);

$location = "location: ./../../admin/promocionPrincipalLand.php";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>