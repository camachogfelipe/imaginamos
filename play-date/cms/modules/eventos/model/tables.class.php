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
    function printeventos() {


        $query = "SELECT * FROM cms_eventos ORDER BY id_evento DESC";

        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Titulo</div></th>
                                
				<th><div class="th_wrapp">Fecha Evento</div></th>
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
					
					
                                           
                                        <td class="center" width="200px">'.$result[titulo_evento].'</td>
					<td class="center" width="200px">'.$result[fecha_evento].'</td>    
                                        <td class="center" width="300px">
                                        <a id="'.$result[id_evento].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_evento]).'">Editar</a>
					<a id="'.$result[id_evento].'" class="Delete uibutton special" tableToDelete="cms_eventos" nameField="id_evento">Eliminar</a>
                                         
                                          
                                            </td>
					</tr>';		
			}
                        
		}
                $html.='</tbody></table>';
                
		return $html;
    }

}

class Sebas {

    function PintarEditTema($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_eventos  WHERE id_evento =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function eventos() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_actividades";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
     

}

    
?>