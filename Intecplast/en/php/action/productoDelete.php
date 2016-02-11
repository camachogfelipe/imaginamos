<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/productoDAO.php';
include '../entities/producto.php';

$producto_codigo = $_GET['id'];

$productoDAO = new productoDAO();

$producto = new producto();
$producto = $productoDAO->getById($producto_codigo);


    @unlink("./../..".$producto->getProducto_imagen());


$result = $productoDAO->delete($producto_codigo);

$location = "location: ./../../admin/menuAdmin.php?s=view_productos&delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>