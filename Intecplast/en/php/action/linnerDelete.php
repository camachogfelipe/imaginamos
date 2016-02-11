<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/linnerDAO.php';
include '../entities/linner.php';

$linner_id = $_GET['id'];

$linnerDAO = new linnerDAO();

$linner = new linner();

$result = $linnerDAO->delete($linner_id);

$location = "location: ./../../admin/linnersAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>