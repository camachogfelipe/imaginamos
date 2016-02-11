<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/imagenDAO.php';
include '../entities/imagen.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';



$tituloEspanol = "No title";
$descripcionEspanol = "No Description";
$tituloIngles = "No title";
$descripcionIngles = "No Description";

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$imagenDAO = new imagenDAO();

$imagen_nw = new imagen();


$tituloEspanol = accents2HTML($tituloEspanol);
$descripcionEspanol = accents2HTML($descripcionEspanol);
$tituloIngles = accents2HTML($tituloIngles);
$descripcionIngles = accents2HTML($descripcionIngles);

$imagen_nw->setId($imagen_id);
$imagen_nw->setSeccionId(1);
$imagen_nw->setFlagId(5);
$imagen_nw->setTitulo_e($tituloEspanol);
$imagen_nw->setDescripcion_e($descripcionEspanol);
$imagen_nw->setEnlace_e('');
$imagen_nw->setTitulo_i($tituloIngles);
$imagen_nw->setDescripcion_i($descripcionIngles);
$imagen_nw->setEnlace_i('');



if (is_uploaded_file($_FILES['imagenEspanol']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenEspanol']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenEspanol']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $imagen_nw->setImagen_e($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}


if (is_uploaded_file($_FILES['imagenIngles']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenIngles']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenIngles']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $imagen_nw->setImagen_i($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$imagenDAO->save($imagen_nw);

$location = "location: ./../../admin/menuAdmin.php?s=viewGaleriaOficinas&add=1";

header($location);
exit;
?>