<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/profesionDAO.php';
include '../entities/profesion.php';

$profesion_id = $_GET['id'];

$profesionDAO = new profesionDAO();

$profesion = new profesion();

$result = $profesionDAO->delete($profesion_id);

$location = "location: ./../../admin/admProfesiones.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>