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


$unidad_id = $_POST['id'];
$unidad_nombre = $_POST['unidad'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$unidad_id = str_replace(',', '.',$unidad_id);
if (!validarNumero($unidad_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($unidad_nombre)){
    header($location.'&error1');
    exit;
}


$unidadDAO = new unidadDAO();

$unidad = new unidad();

$unidad = $unidadDAO->getById($unidad_id);

$unidad_nombre = accents2HTML($unidad_nombre);  //     utilizar para eliminar tildes y � 

$unidad->setid($unidad_id);
$unidad->setnombre($unidad_nombre);

$unidadDAO->update($unidad);

$location = "location: ./../../admin/unidadesAdd.php?edit=";

header($location.'1');
exit;


?>