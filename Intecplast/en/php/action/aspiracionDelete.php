<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/aspiracionDAO.php';
include '../entities/aspiracion.php';

$aspiracion_id = $_GET['id'];

$aspiracionDAO = new aspiracionDAO();

$aspiracion = new aspiracion();

$result = $aspiracionDAO->delete($aspiracion_id);

$location = "location: ./../../admin/admAspiracion.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>