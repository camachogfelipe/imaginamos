<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/profesionDAO.php';
include '../entities/profesion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$profesion_id = $_POST['id'];
$profesion_nombre_e = $_POST['esp'];
$profesion_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$profesion_id = str_replace(',', '.',$profesion_id);
if (!validarNumero($profesion_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($profesion_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($profesion_nombre_i)){
    header($location.'&error1');
    exit;
}

$profesionDAO = new profesionDAO();

$profesion = new profesion();

$profesion = $profesionDAO->getById($profesion_id);

$profesion_nombre_e = accents2HTML($profesion_nombre_e);  //     utilizar para eliminar tildes y � 
$profesion_nombre_i = accents2HTML($profesion_nombre_i);  //     utilizar para eliminar tildes y � 

$profesion->setId($profesion_id);
$profesion->setNombre_e($profesion_nombre_e);
$profesion->setNombre_i($profesion_nombre_i);

$profesionDAO->update($profesion);

$location = "location: ./../../admin/admProfesiones.php?edit=";

header($location.'1');
exit;


?>