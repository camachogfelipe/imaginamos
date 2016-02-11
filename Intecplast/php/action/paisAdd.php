<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/paisDAO.php';
include '../entities/pais.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$pais_nombre_e = $_POST['esp'];
$pais_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$paisDAO = new paisDAO();

$pais = new pais();

$pais_nombre_e = accents2HTML($pais_nombre_e);  //     utilizar para eliminar tildes y � 
$pais_nombre_i = accents2HTML($pais_nombre_i);  //     utilizar para eliminar tildes y � 

$pais->setid($pais_id);
$pais->setnombre_e($pais_nombre_e);
$pais->setnombre_i($pais_nombre_i);


$paisDAO->save($pais);

$location = "location: ./../../admin/paisesAdd.php?add=";

header($location.'1');
exit;


?>