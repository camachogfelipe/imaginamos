<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/sublineaDAO.php';
include '../entities/sublinea.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$sublinea_id = $_POST['id'];
$sublinea_nombre_e = $_POST['esp'];
$sublinea_nombre_i = $_POST['ing'];
$linea_id = $_POST['linea'];


$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$sublinea_id = str_replace(',', '.',$sublinea_id);
if (!validarNumero($sublinea_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($sublinea_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($sublinea_nombre_i)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($linea_id)){
    header($location.'&error1');
    exit;
}

$sublineaDAO = new sublineaDAO();

$sublinea = new sublinea();

$sublinea = $sublineaDAO->getById($sublinea_id);

$sublinea_nombre_e = accents2HTML($sublinea_nombre_e);  //     utilizar para eliminar tildes y � 
$sublinea_nombre_i = accents2HTML($sublinea_nombre_i);  //     utilizar para eliminar tildes y � 

$sublinea->setid($sublinea_id);
$sublinea->setnombre_e($sublinea_nombre_e);
$sublinea->setnombre_i($sublinea_nombre_i);
$sublinea->setLineaId($linea_id);

$sublineaDAO->update($sublinea);

$location = "location: ./../../admin/sublineasAdd.php?edit=";

header($location.'1');
exit;


?>