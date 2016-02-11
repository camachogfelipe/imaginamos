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
		$query = "SELECT * FROM cms_contacto ORDER BY id_contacto ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Area de Contacto</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">T&iacute;tulo</div></th>
				<th><div class="th_wrapp">Imagen</div></th>
                                <th><div class="th_wrapp">E-mail</div></th>
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
				$html .= '
					<tr class="odd gradeX">
					
					<td class="center" width="300px">'.$result[titulo_contacto].'</td>
                                        <td class="center" width="300px"><img width="200" src="files/'.$result[imagen_contacto].'" title="'.$result[imagen_contacto].'" /></td>
                                        <td class="center" width="300px">'.$result[mail_contacto].'</td>
					<td class="center" width="100px">
                                        <a id="'.$result[id_contacto].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_contacto]).'">Editar</a>
					<!--<a id="'.$result[id_contacto].'" class="Delete uibutton special" tableToDelete="cms_contacto" nameField="id_contacto">Eliminar</a>-->
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





















