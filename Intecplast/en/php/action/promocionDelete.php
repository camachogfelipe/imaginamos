<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/promocionDAO.php';
include '../entities/promocion.php';

$promocion_id = $_GET['id'];

$promocionDAO = new promocionDAO();

$promocion = new promocion();
$promocion = $promocionDAO->getById($promocion_id);


    @unlink("./../..".$promocion->getImagen_e());
    @unlink("./../..".$promocion->getImagen_i());


$result = $promocionDAO->delete($promocion_id);

$location = "location: ./../../admin/menuAdmin.php?s=admPromociones&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>