<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables
{	
	var $db;
	
	function __construct($db)
		{$this->db=$db;}

	
//IMPRIME FORMULARIO PARA LOS ADMINISTRADORES
function printTableUsers()
		{
		$query = "SELECT * FROM cms_actividades ORDER BY id_actividades DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Lista de Actividades</h1></legend>
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
	
		if($numOfResults>0)
		{
			$Consultas = new Consultas;
			foreach($results as $result)
			{
                            $titulos = explode('/-/--', $result[titulo_actividades]);
                            $titulo = $titulos[0].' '.$titulos[1].' '.$titulos[2].' '.$titulos[3];
				$html .= '
					<tr class="odd gradeX">
					
					
                                           
                                        <td class="center" width="200px"><img width="150" src="files/'.$result[imagen_actividades].'" title="'.$result[imagen_actividades].'" /></td>
					<td class="center" width="200px">'.$titulo.'</td>
                                        <td class="center" width="300px">
                                        <a id="'.$result[id_actividades].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_actividades]).'">Editar</a>
					<a id="'.$result[id_actividades].'" class="Delete uibutton special" tableToDelete="cms_actividades" nameField="id_actividades">Eliminar</a>
                                            <a id="'.$result[id_actividades].'" class="uibutton"   href="cont.php?id='.base64_encode($result[id_actividades]).'">Contenido</a>
                                            </td>
					</tr>';		
			}
                        
		}
                
		return $html;
	}
		
function printcontenido($ids)
		{
		$query = "SELECT * FROM cms_contenido WHERE id_actividades =".$ids;
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Lista de Contenidos</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				
                                <th><div class="th_wrapp">T&iacute;tulo</div></th>
				
				<th><div class="th_wrapp">Acci&oacute;n</div></th>
			</tr>
		</thead>
		<tbody>
		';
	
		if($numOfResults>0)
		{
			
			foreach($results as $result)
			{
                            
				$html .= '
					<tr class="odd gradeX">
					
					
                                           
                                       
					<td class="center" width="300px">'.$result[titulo_contenido].'</td>
                                        <td class="center" width="200px">
                                        <a id="'.$result[id_contenido].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_contenido]).'">Editar</a>
					<a id="'.$result[id_contenido].'" class="Delete uibutton special" tableToDelete="cms_contenido" nameField="id_contenido">Eliminar</a>
                                          
                                            </td>
					</tr>';		
			}
                   $html.='</tbody></table>';     
		}
                
		return $html;
	}		
function icons()
{
	$html = '			

';
	
	}		
}
class Sebas {

    function PintarEditproductoss($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_actividades  WHERE id_actividades =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarImagenes($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_actividades_pics  WHERE id_actividades =".$ids." ORDER BY actividades_pics_id DESC";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        for ($index = 0; $index < count($results); $index++) 
            
        {
                echo  '<tr class="odd gradeX">
                            <td class="center" width="100px"><img src="files/'.$results[$index][actividades_pics_path].'" width="190" height="100" /></td>
                                                                                            
                                <td class="center" width="100px">
                                <a id="'.$results[$index][actividades_pics_id].'" class="Delete uibutton special" tableToDelete="cms_actividades_pics" nameField="actividades_pics_id">Eliminar</a>
								
                              </td>
                        </tr>';
           }
       
        
    }

}
?>





















