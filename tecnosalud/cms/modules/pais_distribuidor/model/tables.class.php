<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables {

    var $db;

    function __construct($db) {
        $this->db = $db;
    }

//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
    function printGaleria() {


        $query = "SELECT * FROM cms_galeria";

        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Imagen</div></th>
                                <th><div class="th_wrapp">T&iacute;tulo</div></th>
				
				<th><div class="th_wrapp">Acci&oacute;n</div></th>
			</tr>
		</thead>
		<tbody>
		';
	
		if($results>0)
		{
			
			foreach($results as $result)
			{
                            
				$html .= '
					<tr class="odd gradeX">
					
					
                                           
                                        <td class="center" width="200px"><img width="150" src="../../../../imagenes/'.$result[imagen_galeria].'" title="'.$result[imagen_galeria].'" /></td>
					<td class="center" width="200px">'.$result[titulo_galeria].'</td>
                                        <td class="center" width="300px">
                                        <a id="'.$result[id_galeria].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_galeria]).'">Editar</a>
					<a id="'.$result[id_galeria].'" class="Delete uibutton special" tableToDelete="cms_galeria" nameField="id_galeria">Eliminar</a>
                                        <a id="'.$result[id_galeria].'" class="uibutton"   href="sub.php?id='.base64_encode($result[id_galeria]).'">Agregar Subcategoria</a>   
                                            </td>
					</tr>';		
			}
                        
		}
                $html.='</tbody></table>';
                
		return $html;
    }
function printSubcategoria($ids) {
        
        $query = "SELECT * FROM cms_subcategoria WHERE id_galeria = ".$ids;

        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Imagen</div></th>
                                <th><div class="th_wrapp">Texto</div></th>
				
				<th><div class="th_wrapp">Acci&oacute;n</div></th>
			</tr>
		</thead>
		<tbody>
		';
	
		if($results>0)
		{
			
			foreach($results as $result)
			{
                            
				$html .= '
					<tr class="odd gradeX">
					
					
                                           
                                        <td class="center" width="200px"><img width="150" src="../../../../imagenes/'.$result[imagen_subcategoria].'" title="'.$result[imagen_subcategoria].'" /></td>
					<td class="center" width="200px">'.$result[texto_subcategoria].'</td>
                                        <td class="center" width="300px">
                                        <a id="'.$result[id_subcategoria].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_subcategoria]).'">Editar</a>
					<a id="'.$result[id_subcategoria].'" class="Delete uibutton special" tableToDelete="cms_subcategoria" nameField="id_subcategoria">Eliminar</a>
                                          
                                            </td>
					</tr>';		
			}
                        
		}
                $html.='</tbody></table>';
                
		return $html;
    }
}

class Sebas {

    function PintarEditGaleria($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_galeria  WHERE id_galeria =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    

}

    
?>