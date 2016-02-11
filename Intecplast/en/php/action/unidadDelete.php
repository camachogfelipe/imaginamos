<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/unidadDAO.php';
include '../entities/unidad.php';

$unidad_id = $_GET['id'];

$unidadDAO = new unidadDAO();

$unidad = new unidad();

$result = $unidadDAO->delete($unidad_id);

$location = "location: ./../../admin/unidadesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>