<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/homeintroduccionDAO.php';
include '../entities/homeintroduccion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=homeintroduccionEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$homeintroduccionDAO = new homeintroduccionDAO();

$homeintroduccion = new homeintroduccion();

$homeintroduccion = $homeintroduccionDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y ñ 

$homeintroduccion->setid($id);
$homeintroduccion->settitulo($titulo);
$homeintroduccion->settexto($texto);

$homeintroduccionDAO->update($homeintroduccion);

$location = "location: ./../../admin/menuAdmin.php?s=homeintroduccionEdit&a=".$id;

header($location.'&ok2');
exit;


?>