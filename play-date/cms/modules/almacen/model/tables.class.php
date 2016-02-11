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
    function printAlamacen() {


        $query = "SELECT * FROM cms_almacen";

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
					
					
                                           
                                        <td class="center" width="200px"><img width="150" src="../../../../imagenes/'.$result[almacen_image].'" title="'.$result[almacen_image].'" /></td>
					<td class="center" width="200px">'.$result[almacen_titulo].'</td>
                                        <td class="center" width="300px">
                                        <a id="'.$result[almacen_id].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[almacen_id]).'">Editar</a>
					
                                            </td>
					</tr>';		
			}
                        
		}
                $html.='</tbody></table>';
                
		return $html;
    }

}

class Sebas {

    function PintarEditAlmacen($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_almacen WHERE almacen_id =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }

}

    
?>