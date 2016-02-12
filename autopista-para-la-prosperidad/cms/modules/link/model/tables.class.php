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
function printTableLinks()
		{
		$query = "SELECT * FROM link ORDER BY id ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
                
                
                $html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<legend><h1>Contenido LINKS SECOP</h1></legend>
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Texto</div></th>
				<th><div class="th_wrapp">Link</div></th>
				<th><div class="th_wrapp">Destacar</div></th>
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
                         if($result[destacado]==0){
                                $button='<div id="'.$result[id].'des"><a id="'.$result[id].'" class="uibutton" onclick="destacar('.$result[id].')">Destacar</a></div>';
                            }else{
                                 $button='<div id="'.$result[id].'qui" ><a id="'.$result[id].'" class="uibutton normal" onclick="quitar('.$result[id].')">Quitar de destacados</a><br /><img src="./star.png"  width="32" /></div>';
                            }
				$html .= '
					<tr class="odd gradeX">
					
					<td class="center" width="300px">'.$result[texto].'</td>
                                           
                                        <td class="center" width="300px">'.$result[link].'</td>
                                              <td class="center" width="300px">
                                        '.$button.'
                                        </td>
					<td class="center" width="100px">
                                        <a id="'.$result[id].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[id]).'">Editar</a>
					<a id="'.$result[id].'" class="Delete uibutton special" tableToDelete="link" nameField="id">Eliminar</a>
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





















