<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/homebeneficiosDAO.php';
include '../entities/homebeneficios.php';

$id = $_GET['id'];

$homebeneficiosDAO = new homebeneficiosDAO();

$homebeneficios = new homebeneficios();
$homebeneficios = $homebeneficiosDAO->getById($id);


    @unlink("./../..".$homebeneficios->geticono());


$result = $homebeneficiosDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=homebeneficios&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>