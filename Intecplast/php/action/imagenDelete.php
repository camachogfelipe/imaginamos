<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/imagenDAO.php';
include '../entities/imagen.php';

$imagen_id = $_GET['id'];
$recurso = $_GET['s'];
$imagenDAO = new imagenDAO();

$imagen = new imagen();
$imagen = $imagenDAO->getById($imagen_id);


    @unlink("./../..".$imagen->getImagen_e());
    @unlink("./../..".$imagen->getImagen_i());


$result = $imagenDAO->delete($imagen_id);

$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>