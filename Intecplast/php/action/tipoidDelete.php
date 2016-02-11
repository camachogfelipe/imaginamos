<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tipoidDAO.php';
include '../entities/tipoid.php';

$tipoid_id = $_GET['id'];

$tipoidDAO = new tipoidDAO();

$tipoid = new tipoid();

$result = $tipoidDAO->delete($tipoid_id);

$location = "location: ./../../admin/tipoidsAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>