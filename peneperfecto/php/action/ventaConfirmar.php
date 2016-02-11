<?php

include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';

//codigo_respuesta_pol
//$referenciaPol = $_POST['ref_pol'];

$codigo_respuesta_pol = $_POST['codigo_respuesta_pol'];
$ref_venta = $_POST['ref_venta'];

$ventaDAO = new ventaDAO();

$venta = new venta();
$venta = $ventaDAO->getById($ref_venta);
$venta->setconfirmacion($codigo_respuesta_pol);
$result = $ventaDAO->update($venta);

if($_POST['control'] == 1){
    $location = "location: ./../../admin/menuAdmin.php?s=ventaEstado&a=".$ref_venta;

    header($location.'&ok2');
    exit;
}
exit;

?>