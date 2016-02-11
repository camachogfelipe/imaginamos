<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/preguntastituloDAO.php';
include '../entities/preguntastitulo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];

$location = "location: ./../../admin/menuAdmin.php?s=preguntastituloEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

$preguntastituloDAO = new preguntastituloDAO();

$preguntastitulo = new preguntastitulo();

$preguntastitulo = $preguntastituloDAO->getById($id);

$preguntastitulo->setid($id);
$preguntastitulo->settitulo($titulo);

$preguntastituloDAO->update($preguntastitulo);

$location = "location: ./../../admin/menuAdmin.php?s=preguntastituloEdit&a=".$id;

header($location.'&ok2');
exit;


?>