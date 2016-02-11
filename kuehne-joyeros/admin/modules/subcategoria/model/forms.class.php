<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Forms
{	
	var $db;
	
	function __construct($db)
		{$this->db=$db;}

/**/
//IMPRIME FORMULARIO PARA LA INSTALACION DEL MODULO
/**/

function printFormInstall()
		{
		$html = '
		
		<div>
		
		<form id="forminstall">
        
		<legend><h1>Configuración del módulo</h1></legend>
                  
					<p>&nbsp;</p>
					
					<fieldset>
					 <div>
					 	<p><label>Qué tipo de funcionalidad desea instalar?</label></p>
					 </div>
					 <div>
						  <p>
						  <select name="funcionality" class="large">
							  <option value="sel">Seleccione</option>
							  <option value="1">Título y artículo</option>
							  <option value="2">Título, artículo y una imagen</option>
							  <option value="3">Título, artículo y varias imagenes</option>
						  </select>
						  </p>
					  </div>				  
					  </fieldset>
					  
					  <p>&nbsp;</p>
					  
					  <!--<fieldset>
					  <div>
					 	<p><label>Desea anadir la característica "extracto" del artículo?</label></p>
					 </div>
					 <div>
						  <p>
							<label>
							  <input type="radio" name="xtract" value="1" id="xtract_0" />Si</label>
							<label>
							  <input type="radio" name="xtract" value="0" id="xtract_1" />No</label>
						  </p>
					  </div>
						</fieldset>-->
						

					
					<fieldset>
					  <div>
					 	<p><label>Instalar datos de ejemplo?</label></p>
					 </div>
					 <div>
						  <p>
							<label>
							  <input type="radio" name="dataExample" value="1" id="dataExample_0" />Si</label>
							<label>
							  <input type="radio" name="dataExample" value="0" id="dataExample_1" />No</label>
						  </p>
					  </div>
						</fieldset>
					<p>&nbsp;</p>	                  
				  <a class="uibutton" onclick="xajax_install(xajax.getFormValues(\'forminstall\')); return false;">Instalar módulo</a> 				  
		</form>			  
	</div>			
</div>';
return $html;
		}

/**/
//IMPRIME FORMULARIO DE CATEGORIAS
/**/

function printFormNews($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_categorias ORDER BY desc_categoria_es";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$html = '
				<div>		
				<form id="formnews">        
				<legend><h1>Crear Sub Categoría</h1></legend>
						<p>&nbsp;</p>                  
						  <fieldset>
								<p><label>Categorias</label></p>
								<div>
								
								<select name="categoria" id="categoria" class="chzn-select">';
								
								$html .= '<option value="0">Seleccione una Categoria</option>';
									if($results != ""){
									foreach($results as $result)
									{
								
                                                                            $html .= '<option value="'.$result[id_categoria].'">'.$result[desc_categoria_es].' / '.$result[desc_categoria_en].'</option>';
									
									}
									}
									
						$html .= '</select>
							  </div>	
							<p>&nbsp;</p> 							  
							  <div>
								  <p><label>Titulo Sub Categoria en Español</label></p>
								  <div><input type="text" name="desc_es" id="desc_es"  class="large"/></div>
							  </div>
								<div>
								<p><label>Titulo Sub Categoria en Ingles</label></p>
								<div><input type="text" name="desc_en" id="desc_en"  class="large"/></div>
								</div>
							
						  </fieldset>
						  <p>&nbsp;</p>                  
						  <a class="uibutton" onclick="xajax_news(xajax.getFormValues(\'formnews\')); return false;">Crear Sub Categoria</a>
				</form>
				</div>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th width="25%"><div class="th_wrapp">Categoria</div></th>
						<th width="27%"><div class="th_wrapp">Titulo Sub Categoria Español</div></th>	
						<th width="27%"><div class="th_wrapp">Titulo Sub Categoria Ingles</div></th>	
						<th width="21%"><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				$query2 = "SELECT s.id_subcategoria,s.desc_subcategoria_es,s.desc_subcategoria_en,c.id_categoria,c.desc_categoria_es,c.desc_categoria_en
				FROM cms_subcategorias s inner join cms_categorias c on c.id_categoria = s.id_categoria
				order by c.id_categoria";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results2 = $this->db->results;
				
				if($results2 != ""){
					foreach($results2 as $result2)
					{
					
					
					$query3 = "SELECT * FROM cms_productos WHERE id_subcategoria = ".$result2[id_subcategoria];
					$this->db->doQuery($query3,SELECT_QUERY);
					$results3 = $this->db->results;
					
					$html .= '
						<tr class="odd gradeX">
						<td width="200px">'.$result2[desc_categoria_es].' - '.$result2[desc_categoria_en].'</td>
						<td width="200px">'.$result2[desc_subcategoria_es].'</td>
						<td width="200px">'.$result2[desc_subcategoria_en].'</td>
						<td class="center" width="100px">';
						//if($results3[0][id_subcategoria] == ""){
							$html .= '<a id="'.$result2[id_subcategoria].'" class="Delete uibutton special" tableToDelete="cms_subcategorias" nameField="id_subcategoria">Eliminar</a>';
						//}
						$html .= '<a  href="edit.php?id='.$result2[id_subcategoria].'&funcionality=1" class="uibutton">Editar</a>
						</td>
						</tr>';		
					}
				}	
				$html .= '
				</tbody>
				</table>
				</div>';
				return $html;
				
			break;
					
				}
		}
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_categorias";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		
		$query2 = "SELECT * FROM cms_subcategorias WHERE id_subcategoria = ".$id;
		$this->db->doQuery($query2,SELECT_QUERY);
		$results2 = $this->db->results;
		
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Sub Categoría</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						  <fieldset>
						  <p><label>Categorias</label></p>
							<div>
							
							<select name="categoria" id="categoria" class="chzn-select">';
							
							$html .= '<option value="0">Seleccione una Categoria</option>';
								if($results != ""){
								
								foreach($results as $result)
								{
									$sel = "";
									if($results2[0][id_categoria] == $result[id_categoria]){
										$sel = "selected";
									}
						$html .= '<option value="'.$result[id_categoria].'" '.$sel.' >'.$result[desc_categoria_es].' / '.$result[desc_categoria_en].'</option>';
								
								}
								}
								
					$html .= '</select>
						  </div>	
						<p>&nbsp;</p>
						   <div>
							  <p><label>Titulo Sub Categoria en Español</label></p>
							  <div><input type="text" name="desc_es" id="desc_es"  class="large" value="'.$results2[0][desc_subcategoria_es].'"/></div>
						  </div>
						  
						  <div>
							<p><label>Titulo Sub Categoria en Ingles</label></p>
							<div><input type="text" name="desc_en" id="desc_en"  class="large" value="'.$results2[0][desc_subcategoria_en].'"/></div>
						  </div>
						  
						  </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar Sub categoria</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		

		}
	}

}
?>





















