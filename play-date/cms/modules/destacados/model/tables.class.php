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
		$query = "SELECT * FROM cms_destacados ORDER BY id_destacados ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Destacados</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">T&iacute;tulo</div></th>
				<th><div class="th_wrapp">Imagen</div></th>
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
                            $titulos = explode('/-/--', $result[titulo_destacados]);
                            $titulo = $titulos[0].' '.$titulos[1].' '.$titulos[2].' '.$titulos[3];
				$html .= '
					<tr class="odd gradeX">
					
					<td class="center" width="300px">'.$titulo.'</td>
                                           
                                        <td class="center" width="300px"><img width="150" src="../../../../imagenes/'.$result[imagen_destacados].'" title="'.$result[imagen_destacados].'" /></td>
					<td class="center" width="100px">
                                        <a id="'.$result[id_destacados].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id_destacados]).'">Editar</a>
					<a id="'.$result[id_destacados].'" class="Delete uibutton special" tableToDelete="cms_destacados" nameField="id_destacados">Eliminar</a>
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





















