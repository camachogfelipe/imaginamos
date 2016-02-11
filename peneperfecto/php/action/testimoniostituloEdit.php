<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/testimoniostituloDAO.php';
include '../entities/testimoniostitulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$location = "location: ./../../admin/menuAdmin.php?s=testimoniostituloEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

$testimoniostituloDAO = new testimoniostituloDAO();

$testimoniostitulo = new testimoniostitulo();

$testimoniostitulo = $testimoniostituloDAO->getById($id);

$testimoniostitulo->setid($id);
$testimoniostitulo->settitulo($titulo);

$testimoniostituloDAO->update($testimoniostitulo);

$location = "location: ./../../admin/menuAdmin.php?s=testimoniostituloEdit&a=".$id;

header($location.'&ok2');
exit;


?>