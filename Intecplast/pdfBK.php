<?php
    header('Content-Type: text/xml; charset=UTF-8');
  $return .='<link href="css/pdf.css" rel="stylesheet" type="text/css" />';
    $return .="<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>";
    $return .="<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";

  include 'php/dao/daoConnection.php';
  include 'php/dao/productoDAO.php';
  include 'php/entities/producto.php';

  $producto_codigo = $_GET['id'];
  $productoDAO = new productoDAO();
  $producto = new producto();
  $producto = $productoDAO->getById($producto_codigo);

  include 'php/dao/claseDAO.php';
  include 'php/entities/clase.php';
  //Llamado de Clase
  $clase_id = $producto->getClase_id();
  $claseDAO = new claseDAO();
  $clase = new clase();
  $clase = $claseDAO->getById($clase_id);

  include 'php/dao/sublineaDAO.php';
  include 'php/entities/sublinea.php';
  $sublinea_id = $producto->getSublinea_id();
  $sublineaDAO = new sublineaDAO();
  $sublinea = new sublinea();
  $sublinea = $sublineaDAO->getById($sublinea_id);
  $linea_id = $sublinea->getLineaId();

  include 'php/dao/lineaDAO.php';
  include 'php/entities/linea.php';
  $lineaDao = new lineaDao();
  $linea = new linea();
  $linea = $lineaDao->getById($linea_id);

  include 'php/dao/materialDAO.php';
  include 'php/entities/material.php';
  $material_id = $producto->getMaterial_id();
  $materialDAO = new materialDAO();
  $material = new material();
  $material = $materialDAO->getById($material_id);

  include 'php/dao/formaDAO.php';
  include 'php/entities/forma.php';
  $forma_id = $producto->getForma_id();
  $formaDAO = new formaDAO();
  $forma = new forma();
  $forma = $formaDAO->getById($forma_id);

  include 'php/dao/unidadDAO.php';
  include 'php/entities/unidad.php';
  $unidadBoca_id = $producto->getProducto_unidadBoca ();
  $unidadDAO = new unidadDAO();
  $unidadBoca = new unidad();
  $unidadBoca = $unidadDAO->getById($unidadBoca_id);
  
  $unidadCapacidad_id = $producto->getProducto_unidadCap ();
  $unidadCapacidad = new unidad();
  $unidadCapacidad = $unidadDAO->getById($unidadCapacidad_id);

  include 'php/dao/atributoDAO.php';
  include 'php/entities/atributo.php';
  $atributo1_id = $producto->getProducto_atributo1();
  $atributoDAO = new atributoDAO();
  $atributo1 = new atributo();
  $atributo1 = $atributoDAO->getById($atributo1_id);

  $atributo2_id = $producto->getProducto_atributo2();
  $atributo2 = new atributo();
  $atributo2 = $atributoDAO->getById($atributo2_id);

  include 'php/dao/linnerDAO.php';
  include 'php/entities/linner.php';
  $linner_id = $producto->getLinner_id();
  $linnerDAO = new linnerDAO();
  $linner = new linner();
  $linner = $linnerDAO->getById($linner_id);

  include 'php/dao/tamanoDAO.php';
  include 'php/entities/tamano.php';
  $tamano_id = $producto->getTamano_id();
  $tamanoDAO = new tamanoDAO();
  $tamano = new tamano();
  $tamano = $tamanoDAO->getById($tamano_id);
  
  include 'php/dao/colorDAO.php';
  include 'php/entities/color.php';
  $color_id = $producto->getColor_id();
  $colorDAO = new colorDAO();
  $color = new color();
  $color = $colorDAO->getById($color_id);

  include 'php/dao/faldaDAO.php';
  include 'php/entities/falda.php';
  $falda_id = $producto->getFalda_id();
  $faldaDAO = new faldaDAO();
  $falda = new falda();
  $falda = $faldaDAO->getById($falda_id);


$return .='<div style="font-family: sans-serif;" id="body">';
$return .='<div id="header">';
$return .='<img style="height:60px;" src="logo.JPG"/>';
$return .='</div>';
    $return .='<h3>'.$producto->getProducto_nombre().'</h3>';
