<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/categoriaDAO.php';
include '../entities/categoria.php';

$categoria_id = $_GET['id'];

$categoriaDAO = new categoriaDAO();

$categoria = new categoria();

$result = $categoriaDAO->delete($categoria_id);

$location = "location: ./../../admin/categoriasAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>