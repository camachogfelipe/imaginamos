<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/empresasubtituloDAO.php';
include '../entities/empresasubtitulo.php';

$id = $_GET['id'];

$empresasubtituloDAO = new empresasubtituloDAO();

$empresasubtitulo = new empresasubtitulo();
$empresasubtitulo = $empresasubtituloDAO->getById($id);


    @unlink("./../..".$empresasubtitulo->getimagen());


$result = $empresasubtituloDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=empresasubtitulo&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>