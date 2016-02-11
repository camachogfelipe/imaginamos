<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ejemploDAO.php';
include '../entities/ejemplo.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$producto_codigo = $_POST['id'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";

$ejemploDAO = new ejemploDAO();

$ejemplo = new ejemplo();

$ejemplo->setid($ejemplo_id);
$ejemplo->setproducto_codigo($producto_codigo);

if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $ejemplo->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$ejemploDAO->save($ejemplo);

$ejemplo_id = $ejemploDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=view_productosEjemplos&id=".$producto_codigo."&add=";
header($location.'1');
exit;


?>