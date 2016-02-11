<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tipoidDAO.php';
include '../entities/tipoid.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$tipoid_nombre = $_POST['esp'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$tipoidDAO = new tipoidDAO();

$tipoid = new tipoid();

$tipoid_nombre = accents2HTML($tipoid_nombre);  //     utilizar para eliminar tildes y � 

$tipoid->setid($tipoid_id);
$tipoid->setnombre($tipoid_nombre);


$tipoidDAO->save($tipoid);

$location = "location: ./../../admin/tipoidsAdd.php?add=";

header($location.'1');
exit;


?>