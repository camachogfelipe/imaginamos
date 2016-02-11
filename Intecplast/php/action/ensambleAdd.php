<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ensambleDAO.php';
include '../entities/ensamble.php';
include '../dao/productoDAO.php';
include '../entities/producto.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$codigoBase = $_POST['codigoBase'];
$codigoComplemento = $_POST['codigoComplemento'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";

$productoDAO = new productoDAO();

$validacionBase = $productoDAO->getById($codigoBase);
if ($validacionBase == NULL ) {
    $location = "location: ./../../admin/menuAdmin.php?s=nwEnsamble&error=1";
    header($location);
    exit;   
}

$validacionComplemento = $productoDAO->getById($codigoComplemento);
if ($validacionComplemento == NULL ) {
    $location = "location: ./../../admin/menuAdmin.php?s=nwEnsamble&error=2";
    header($location);
    exit;   
}

$ensambleDAO = new ensambleDAO();
$ensamble = new ensamble();

$validacionCombinacion = $ensambleDAO->getCombinacion($codigoBase,$codigoComplemento);
var_dump($validacionCombinacion);

if ($validacionCombinacion!=null) {
    $location = "location: ./../../admin/menuAdmin.php?s=nwEnsamble&error=3";

    header($location);
    exit;
}else{



$ensamble->setId($id);
$ensamble->setBase($codigoBase);
$ensamble->setComplemento($codigoComplemento);


if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $ensamble->setImagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$ensambleDAO->save($ensamble);

$location = "location: ./../../admin/menuAdmin.php?s=view_ensambles&add=";

header($location.'1');
exit;

}

?>