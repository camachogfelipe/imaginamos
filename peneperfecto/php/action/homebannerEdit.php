<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/homebannerDAO.php';
include '../entities/homebanner.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$banner = $_POST['banner'];

$location = "location: ./../../admin/menuAdmin.php?s=homebannerEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$homebannerDAO = new homebannerDAO();

$homebanner = new homebanner();

$homebanner = $homebannerDAO->getById($id);

$homebanner->setid($id);
if (is_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['banner']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$homebanner->getbanner());


        move_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $homebanner->setbanner($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$homebannerDAO->update($homebanner);

$location = "location: ./../../admin/menuAdmin.php?s=homebannerEdit&a=".$id;

header($location.'&ok2');
exit;


?>