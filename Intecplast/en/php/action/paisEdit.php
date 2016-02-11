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


$pais_id = $_POST['id'];
$pais_nombre_e = $_POST['esp'];
$pais_nombre_i = $_POST['ing'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$pais_id = str_replace(',', '.',$pais_id);
if (!validarNumero($pais_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pais_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pais_nombre_i)){
    header($location.'&error1');
    exit;
}

$paisDAO = new paisDAO();

$pais = new pais();

$pais = $paisDAO->getById($pais_id);

$pais_nombre_e = accents2HTML($pais_nombre_e);  //     utilizar para eliminar tildes y � 
$pais_nombre_i = accents2HTML($pais_nombre_i);  //     utilizar para eliminar tildes y � 

$pais->setid($pais_id);
$pais->setnombre_e($pais_nombre_e);
$pais->setnombre_i($pais_nombre_i);

$paisDAO->update($pais);

$location = "location: ./../../admin/paisesAdd.php?edit=";

header($location.'1');
exit;


?>