$return .='<table style="font-family: sans-serif;border-collapse:collapse;border:0px solid #333;width:100%;font-size:10px;" border="0">';
  $return .='<tr>';
    $return .='<td style="width:100px;;" class="title">Código:</td>';
    $return .='<td style="width:230px;">'.$producto->getProducto_codigo().'</td>'; 
    $return .='<td colspan="1" rowspan="20"><img id="img_02" style="width:250px;" src=".'.$producto->getProducto_imagen().'"/></td>';

  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Descripción:</td>';
    $return .='<td>'.$producto->getProducto_descripcion().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Clase:</td>';
    $return .='<td>'.$clase->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Linea:</td>';
    $return .='<td>'.$linea->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Sublinea:</td>';
    $return .='<td>'.$sublinea->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Atributo #1: </td>';
    $return .='<td>'.$atributo1->getNombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Atributo #2: </td>';
    $return .='<td>'.$atributo2->getNombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Boca ('.strtolower($unidadBoca->getnombre()).'): </td>';
    $return .='<td>'.$producto->getProducto_boca().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Capacidad ('.strtolower($unidadCapacidad->getnombre()).'): </td>';
    $return .='<td>'.$producto->getProducto_capacidad().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Forma:</td>';
    $return .='<td>'.$forma->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Linner:</td>';
    $return .='<td>'.$linner->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Falda:</td>';
    $return .='<td>'.$falda->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Material:</td>';
    $return .='<td>'.$material->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Tamaño:</td>';
    $return .='<td>'.$tamano->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Color:</td>';
    $return .='<td>'.$color->getnombre_e().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Entradas:</td>';
    $return .='<td>'.$producto->getProducto_entradas().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Terminado:</td>';
    $return .='<td>'.$producto->getProducto_terminado().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Cavidades:</td>';
    $return .='<td>'.$producto->getProducto_cavidades().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Peso (g): </td>';
    $return .='<td>'.$producto->getProducto_peso().'</td>';
  $return .='</tr>';
  $return .='<tr>';
    $return .='<td class="title">Anotación: </td>';
    $return .='<td>'.$producto->getProducto_anotacion().'</td>';
  $return .='</tr>';
$return .='</table>';


  include 'php/dao/ejemploDAO.php';
  include 'php/entities/ejemplo.php';

  $ejemploDAO = new ejemploDAO();
  $ejemplo = new ejemplo();
  $ejemplos = $ejemploDAO->getsByProducto_codigo($producto_codigo);
  $totalEjemplos = $ejemploDAO->totalProducto_codigo($producto_codigo);


  if ($totalEjemplos>0) {
  $return .='<p ><b>Ejemplos</b></p><br/><br/>';
    foreach ($ejemplos as $ejemplo) {
   
      $return .='<img style="height:100px;" src=".'.$ejemplo->getimagen().'" height="60" border="0" />';
          
        }    
  }



include 'php/dao/categoriaDAO.php';
include 'php/entities/categoria.php';


$categoria_id = $producto->getCategoria_id();

$categoriaDAO = new categoriaDAO();
$categoria = new categoria();
$categoria = $categoriaDAO->getById($categoria_id);

$productosRango = new producto();
$productosRango = $productoDAO->getByCategoria($categoria_id);


$return .='
<div id="envproductos">
<div id="envcajontablacata3">
<div id="img_tamanos"><img src=".'.$categoria->getimgRango().'" /></div>';

$return .= '<div style="page-break-before: always;"></div>
<table style="width:90%; border:1px solid #333;" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td class="RangoTitle"  VALIGN="middle" >Código del artículo </td>
    <td class="RangoTitle"  VALIGN="middle">Capacidad</td>
    <td class="RangoTitle"  VALIGN="middle">Peso (g) </td>
    <td class="RangoTitle"  VALIGN="middle">Material</td>
  </tr>';
 
 if ($productosRango>0){ 
 foreach ($productosRango as $item){

    $materialRango_id = $item->getMaterial_id();
    $materialRango = $materialDAO->getById($materialRango_id);

    $unidadCapacidadRango_id = $item->getProducto_unidadCap ();
    $unidadCapacidadRango = $unidadDAO->getById($unidadCapacidadRango_id);
       
    $return .='
      <tr>
        <td class="celda01"  VALIGN="middle">'.$item->getProducto_codigo().'</td>
        <td class="celda01"  VALIGN="middle">'.$item->getProducto_boca().' '.strtolower($unidadCapacidadRango->getnombre()).'</td>
        <td class="celda01"  VALIGN="middle">'.$item->getProducto_peso().'</td>
        <td class="celda01"  VALIGN="middle">'.$materialRango->getnombre_e().'</td>
      </tr>';

  }
}

$return .='</table>
</div>
<div id="sepclear"></div>
</div>';


$return .='</div><!--Fin del Body-->';

require_once("dompdf/dompdf_config.inc.php");

$ceco="pdf";
$dompdf = new DOMPDF();
$dompdf->load_html($return);
$dompdf->render();
$dompdf->stream("Hoja de Producto ".$producto->getProducto_codigo()."pdf", array("Attachment" => false));
?>