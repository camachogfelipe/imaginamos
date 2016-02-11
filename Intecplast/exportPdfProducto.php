<?php
    header('Content-Type: text/xml; charset=UTF-8');
    $return .='<link href="css/intecplast_mail.css" rel="stylesheet" type="text/css" />';
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


$return .='<div class="content">
  <div class="header">
      <img src="img/103.jpg" style="width:610px;" />
    </div>
    
      
  <div class="content_int">
      <table width="100%"  border="0">

        <tr>
          <td style="width:154px;">
            <div class="photo left">
                <img src=".'.$producto->getProducto_imagen().'" style="width:145; " />
            </div>
          </td>
          <td style="width:446px;">
            <div class="info right">
              <div class="title">'.$producto->getProducto_nombre().'</div>
              
                <table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>C&oacute;digo:</strong></td>
                          <td>'.$producto->getProducto_codigo().'</td>
                        </tr>';
                 $return .='<tr>';
                    $return .='<td class="title2">Descripción:</td>';
                    $return .='<td>'.$producto->getProducto_descripcion().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Clase:</td>';
                    $return .='<td>'.$clase->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Linea:</td>';
                    $return .='<td>'.$linea->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Sublinea:</td>';
                    $return .='<td>'.$sublinea->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Atributo #1: </td>';
                    $return .='<td>'.$atributo1->getNombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Atributo #2: </td>';
                    $return .='<td>'.$atributo2->getNombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Boca ('.strtolower($unidadBoca->getnombre()).'): </td>';
                    $return .='<td>'.$producto->getProducto_boca().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Capacidad ('.strtolower($unidadCapacidad->getnombre()).'): </td>';
                    $return .='<td>'.$producto->getProducto_capacidad().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Forma:</td>';
                    $return .='<td>'.$forma->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Linner:</td>';
                    $return .='<td>'.$linner->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Falda:</td>';
                    $return .='<td>'.$falda->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Material:</td>';
                    $return .='<td>'.$material->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Tamaño:</td>';
                    $return .='<td>'.$tamano->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Color:</td>';
                    $return .='<td>'.$color->getnombre_e().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Entradas:</td>';
                    $return .='<td>'.$producto->getProducto_entradas().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Terminado:</td>';
                    $return .='<td>'.$producto->getProducto_terminado().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Cavidades:</td>';
                    $return .='<td>'.$producto->getProducto_cavidades().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Peso (g): </td>';
                    $return .='<td>'.$producto->getProducto_peso().'</td>';
                  $return .='</tr>';
                  $return .='<tr>';
                    $return .='<td class="title2">Anotación: </td>';
                    $return .='<td>'.$producto->getProducto_anotacion().'</td>';
                  $return .='</tr>';


    $return .='</table>
            </div>
          </td>

        </tr>

      </table>
      
    <div class="clear" style="padding-top:20px;"></div>
      
    <div class="title">EJEMPLOS</div>
    <div class="photo ejemplos">';


  include 'php/dao/ejemploDAO.php';
  include 'php/entities/ejemplo.php';

  $ejemploDAO = new ejemploDAO();
  $ejemplo = new ejemplo();
  $ejemplos = $ejemploDAO->getsByProducto_codigo($producto_codigo);
  $totalEjemplos = $ejemploDAO->totalProducto_codigo($producto_codigo);


  if ($totalEjemplos>0) {
    foreach ($ejemplos as $ejemplo) {
   
      $return .='<img src=".'.$ejemplo->getimagen().'" style="height:100px; display:inline;"/>';
          
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



$return .='</div>      
      
      <div class="title" style="margin-top:20px;">FAMILIA</div>
      <div class="photo ejemplos">
        <img src=".'.$categoria->getimgRango().'" style="width:500px;" />
      </div>
      
      <div class="clear" style="padding-top:30px"></div>
      
      <table class="table2" width="100%" border="0" style="border-collapse: collapse;" cellspacing="0" cellpadding="0">
          <tr>
            <td class="title_table">Código del articulo</td>
            <td class="title_table">Capacidad</td>
            <td class="title_table">Peso (g)</td>
            <td class="title_table">Material</td>
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

 $return.='</table>

      
  </div>
        
    <div class="footer">
      <img src="img/104.jpg" style="width:610px;" />
    </div>
</div>';


require_once("dompdf/dompdf_config.inc.php");

$ceco="pdf";
$dompdf = new DOMPDF();
$dompdf->load_html($return);
$dompdf->render();
$dompdf->stream("Hoja de Producto ".$producto->getProducto_codigo()."pdf", array("Attachment" => false));
?>