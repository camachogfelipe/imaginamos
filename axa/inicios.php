<?php
include 'php/dao/daoConnection.php';

include ("php/dao/restricionpaisplanDAO.php");
include ("php/entities/restricionpaisplan.php");

include ("php/dao/valorcostoplanDAO.php");
include ("php/entities/valorcostoplan.php");

include 'php/dao/paisDAO.php';
include 'php/entities/pais.php';

include ("php/dao/PlanDAO.php");
include ("php/entities/Plan.php");

include 'php/dao/ventaDAO.php';
include 'php/entities/venta.php';

include ("php/dao/terminosDAO.php");
include ("php/entities/terminos.php");

$productoDAO = new TerminosDAO;
$listaPDF = $productoDAO->getTerminosu();


$planDAO = new PlanDAO;

$restriccionpaisesDAO = new restricionpaisplanDAO;

$costoplanDAO = new valorcostoplanDAO;

$paisDAO = new paisDAO;

$ventaDAO = new ventaDAO;
?>