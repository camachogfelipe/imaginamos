<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/puntoDAO.php';
include '../entities/punto.php';

$punto_id = $_GET['id'];

$puntoDAO = new puntoDAO();

$punto = new punto();
$punto = $puntoDAO->getById($punto_id);


$result = $puntoDAO->delete($punto_id);

$location = "location: ./../../admin/menuAdmin.php?s=admPuntos&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>