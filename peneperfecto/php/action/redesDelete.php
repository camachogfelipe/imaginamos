<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/redesDAO.php';
include '../entities/redes.php';

$id = $_GET['id'];

$redesDAO = new redesDAO();

$redes = new redes();
$redes = $redesDAO->getById($id);
$result = $redesDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=redes&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>