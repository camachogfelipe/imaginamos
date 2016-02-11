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
function printTableServicio($id)
		{
		
		
		$query = "SELECT * FROM ".TABLE_NAME." where titulo5='".$id."'  ORDER BY idcms DESC";
             
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
		
		$html = '
		<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
		<p>&nbsp;</p>
		
		<div class="tableName toolbar">
		<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Noticia</div></th>
				<th><div class="th_wrapp">Acciones</div></th>
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
					<td class="center" width="300px">'.$result[titulo1].'</td>
                                        <td class="center" width="100px">
						<a id="'.$result[idcms].'" class="Delete uibutton special" tableToDelete="'.TABLE_NAME.'" nameField="idcms">Eliminar</a>
						<a id="'.$result[idcms].'" class="uibutton"   href="Edit.php?id='.base64_encode($result[idcms]).'">Editar</a>
                                                <a id="'.$result[idcms].'" class="uibutton"   href="Edit2.php?id='.base64_encode($result[idcms]).'">Adjuntos</a>
                                                <a id="'.$result[idcms].'" class="uibutton"   href="Edit4.php?id='.base64_encode($result[idcms]).'">Adjuntos Ingles</a>
                                                <a id="'.$result[idcms].'" class="uibutton"   href="Edit3.php?id='.base64_encode($result[idcms]).'">Tabla</a>

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
        
        
    function colleciones(){
        $query1 = "SELECT * FROM cms_ciudad WHERE titulo3cms_bannerup > 0 ORDER BY idcms_bannerup DESC";
        $this->db->doQuery($query1,SELECT_QUERY);
        $results1 = $this->db->results;
        $numOfResults1 = $this->db->getNumResults();
         $select="";
        /*if($numOfResults1>0){
            $Consultas = new Consultas;
            foreach($results1 as $result){
                $select[]="<option value=".$result[idcms_bannerup].">".$result[titulo1cms_bannerup]."</option>";                
            }
        }*/
        return  $results1;
    }
}
?>