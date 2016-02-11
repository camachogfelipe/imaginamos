<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/bocaDAO.php';
include '../entities/boca.php';

$boca_id = $_GET['id'];

$bocaDAO = new bocaDAO();

$boca = new boca();

$result = $bocaDAO->delete($boca_id);

$location = "location: ./../../admin/bocasAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>