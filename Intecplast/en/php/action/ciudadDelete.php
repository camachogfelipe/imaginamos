<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ciudadDAO.php';
include '../entities/ciudad.php';

$ciudad_id = $_GET['id'];

$ciudadDAO = new ciudadDAO();

$ciudad = new ciudad();

$ciudad = $ciudadDAO->getById($ciudad_id);

$result = $ciudadDAO->delete($ciudad_id);

$location = "location: ./../../admin/ciudadesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>