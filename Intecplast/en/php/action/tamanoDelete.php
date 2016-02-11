<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tamanoDAO.php';
include '../entities/tamano.php';

$tamano_id = $_GET['id'];

$tamanoDAO = new tamanoDAO();

$tamano = new tamano();

$result = $tamanoDAO->delete($tamano_id);

$location = "location: ./../../admin/tamanosAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>