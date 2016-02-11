<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/capacidadDAO.php';
include '../entities/capacidad.php';

$capacidad_id = $_GET['id'];

$capacidadDAO = new capacidadDAO();

$capacidad = new capacidad();

$result = $capacidadDAO->delete($capacidad_id);

$location = "location: ./../../admin/capacidadesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>