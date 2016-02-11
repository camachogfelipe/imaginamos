<?php
	error_reporting(E_ALL);
	//header('Content-Type: text/xml; charset=UTF-8');
	$return ='<link href="../css/intecplast_mail.css" rel="stylesheet" type="text/css" />';
	$return .='
	<style type="text/css">
		.round {
			border-radius: 7px;
			border: 1px solid #00a2df
		}
		
		.tabla_familia {
			clear: both;
			margin: 30px auto;
			border: 1px solid #00a2df;
			border-collapse: collapse;
		}
		
		.title_table2 {
			font-family: sans-serif;
			font-size:11px;
			background-color:#364D68;
			text-align:center;
			color:#fff;
			font-weight:bold;
		}
	</style>
	';
	//$return .="<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";

  include '../php/dao/daoConnection.php';
  include '../php/dao/productoDAO.php';
  include '../php/entities/producto.php';

  $producto_codigo = $_GET['id'];
  $productoDAO = new productoDAO();
  $producto = new producto();
  $producto = $productoDAO->getById($producto_codigo);

  include '../php/dao/claseDAO.php';
  include '../php/entities/clase.php';
  //Llamado de Clase
  $clase_id = $producto->getClase_id();
  $claseDAO = new claseDAO();
  $clase = new clase();
  $clase = $claseDAO->getById($clase_id);

  include '../php/dao/sublineaDAO.php';
  include '../php/entities/sublinea.php';
  $sublinea_id = $producto->getSublinea_id();
  $sublineaDAO = new sublineaDAO();
  $sublinea = new sublinea();
  $sublinea = $sublineaDAO->getById($sublinea_id);
  $linea_id = $sublinea->getLineaId();

  include '../php/dao/lineaDAO.php';
  include '../php/entities/linea.php';
  $lineaDao = new lineaDao();
  $linea = new linea();
  $linea = $lineaDao->getById($linea_id);

  include '../php/dao/materialDAO.php';
  include '../php/entities/material.php';
  $material_id = $producto->getMaterial_id();
  $materialDAO = new materialDAO();
  $material = new material();
  $material = $materialDAO->getById($material_id);

  include '../php/dao/formaDAO.php';
  include '../php/entities/forma.php';
  $forma_id = $producto->getForma_id();
  $formaDAO = new formaDAO();
  $forma = new forma();
  $forma = $formaDAO->getById($forma_id);

  include '../php/dao/unidadDAO.php';
  include '../php/entities/unidad.php';
  $unidadBoca_id = $producto->getProducto_unidadBoca();
  $unidadDAO = new unidadDAO();
  $unidadBoca = new unidad();
  $unidadBoca = $unidadDAO->getById($unidadBoca_id);
  
  $unidadCapacidad_id = $producto->getProducto_unidadCap();
  $unidadCapacidad = new unidad();
  $unidadCapacidad = $unidadDAO->getById($unidadCapacidad_id);

  include '../php/dao/atributoDAO.php';
  include '../php/entities/atributo.php';
  $atributo1_id = $producto->getProducto_atributo1();
  $atributoDAO = new atributoDAO();
  $atributo1 = new atributo();
  $atributo1 = $atributoDAO->getById($atributo1_id);

  $atributo2_id = $producto->getProducto_atributo2();
  $atributo2 = new atributo();
  $atributo2 = $atributoDAO->getById($atributo2_id);

  include '../php/dao/linnerDAO.php';
  include '../php/entities/linner.php';
  $linner_id = $producto->getLinner_id();
  $linnerDAO = new linnerDAO();
  $linner = new linner();
  $linner = $linnerDAO->getById($linner_id);

  include '../php/dao/tamanoDAO.php';
  include '../php/entities/tamano.php';
  $tamano_id = $producto->getTamano_id();
  $tamanoDAO = new tamanoDAO();
  $tamano = new tamano();
  $tamano = $tamanoDAO->getById($tamano_id);
  
  include '../php/dao/colorDAO.php';
  include '../php/entities/color.php';
  $color_id = $producto->getColor_id();
  $colorDAO = new colorDAO();
  $color = new color();
  $color = $colorDAO->getById($color_id);

  include '../php/dao/faldaDAO.php';
  include '../php/entities/falda.php';
  $falda_id = $producto->getFalda_id();
  $faldaDAO = new faldaDAO();
  $falda = new falda();
  $falda = $faldaDAO->getById($falda_id);

	include '../php/dao/ejemploDAO.php';
  include '../php/entities/ejemplo.php';

  $ejemploDAO = new ejemploDAO();
  $ejemplo = new ejemplo();
  $ejemplos = $ejemploDAO->getsByProducto_codigo($producto_codigo);
  $totalEjemplos = $ejemploDAO->totalProducto_codigo($producto_codigo);

	$ejemplosPdf = "";
  if ($totalEjemplos>0) {
    foreach ($ejemplos as $ejemplo) {
			$ejemplosPdf .='<img src=".'.$ejemplo->getimagen().'" style="height:100px; display:inline;"/>';
		}
	}
	
	include '../php/dao/categoriaDAO.php';
	include '../php/entities/categoria.php';
	
	
	$categoria_id = $producto->getCategoria_id();
	
	$categoriaDAO = new categoriaDAO();
	$categoria = new categoria();
	$categoria = $categoriaDAO->getById($categoria_id);
	
	$productosRango = new producto();
	$productosRango = $productoDAO->getByCategoria($categoria_id);
	
	$familiaEjemplos = "";
	if ($categoria->getimgRango()!='') {
		$familiaEjemplos .='<img src="..'.$categoria->getimgRango().'" width="700" />';
	}
	
	$ProductosRangoPDF = "";
	if ($productosRango>0){
		foreach ($productosRango as $item){
			$materialRango_id = $item->getMaterial_id();
			$materialRango = $materialDAO->getById($materialRango_id);
			$unidadCapacidadRango_id = $item->getProducto_unidadCap ();
			$unidadCapacidadRango = $unidadDAO->getById($unidadCapacidadRango_id);
			$ProductosRangoPDF .='
      <tr>
        <td style="border: 1px solid #8b9fa4;" VALIGN="middle">'.$item->getProducto_codigo().'</td>
        <td style="border: 1px solid #8b9fa4;" VALIGN="middle">'.$item->getProducto_boca().' '.strtolower($unidadCapacidadRango->getnombre()).'</td>
        <td style="border: 1px solid #8b9fa4;" VALIGN="middle">'.$item->getProducto_peso().'</td>
        <td style="border: 1px solid #8b9fa4;" VALIGN="middle">'.$materialRango->getnombre_e().'</td>
      </tr>';
		}
	}

	$return .='
