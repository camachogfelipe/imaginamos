<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';
include '../dao/productoDAO.php';
include '../entities/producto.php';

$productoDAO = new productoDAO();

$producto = new producto();

$validacion = $productoDAO->getById($_POST['cod']);

if ($validacion != null) {
$location = "location: ./../../admin/menuAdmin.php?s=nwProducto&error=1";

header($location.'1');
exit;
}


$producto_codigo = $_POST['cod'];



$producto_descripcion = $_POST['des'];
$producto_nombre = $_POST['nom'];

$producto_descripcion_i = $_POST['des_i'];
$producto_nombre_i = $_POST['nom_i'];

$categoria_id = $_POST['categoria'];

$sublinea_id = $_POST['sublinea'];


$forma_id = $_POST['forma'];


if ($_POST['atributo1']=="N/A") {
   $producto_atributo1=1;         
}
else {
    $producto_atributo1 = $_POST['atributo1'];
}


if ($_POST['atributo2']=="N/A") {
    $producto_atributo2=1;         
}
else {
    $producto_atributo2 = $_POST['atributo2'];
}

$producto_entradas = $_POST['entradas'];


if ($tamano_nombre_e=="N/A") {
    $tamano_id=1;         
}
else {
    $tamano_id = $_POST['tamano'];
}

$producto_capacidad = $_POST['capacidad'];


if ($unidad_nombre=="N/A") {
    $producto_unidadCap=1;
}
else {  
    $producto_unidadCap = $_POST['unidadCapacidad'];
}

$capacidad_rango = $_POST["capacidad_rango"];

$material_id = $_POST['material'];

$color_id = $_POST['color']; 

$producto_boca = $_POST['boca'];

$producto_unidadBoca = 1;

$producto_peso = $_POST['peso'];

$producto_terminado = $_POST['terminado'];

$producto_terminado_i = $_POST['terminado_i'];

if ($_POST['linner']=="N/A") {
    $linner_id=1;         
}
else {
    $linner_id = $_POST['linner'];
}

if ($_POST['falda']=="N/A") {
    $falda_id=1;         
}
else {
    $falda_id = $_POST['falda'];
}

$producto_cavidades = $_POST['cavidades'];

$producto_anotacion = $_POST['anotacion'];

$producto_anotacion_i = $_POST['anotacion_i'];


$clase_id =  $_POST['clase'];


$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";




$producto_codigo = accents2HTML($producto_codigo);
$producto_descripcion = accents2HTML($producto_descripcion);
$producto_nombre = accents2HTML($producto_nombre);
$producto_entradas = accents2HTML($producto_entradas);
$producto_capacidad = accents2HTML($producto_capacidad);
$producto_boca = accents2HTML($producto_boca);
$producto_peso = accents2HTML($producto_peso);
$producto_terminado = accents2HTML($producto_terminado);
$producto_cavidades = accents2HTML($producto_cavidades);
$producto_anotacion = accents2HTML($producto_anotacion);


$producto->setProducto_codigo($producto_codigo);
$producto->setProducto_descripcion($producto_descripcion);
$producto->setProducto_nombre($producto_nombre);
$producto->setCategoria_id($categoria_id);
$producto->setSublinea_id($sublinea_id);
$producto->setForma_id($forma_id);
$producto->setProducto_atributo1($producto_atributo1);  
$producto->setProducto_atributo2($producto_atributo2);  
$producto->setProducto_entradas($producto_entradas);
$producto->setTamano_id($tamano_id);
$producto->setProducto_capacidad($producto_capacidad);  
$producto->setProducto_unidadCap($producto_unidadCap);  
$producto->setMaterial_id($material_id);
$producto->setColor_id($color_id);
$producto->setProducto_boca(0);
$producto->setProducto_unidadBoca($producto_unidadBoca);
$producto->setProducto_peso($producto_peso);
$producto->setProducto_terminado($producto_terminado);  
$producto->setLinner_id($linner_id);
$producto->setFalda_id($falda_id);
$producto->setProducto_cavidades($producto_cavidades);  
$producto->setProducto_anotacion($producto_anotacion);  
$producto->setClase_id($clase_id);
$producto->setBoca_id($producto_boca);
$producto->setCapacidad_id($capacidad_rango);

$producto->setProducto_descripcion_i($producto_descripcion_i);
$producto->setProducto_nombre_i($producto_nombre_i);
$producto->setProducto_terminado_i($producto_terminado_i);
$producto->setProducto_anotacion_i($producto_anotacion_i);


if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $src= "/img/";


    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $producto->setProducto_imagen($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}


$productoDAO->save($producto);

$location = "location: ./../../admin/menuAdmin.php?s=nwProducto&add=";

header($location.'1');
exit;


?>