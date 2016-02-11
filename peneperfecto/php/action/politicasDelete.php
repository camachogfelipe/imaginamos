<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/politicasDAO.php';
include '../entities/politicas.php';

$id = $_GET['id'];

$politicasDAO = new politicasDAO();

$politicas = new politicas();
$politicas = $politicasDAO->getById($id);
$result = $politicasDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=politicas&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>