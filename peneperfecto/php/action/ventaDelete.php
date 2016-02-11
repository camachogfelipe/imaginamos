<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';

$id = $_GET['id'];

$ventaDAO = new ventaDAO();

$venta = new venta();
$venta = $ventaDAO->getById($id);
$result = $ventaDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=venta&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>