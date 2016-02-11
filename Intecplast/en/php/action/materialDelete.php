<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/materialDAO.php';
include '../entities/material.php';

$material_id = $_GET['id'];

$materialDAO = new materialDAO();

$material = new material();

$result = $materialDAO->delete($material_id);

$location = "location: ./../../admin/materialesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>