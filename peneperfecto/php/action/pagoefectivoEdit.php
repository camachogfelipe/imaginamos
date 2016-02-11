<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/pagoefectivoDAO.php';
include '../entities/pagoefectivo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$Texto = $_POST['Texto'];

$location = "location: ./../../admin/menuAdmin.php?s=pagoefectivoEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($Texto)){
    header($location.'&error1');
    exit;
}

$pagoefectivoDAO = new pagoefectivoDAO();

$pagoefectivo = new pagoefectivo();

$pagoefectivo = $pagoefectivoDAO->getById($id);

$Texto = accents2HTML($Texto);  //     utilizar para eliminar tildes y ñ 

$pagoefectivo->setid($id);
$pagoefectivo->settitulo($titulo);
$pagoefectivo->setTexto($Texto);

$pagoefectivoDAO->update($pagoefectivo);

$location = "location: ./../../admin/menuAdmin.php?s=pagoefectivoEdit&a=".$id;

header($location.'&ok2');
exit;


?>