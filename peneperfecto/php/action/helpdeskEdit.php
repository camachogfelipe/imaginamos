<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/helpdeskDAO.php';
include '../entities/helpdesk.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=helpdeskEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$helpdeskDAO = new helpdeskDAO();

$helpdesk = new helpdesk();

$helpdesk = $helpdeskDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y � 

$helpdesk->setid($id);
$helpdesk->settexto($texto);

$helpdeskDAO->update($helpdesk);

$location = "location: ./../../admin/menuAdmin.php?s=helpdeskEdit&a=".$id;

header($location.'&ok2');
exit;


?>