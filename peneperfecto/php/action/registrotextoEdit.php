<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/registrotextoDAO.php';
include '../entities/registrotexto.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=registrotextoEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$registrotextoDAO = new registrotextoDAO();

$registrotexto = new registrotexto();

$registrotexto = $registrotextoDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y ñ 

$registrotexto->setid($id);
$registrotexto->settexto($texto);

$registrotextoDAO->update($registrotexto);

$location = "location: ./../../admin/menuAdmin.php?s=registrotextoEdit&a=".$id;

header($location.'&ok2');
exit;


?>