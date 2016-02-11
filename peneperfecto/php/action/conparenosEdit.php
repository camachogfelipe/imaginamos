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

$location = "location: ./../../admin/menuAdmin.php?s=conparenosEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

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

$conparenos = $conparenosDAO->getById($id);

$pp = accents2HTML($pp);  //     utilizar para eliminar tildes y ñ 

$otro = accents2HTML($otro);  //     utilizar para eliminar tildes y ñ 

$conparenos->setid($id);
$conparenos->setcaracteristica($caracteristica);
$conparenos->setpp($pp);
$conparenos->setotro($otro);

$conparenosDAO->update($conparenos);

$location = "location: ./../../admin/menuAdmin.php?s=conparenosEdit&a=".$id;

header($location.'&ok2');
exit;


?>