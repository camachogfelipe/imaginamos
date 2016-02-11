<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/unidadDAO.php';
include '../entities/unidad.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$unidad_nombre= $_POST['unidad'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$unidadDAO = new unidadDAO();

$unidad = new unidad();

$unidad_nombre = accents2HTML($unidad_nombre);  //     utilizar para eliminar tildes y � 

$unidad->setid($unidad_id);
$unidad->setnombre($unidad_nombre);


$unidadDAO->save($unidad);

$location = "location: ./../../admin/unidadesAdd.php?add=";

header($location.'1');
exit;


?>