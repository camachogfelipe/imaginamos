<?php session_start();?>
<?php


include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';




$ventaDAO = new ventaDAO;
$countventas = $ventaDAO->getCountVentas();
echo $countventas;

	
?>