<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/terminosDAO.php';
include '../entities/terminos.php';

$id = $_GET['id'];

$terminosDAO = new terminosDAO();

$terminos = new terminos();
$terminos = $terminosDAO->getById($id);
$result = $terminosDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=terminos&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>