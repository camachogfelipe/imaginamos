<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/formasdepagoDAO.php';
include '../entities/formasdepago.php';

$id = $_GET['id'];

$formasdepagoDAO = new formasdepagoDAO();

$formasdepago = new formasdepago();
$formasdepago = $formasdepagoDAO->getById($id);


    @unlink("./../..".$formasdepago->getimagen());


$result = $formasdepagoDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=formasdepago&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>