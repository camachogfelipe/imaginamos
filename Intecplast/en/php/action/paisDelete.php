<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/paisDAO.php';
include '../entities/pais.php';

$pais_id = $_GET['id'];

$paisDAO = new paisDAO();

$pais = new pais();

$result = $paisDAO->delete($pais_id);

$location = "location: ./../../admin/paisesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>