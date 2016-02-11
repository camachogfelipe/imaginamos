<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/lineaDAO.php';
include '../entities/linea.php';

$linea_id = $_GET['id'];

$lineaDAO = new lineaDAO();

$linea = new linea();

$result = $lineaDAO->delete($linea_id);

$location = "location: ./../../admin/lineasAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>