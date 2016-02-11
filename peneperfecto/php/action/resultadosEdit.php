<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/resultadosDAO.php';
include '../entities/resultados.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$banner = $_POST['banner'];
$texto = $_POST['texto'];

$location = "location: ./../../admin/menuAdmin.php?s=resultadosEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

$resultadosDAO = new resultadosDAO();

$resultados = new resultados();

$resultados = $resultadosDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y � 
$texto = str_replace('\\', '', $texto);
$resultados->setid($id);
$resultados->settitulo($titulo);
if (is_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['banner']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$resultados->getbanner());


        move_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $resultados->setbanner($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}
$resultados->settexto($texto);

$resultadosDAO->update($resultados);

$location = "location: ./../../admin/menuAdmin.php?s=resultadosEdit&a=".$id;

header($location.'&ok2');
exit;


?>