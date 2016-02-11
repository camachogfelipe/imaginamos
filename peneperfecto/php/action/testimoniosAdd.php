<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/testimoniosDAO.php';
include '../entities/testimonios.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$fecha = $_POST['fecha'];

$location = "location: ./../../admin/menuAdmin.php?s=testimoniosAdd";


if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($descripcion)){
    header($location.'&error1');
    exit;
}

if (!is_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'])  ){
    header($location.'&error1');
    exit;
}

if (!validarTexto($fecha)){
    header($location.'&error1');
    exit;
}

$testimoniosDAO = new testimoniosDAO();

$testimonios = new testimonios();

$descripcion = accents2HTML($descripcion);  //     utilizar para eliminar tildes y � 

$testimonios->setid($id);
$testimonios->settitulo($titulo);
$testimonios->setdescripcion($descripcion);
if (is_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $testimonios->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}
$testimonios->setfecha($fecha);

$testimoniosDAO->save($testimonios);

$id = $testimoniosDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=testimoniosEdit&a=".$id;

header($location.'&ok');
exit;


?>