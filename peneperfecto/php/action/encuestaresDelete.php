<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/encuestaresDAO.php';
include '../entities/encuestares.php';

$id = $_GET['id'];

$encuestaresDAO = new encuestaresDAO();

$encuestares = new encuestares();
$encuestares = $encuestaresDAO->getById($id);
$result = $encuestaresDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=encuestares&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>