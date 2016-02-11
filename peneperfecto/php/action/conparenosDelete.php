<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/conparenosDAO.php';
include '../entities/conparenos.php';

$id = $_GET['id'];

$conparenosDAO = new conparenosDAO();

$conparenos = new conparenos();
$conparenos = $conparenosDAO->getById($id);
$result = $conparenosDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=conparenos&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>