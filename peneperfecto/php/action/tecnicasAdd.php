<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tecnicasDAO.php';
include '../entities/tecnicas.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=tecnicasAdd";


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

$tecnicasDAO = new tecnicasDAO();

$tecnicas = new tecnicas();

$descripcion = accents2HTML($descripcion);  //     utilizar para eliminar tildes y � 

$tecnicas->setid($id);
$tecnicas->settitulo($titulo);
$tecnicas->setdescripcion($descripcion);
if (is_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $tecnicas->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$tecnicasDAO->save($tecnicas);

$id = $tecnicasDAO->getLastId();

$location = "location: ./../../admin/menuAdmin.php?s=tecnicasEdit&a=".$id;

header($location.'&ok');
exit;


?>