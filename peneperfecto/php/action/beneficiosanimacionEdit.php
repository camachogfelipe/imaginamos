<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/beneficiosanimacionDAO.php';
include '../entities/beneficiosanimacion.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$animacion = $_POST['animacion'];

$location = "location: ./../../admin/menuAdmin.php?s=beneficiosanimacionEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$beneficiosanimacionDAO = new beneficiosanimacionDAO();

$beneficiosanimacion = new beneficiosanimacion();

$beneficiosanimacion = $beneficiosanimacionDAO->getById($id);

$beneficiosanimacion->setid($id);
if (is_uploaded_file($HTTP_POST_FILES['animacion']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['animacion']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$beneficiosanimacion->getanimacion());


        move_uploaded_file($HTTP_POST_FILES['animacion']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $beneficiosanimacion->setanimacion($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$beneficiosanimacionDAO->update($beneficiosanimacion);

$location = "location: ./../../admin/menuAdmin.php?s=beneficiosanimacionEdit&a=".$id;

header($location.'&ok2');
exit;


?>