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


$tipoid_id = $_POST['id'];
$tipoid_nombre = $_POST['esp'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$tipoid_id = str_replace(',', '.',$tipoid_id);
if (!validarNumero($tipoid_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($tipoid_nombre)){
    header($location.'&error1');
    exit;
}

$tipoidDAO = new tipoidDAO();

$tipoid = new tipoid();

$tipoid = $tipoidDAO->getById($tipoid_id);

$tipoid_nombre = accents2HTML($tipoid_nombre);  //     utilizar para eliminar tildes y � 

$tipoid->setid($tipoid_id);
$tipoid->setnombre($tipoid_nombre);

$tipoidDAO->update($tipoid);

$location = "location: ./../../admin/tipoidsAdd.php?edit=";

header($location.'1');
exit;


?>