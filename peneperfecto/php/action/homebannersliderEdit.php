<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/homebannersliderDAO.php';
include '../entities/homebannerslider.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=homebannersliderEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$homebannersliderDAO = new homebannersliderDAO();

$homebannerslider = new homebannerslider();

$homebannerslider = $homebannersliderDAO->getById($id);

$homebannerslider->setid($id);
if (is_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$homebannerslider->getimagen());


        move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $homebannerslider->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$homebannersliderDAO->update($homebannerslider);

$location = "location: ./../../admin/menuAdmin.php?s=homebannersliderEdit&a=".$id;

header($location.'&ok2');
exit;


?>