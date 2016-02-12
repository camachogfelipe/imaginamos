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
		$query = "SELECT * FROM video ORDER BY id ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Videos</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">T&iacute;tulo</div></th>
				<th><div class="th_wrapp">Subtitulo</div></th>
				<th><div class="th_wrapp">Texto Detalle</div></th>
                                <th><div class="th_wrapp">Acción</div></th>
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
					
					<td class="center" width="300px">'.$result[titulo].'</td>
                                        <td class="center" width="300px">'.$result[subtitulo].'</td>
                                        <td class="center" width="300px">'.$result[texto].'</td> 
                                            
                                        
					<td class="center" width="100px">
                                        <a id="'.$result[id].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id]).'">Editar</a>
					<a id="'.$result[id].'" class="Delete uibutton special" tableToDelete="video" nameField="id">Eliminar</a>
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





















