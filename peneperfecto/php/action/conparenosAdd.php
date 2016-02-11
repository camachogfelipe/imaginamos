<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/conparenosDAO.php';
include '../entities/conparenos.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$caracteristica = $_POST['caracteristica'];
$pp = $_POST['pp'];
$otro = $_POST['otro'];

$location = "location: ./../../admin/menuAdmin.php?s=conparenosAdd";


if (!validarTexto($caracteristica)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pp)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($otro)){
    header($location.'&error1');
    exit;
}

$conparenosDAO = new conparenosDAO();

$conparenos = new conparenos();

$pp = accents2HTML($pp);  //     utilizar para eliminar tildes y � 

$otro = accents2HTML($otro);  //     utilizar para eliminar tildes y � 

$conparenos->setid($id);
$conparenos->setcaracteristica($caracteristica);
$conparenos->setpp($pp);
$conparenos->setotro($otro);

$conparenosDAO->save($conparenos);

$id = $conparenosDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=conparenosEdit&a=".$id;

header($location.'&ok');
exit;


?>