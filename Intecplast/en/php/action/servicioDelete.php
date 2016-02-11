<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/articuloDAO.php';
include '../entities/articulo.php';

$articulo_id = $_GET['id'];

$articuloDAO = new articuloDAO();

$articulo = new articulo();
$articulo = $articuloDAO->getById($articulo_id);


    @unlink("./../..".$articulo->getImagen_e());
    @unlink("./../..".$articulo->getImagen_i());


$result = $articuloDAO->delete($articulo_id);

$location = "location: ./../../admin/menuAdmin.php?s=admServicios&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>