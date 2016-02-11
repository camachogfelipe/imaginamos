<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/estadoDAO.php';
include '../entities/estado.php';

$estado_id = $_GET['id'];

$estadoDAO = new estadoDAO();

$estado = new estado();

$result = $estadoDAO->delete($estado_id);

$location = "location: ./../../admin/estadosAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>