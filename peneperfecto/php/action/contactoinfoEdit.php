<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/contactoinfoDAO.php';
include '../entities/contactoinfo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$fax = $_POST['fax'];
$mail = $_POST['mail'];
$ciudad = $_POST['ciudad'];

$location = "location: ./../../admin/menuAdmin.php?s=contactoinfoEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($direccion)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($telefono)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($celular)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($fax)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($mail)){
    header($location.'&error1');
    exit;
}
/*
if (!validarTexto($ciudad)){
    header($location.'&error1');
    exit;
}*/

$contactoinfoDAO = new contactoinfoDAO();

$contactoinfo = new contactoinfo();

$contactoinfo = $contactoinfoDAO->getById($id);

$contactoinfo->setid($id);
$contactoinfo->setdireccion($direccion);
$contactoinfo->settelefono($telefono);
$contactoinfo->setcelular($celular);
$contactoinfo->setfax($fax);
$contactoinfo->setmail($mail);
$contactoinfo->setciudad($ciudad);

$contactoinfoDAO->update($contactoinfo);

$location = "location: ./../../admin/menuAdmin.php?s=contactoinfoEdit&a=".$id;

header($location.'&ok2');
exit;


?>