<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ejemploDAO.php';
include '../entities/ejemplo.php';

$imagen_id = $_GET['id'];
$producto = $_GET['producto'];


$ejemploDAO = new ejemploDAO();
$ejemplo = new ejemplo();

$ejemplo = $ejemploDAO->getById($imagen_id);

    @unlink("./../..".$ejemplo->getimagen());

$result = $ejemploDAO->delete($imagen_id);

$location = "location: ./../../admin/menuAdmin.php?s=view_productosEjemplos&id=".$producto."&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>