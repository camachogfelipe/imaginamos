<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tecnicastituloDAO.php';
include '../entities/tecnicastitulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$location = "location: ./../../admin/menuAdmin.php?s=tecnicastituloEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

$tecnicastituloDAO = new tecnicastituloDAO();

$tecnicastitulo = new tecnicastitulo();

$tecnicastitulo = $tecnicastituloDAO->getById($id);

$tecnicastitulo->setid($id);
$tecnicastitulo->settitulo($titulo);

$tecnicastituloDAO->update($tecnicastitulo);

$location = "location: ./../../admin/menuAdmin.php?s=tecnicastituloEdit&a=".$id;

header($location.'&ok2');
exit;


?>