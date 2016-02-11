<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/registrofracesDAO.php';
include '../entities/registrofraces.php';

$id = $_GET['id'];

$registrofracesDAO = new registrofracesDAO();

$registrofraces = new registrofraces();
$registrofraces = $registrofracesDAO->getById($id);
$result = $registrofracesDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=registrofraces&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>