<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ciudadDAO.php';
include '../entities/ciudad.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

//paises
include '../dao/paisDAO.php';
include '../entities/pais.php';

$ciudad_id = $_POST['id'];
$ciudad_nombre_e = $_POST['esp'];
$ciudad_nombre_i = $_POST['ing'];
$pais_nombre_e = $_POST['pais'];

$paisDAO = new paisDAO();
$pais = new pais();
$pais = $paisDAO->getIdByNombre($pais_nombre_e);
$pais_id = $pais->getid();


$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$ciudad_id = str_replace(',', '.',$ciudad_id);
if (!validarNumero($ciudad_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($ciudad_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($ciudad_nombre_i)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pais_id)){
    header($location.'&error1');
    exit;
}

$ciudadDAO = new ciudadDAO();

$ciudad = new ciudad();

$ciudad = $ciudadDAO->getById($ciudad_id);

$ciudad_nombre_e = accents2HTML($ciudad_nombre_e);  //     utilizar para eliminar tildes y � 
$ciudad_nombre_i = accents2HTML($ciudad_nombre_i);  //     utilizar para eliminar tildes y � 

$ciudad->setid($ciudad_id);
$ciudad->setnombre_e($ciudad_nombre_e);
$ciudad->setnombre_i($ciudad_nombre_i);
$ciudad->setpaisId($pais_id);

$ciudadDAO->update($ciudad);

$location = "location: ./../../admin/ciudadesAdd.php?edit=";

header($location.'1');
exit;


?>