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
		$query = "SELECT * FROM cms_banner_superior ORDER BY id_banner_superior ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Contenido Banner Principal</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">T&iacute;tulo</div></th>
				<th><div class="th_wrapp">Imagen</div></th>
				<th><div class="th_wrapp">Accion</div></th>
			</tr>
		</thead>
		<tbody>
		';
	
		if($numOfResults>0)
		{
			$Consultas = new Consultas;
			foreach($results as $result)
			{
				$html .= '
					<tr class="odd gradeX">
					
					<td class="center" width="300px">'.$result[titulo_banner_superior].'</td>
                                           
                                        <td class="center" width="300px"><img width="150" src="files/'.$result[imagen_banner_superior].'" title="'.$result[imagen_banner_superior].'" /></td>
					<td class="center" width="100px">
                                        <a id="'.$result[id_banner_superior].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_banner_superior]).'">Editar</a>
					<a id="'.$result[id_banner_superior].'" class="Delete uibutton special" tableToDelete="cms_banner_superior" nameField="id_banner_superior">Eliminar</a>
                                            </td>
					</tr>';		
			}
                        
		}
                
		return $html;
	}
		
		
function icons()
{
	$html = '			

';
	
	}		
}
?>





















