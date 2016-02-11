<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';
include '../dao/categoriaDAO.php';
include '../entities/categoria.php';
include '../dao/sublineaDAO.php';
include '../entities/sublinea.php';
include '../dao/formaDAO.php';
include '../entities/forma.php';
include '../dao/atributoDAO.php';
include '../entities/atributo.php';
include '../dao/tamanoDAO.php';
include '../entities/tamano.php';
include '../dao/unidadDAO.php';
include '../entities/unidad.php';
include '../dao/materialDAO.php';
include '../entities/material.php';
include '../dao/colorDAO.php';
include '../entities/color.php';
include '../dao/linnerDAO.php';
include '../entities/linner.php';
include '../dao/faldaDAO.php';
include '../entities/falda.php';
include '../dao/claseDAO.php';
include '../entities/clase.php';
include '../dao/productoDAO.php';
include '../entities/producto.php';

$producto_codigo = $_POST['cod'];
$producto_descripcion = $_POST['des'];
$producto_nombre = $_POST['nom'];

$categoria_nombre_e = $_POST['categoria'];
$categoria_nombre_e = accents2HTML($categoria_nombre_e);
$categoriaDao = new categoriaDao(); $categoria = new categoria(); $categoria = $categoriaDao->getByNombre($categoria_nombre_e); $categoria_id = $categoria->getid();

$sublinea_nombre_e = $_POST['sublinea'];
$sublinea_nombre_e = accents2HTML($sublinea_nombre_e);
$sublineaDao = new sublineaDao(); $sublinea = new sublinea(); $sublinea = $sublineaDao->getByNombre($sublinea_nombre_e); $sublinea_id = $sublinea->getid();

$forma_nombre_e = $_POST['forma'];
$forma_nombre_e = accents2HTML($forma_nombre_e);
$formaDao = new formaDao(); $forma = new forma(); $forma= $formaDao->getByNombre($forma_nombre_e); $forma_id = $forma->getid();

$atributo_nombre_e = $_POST['atributo1'];
$atributo_nombre_e = accents2HTML($atributo_nombre_e);
$atributoDao = new atributoDao(); $atributo = new atributo(); 
if ($atributo_nombre_e!="") {
    if ($atributo_nombre_e=="N/A") {
       $producto_atributo1=1;         
    }
    else {
        $atributo = $atributoDao->getByNombre($atributo_nombre_e); $producto_atributo1 = $atributo->getid();
    }
}

$atributo_nombre_e = $_POST['atributo2'];
$atributo_nombre_e = accents2HTML($atributo_nombre_e);
if ($atributo_nombre_e!="") {
    if ($atributo_nombre_e=="N/A") {
        $producto_atributo2=1;         
    }
    else {
        $atributo = $atributoDao->getByNombre($atributo_nombre_e); $producto_atributo2 = $atributo->getid();
    }
}

$producto_entradas = $_POST['entradas'];

$tamano_nombre_e = $_POST['tamano'];
$tamano_nombre_e = accents2HTML($tamano_nombre_e);
$tamanoDao = new tamanoDao(); $tamano = new tamano(); 
if ($tamano_nombre_e!="") {
    if ($tamano_nombre_e=="N/A") {
        $tamano_id=1;         
    }
    else {
        $tamano = $tamanoDao->getByNombre($tamano_nombre_e); $tamano_id = $tamano->getid();
    }
}

$producto_capacidad = $_POST['capacidad'];

$unidad_nombre = $_POST['unidadCapacidad'];
$unidad_nombre = accents2HTML($unidad_nombre);
$unidadDao = new unidadDao(); $unidad = new unidad();
if ($unidad_nombre!="") {
	if ($unidad_nombre=="N/A") {
		$producto_unidadCap=1;
	}
	else {	
		$unidad = $unidadDao->getByNombre($unidad_nombre); $producto_unidadCap = $unidad->getid();
	}
}

$capacidad_rango = $_POST["capacidad_rango"];

$material_nombre_e = $_POST['material'];
$material_nombre_e = accents2HTML($material_nombre_e);
$materialDao = new materialDao(); $material = new material(); $material = $materialDao->getByNombre($material_nombre_e); $material_id = $material->getid();

$color_nombre_e = $_POST['color'];
$color_nombre_e = accents2HTML($color_nombre_e);
$colorDao = new colorDao(); $color = new color(); $color = $colorDao->getByNombre($color_nombre_e); $color_id = $color->getid(); 

$producto_boca = $_POST['boca'];

$producto_unidadBoca = 1;

$producto_peso = $_POST['peso'];

$producto_terminado = $_POST['terminado'];

$linner_nombre_e = $_POST['linner'];
$linner_nombre_e = accents2HTML($linner_nombre_e);
$linnerDao = new linnerDao(); $linner = new linner(); 
if ($linner_nombre_e!="") {
    if ($linner_nombre_e=="N/A") {
        $linner_id=1;         
    }
    else {
        $linner = $linnerDao->getByNombre($linner_nombre_e); $linner_id = $linner->getid();
    }
}

$falda_nombre_e = $_POST['falda'];
$falda_nombre_e = accents2HTML($falda_nombre_e);
$faldaDao = new faldaDao(); $falda = new falda(); 
if ($falda_nombre_e!="") {
    if ($falda_nombre_e=="N/A") {
        $falda_id=1;         
    }
    else {
        $falda = $faldaDao->getByNombre($falda_nombre_e); $falda_id = $falda->getid();
    }
}


$producto_cavidades = $_POST['cavidades'];
$producto_anotacion = $_POST['anotacion'];

$clase_nombre_e = $_POST['clase'];
$clase_nombre_e = accents2HTML($clase_nombre_e);
$claseDao = new claseDao(); $clase = new clase(); $clase = $claseDao->getByNombre($clase_nombre_e); $clase_id = $clase->getid();


$location = "location: ./../../admin/menuAdmin.php?s=miscelanea";


$productoDAO = new productoDAO();

$producto = new producto();

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