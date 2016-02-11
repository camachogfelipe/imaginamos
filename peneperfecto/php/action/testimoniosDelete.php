<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/testimoniosDAO.php';
include '../entities/testimonios.php';

$id = $_GET['id'];

$testimoniosDAO = new testimoniosDAO();

$testimonios = new testimonios();
$testimonios = $testimoniosDAO->getById($id);


    @unlink("./../..".$testimonios->getimagen());


$result = $testimoniosDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=testimonios&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>