<div>
  <div class="banner_sup"><img src="../images/pdf/banner_superior_en.png" width="813" /></div>
  <table width="100%" cellpadding="2" cellspacing="3" border="0">
  	<tr>
    	<td width="154" align="right">
      	<div class="round" style="width:154px;"><img src="..'.$producto->getProducto_imagen().'" style="width:145; " /></div>
      </td>
      <td>
      	<div class="info">
          <div class="title" style="color: #0085b7">'.$producto->getProducto_nombre().'</div>
          <table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>Code:</td>
              <td><strong>'.$producto->getProducto_codigo().'</strong></td>
            </tr>
						<tr>
							<td width="100">Description:</td>
							<td><strong>'.$producto->getProducto_descripcion().'</strong></td>
						</tr>
						<tr>
							<td>Class:</td>
							<td><strong>'.$clase->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Line:</td>
							<td><strong>'.$linea->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Subline:</td>
							<td><strong>'.$sublinea->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Attribute #1: </td>
							<td><strong>'.$atributo1->getNombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Attribute #2: </td>
							<td><strong>'.$atributo2->getNombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Pit ('.mb_strtolower($unidadBoca->getnombre()).'): </td>
							<td><strong>'.$producto->getProducto_boca().'</strong></td>
						</tr>
						<tr>
							<td>Capacity ('.mb_strtolower($unidadCapacidad->getnombre()).'): </td>
							<td><strong>'.$producto->getProducto_capacidad().'</strong></td>
						</tr>
						<tr>
							<td>Form:</td>
							<td><strong>'.$forma->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Linner:</td>
							<td><strong>'.$linner->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Lap:</td>
							<td><strong>'.$falda->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Material:</td>
							<td><strong>'.$material->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Size:</td>
							<td><strong>'.$tamano->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Color:</td>
							<td><strong>'.$color->getnombre_e().'</strong></td>
						</tr>
						<tr>
							<td>Inputs:</td>
							<td><strong>'.$producto->getProducto_entradas().'</strong></td>
						</tr>
						<tr>
							<td>Over:</td>
							<td><strong>'.$producto->getProducto_terminado().'</strong></td>
						</tr>
						<tr>
							<td>Cavities:</td>
							<td><strong>'.$producto->getProducto_cavidades().'</strong></td>
						</tr>
						<tr>
							<td>Weight (g): </td>
							<td><strong>'.$producto->getProducto_peso().'</strong></td>
						</tr>
						<tr>
							<td>Comment: </td>
							<td><strong>'.$producto->getProducto_anotacion().'</strong></td>
						</tr>
          </table>
    		</div>
      </td>
    </tr>
  </table>
  <div class="title" style="color: #0085b7; margin-top:20px; clear:both">EJEMPLOS</div>
  <div class="photo round" style="width: 90%; min-height: 100px; margin: 0 40px;">'.$ejemplosPdf.'</div>
  <div class="title" style="color: #0085b7; margin-top:20px; clear:both">FAMILIA</div>
  <div class="photo round" style="width: 90%; margin: 0 40px;">'.$familiaEjemplos.'</div>
  <table align="center" width="90%" border="1" class="tabla_familia" cellspacing="0" cellpadding="5">
    <tr>
      <td class="title_table2" align="center" style="padding: 5px; border: 1px solid #8b9fa4;" width="200">Code</td>
      <td class="title_table2" align="center" style="padding: 5px; border: 1px solid #8b9fa4;">Capacity</td>
      <td class="title_table2" align="center" style="padding: 5px; border: 1px solid #8b9fa4;">Weight (g)</td>
      <td class="title_table2" align="center" style="padding: 5px; border: 1px solid #8b9fa4;">Material</td>
    </tr>
    '.$ProductosRangoPDF.'
  </table>
  <div class="banner_inf"><img src="../images/pdf/banner_inferior_en.png" /></div>
</div>';

	require_once '../php/libraries/html2pdf/html2pdf.class.php';
	$html2pdf = new HTML2PDF('P','LETTER','es', true, 'UTF-8', array(0, 5, 0, 5));
	$html2pdf->setDefaultFont("DejaVuSans");
	$html2pdf->WriteHTML($return);
	$html2pdf->Output("Hoja_de_Producto_".$producto->getProducto_codigo().".pdf");
?>