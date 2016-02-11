<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/beneficiosDAO.php';
include '../entities/beneficios.php';

$id = $_GET['id'];

$beneficiosDAO = new beneficiosDAO();

$beneficios = new beneficios();
$beneficios = $beneficiosDAO->getById($id);


    @unlink("./../..".$beneficios->getimagen());


$result = $beneficiosDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=beneficios&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>