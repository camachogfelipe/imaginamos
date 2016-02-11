<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/claseDAO.php';
include '../entities/clase.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$clase_id = $_POST['id'];
$clase_nombre_e = $_POST['esp'];
$clase_nombre_i = $_POST['ing'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$clase_id = str_replace(',', '.',$clase_id);
if (!validarNumero($clase_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($clase_nombre_e)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($clase_nombre_i)){
    header($location.'&error1');
    exit;
}

$claseDAO = new claseDAO();

$clase = new clase();

$clase = $claseDAO->getById($clase_id);

$clase_nombre_e = accents2HTML($clase_nombre_e);  //     utilizar para eliminar tildes y � 
$clase_nombre_i = accents2HTML($clase_nombre_i);  //     utilizar para eliminar tildes y � 

$clase->setid($clase_id);
$clase->setnombre_e($clase_nombre_e);
$clase->setnombre_i($clase_nombre_i);
if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$clase->getimagen());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $clase->setimagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$claseDAO->update($clase);

$location = "location: ./../../admin/clasesEdit.php?edit=1&id=".$clase_id;

header($location);
exit;


?>