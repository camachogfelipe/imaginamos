<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
include("../model/functions.xajax.php");
//Carga conexión e interacción con la base de datos
$db = new Database();
//Conectamos
$db->connect();
//Clase para el armado de la tabla de administradores


$categoria = $_GET['categoria'];
$id = 0;
$id = $_GET['id'];

if($id != 0){
	$query2 =  "SELECT p.id_producto, p.id_categoria, p.id_subcategoria, p.nombre_producto_es, p.referencia_producto_es, p.desc_producto_es, p.nombre_producto_en, p.referencia_producto_en, p.desc_producto_en, p.precio_producto, p.imagen, p.compartir_facebook, p.compartir_twitter, c.desc_categoria_es, c.desc_categoria_en, s.desc_subcategoria_es, s.desc_subcategoria_en
			FROM cms_productos p
			left JOIN cms_categorias c ON c.id_categoria = p.id_categoria
			left JOIN cms_subcategorias s ON p.id_subcategoria = s.id_subcategoria
			WHERE p.id_producto = ".$id." ORDER BY c.id_categoria,p.nombre_producto_es";
	$db->doQuery($query2,SELECT_QUERY);
	$results2 = $db->results;
}

$query = "SELECT * FROM cms_subcategorias WHERE id_categoria = ".$categoria." ORDER BY desc_subcategoria_es";
$db->doQuery($query,SELECT_QUERY);
$results = $db->results;

			$html = '
			<div>		
					
			<p><label>Sub Categorias</label></p>
				<div>
				
				<select name="subcategoria" id="subcategoria" class="large">';
				
				$html .= '<option value="0">Seleccione una Sub Categoria</option>';
					if($results != ""){
						foreach($results as $result)
						{
						$sel = "";
						if($results2[0][id_subcategoria] == $result[id_subcategoria]){
							$sel = "selected";
						}
					
				$html .= '<option value="'.$result[id_subcategoria].'" '.$sel.' >'.$result[desc_subcategoria_es].' / '.$result[desc_subcategoria_en].'</option>';
						
						}
					}
						
				$html .= '</select>
			  </div>';	
			  
if($results != ""){	
	echo $html;
}else{
	$html = '<input type="hidden" name="subcategoria" id="subcategoria" value="0"/>';
	echo $html;
}

?>