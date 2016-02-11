<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/formaDAO.php';
include '../entities/forma.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$forma_nombre_e = $_POST['esp'];
$forma_nombre_i = $_POST['ing'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$formaDAO = new formaDAO();

$forma = new forma();

$forma_nombre_e = accents2HTML($forma_nombre_e);  //     utilizar para eliminar tildes y � 
$forma_nombre_i = accents2HTML($forma_nombre_i);  //     utilizar para eliminar tildes y � 

$forma->setid($forma_id);
$forma->setnombre_e($forma_nombre_e);
$forma->setnombre_i($forma_nombre_i);

if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $forma->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$formaDAO->save($forma);

$forma_id = $formaDAO->getLastId();

$location = "location: ./../../admin/formasAdd.php?add=";

header($location.'1');
exit;


?>