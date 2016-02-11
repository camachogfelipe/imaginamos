<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/cotizacionDAO.php';
include '../entities/cotizacion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$id = $_POST['id'];
$fecha = $_POST['fecha'];

$mes = substr($fecha, 0,2);
$dia = substr($fecha, 3,2);
$anio = substr($fecha, 6,4);

$fecha = $anio."-".$mes."-".$dia;

$estado = $_POST['estado'];

$descripcion = $_POST['descripcion'];

$cotizacionDAO = new cotizacionDAO();
$cotizacion = new cotizacion();
$cotizacion = $cotizacionDAO->getById($id);

$descripcion = accents2HTML($descripcion);  //     utilizar para eliminar tildes y � 

$cotizacion->setId($id);
$cotizacion->setFechaRespuesta($fecha);
$cotizacion->setEstadoId($estado);
$cotizacion->setObservacion($descripcion);

$cotizacionDAO->update($cotizacion);
$location = "location: ./../../admin/menuAdmin.php?s=viewCotizacion&edit=1&id=".$id;

header($location);
exit;

?>