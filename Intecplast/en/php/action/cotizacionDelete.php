<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/cotizacionDAO.php';
include '../entities/cotizacion.php';

  $cotizacion_id = $_GET['id'];
  $cotizacionDAO = new cotizacionDAO();
  $cotizacion = new cotizacion();
  $cotizacion = $cotizacionDAO->getById($cotizacion_id);


$result = $cotizacionDAO->delete($cotizacion_id);

$location = "location: ./../../admin/menuAdmin.php?s=view_cotizaciones&delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>