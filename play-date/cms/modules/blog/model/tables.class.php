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
    function printBlog() {


        $query = "SELECT * FROM cms_blog ORDER BY id_blog DESC";

        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Titulo</div></th>
                                
				<th><div class="th_wrapp">fecha</div></th>
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
					
					
                                           
                                        <td class="center" width="200px">'.$result[title_blog].'</td>
					<td class="center" width="200px">'.$result[fecha_blog].'</td>    
                                        <td class="center" width="300px">
                                        <a id="'.$result[id_blog].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_blog]).'">Editar</a>
					<a id="'.$result[id_blog].'" class="Delete uibutton special" tableToDelete="cms_blog" nameField="id_blog">Eliminar</a>
                                        <a id="'.$result[id_blog].'" class="uibutton"   href="coment.php?id='.base64_encode($result[id_blog]).'">Comentarios</a>
                                          
                                            </td>
					</tr>';		
			}
                        
		}
                $html.='</tbody></table>';
                
		return $html;
    }
function printComent($id) {
        
        $query = "SELECT * FROM cms_comentarios WHERE id_blog = ".$id;

        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Texto</div></th>
                                <th><div class="th_wrapp">Fecha</div></th>
				
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
					
					
                                           
                                        
					<td class="center" width="400px">'.$result[texto_comentario].'</td>
                                        <td class="center" width="100px">'.$result[fecha_comentario].'</td>    
                                        <td class="center" width="200px">
                                        
					<a id="'.$result[id_comentario].'" class="Delete uibutton special" tableToDelete="cms_comentarios" nameField="id_comentario">Eliminar</a>
                                          
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
        $query = "SELECT * FROM cms_blog  WHERE id_blog =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarEditSubcategoria($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_subcategoria  WHERE id_subcategoria =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarEditComent($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_blog WHERE id_blog = ".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }

}

    
?>