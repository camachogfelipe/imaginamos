<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/hometextobtnpenepDAO.php';
include '../entities/hometextobtnpenep.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=hometextobtnpenepEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$hometextobtnpenepDAO = new hometextobtnpenepDAO();

$hometextobtnpenep = new hometextobtnpenep();

$hometextobtnpenep = $hometextobtnpenepDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y ñ 

$hometextobtnpenep->setid($id);
$hometextobtnpenep->settexto($texto);

$hometextobtnpenepDAO->update($hometextobtnpenep);

$location = "location: ./../../admin/menuAdmin.php?s=hometextobtnpenepEdit&a=".$id;

header($location.'&ok2');
exit;


?>