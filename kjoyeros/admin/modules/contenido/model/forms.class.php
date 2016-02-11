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

function printFormNews($id, $funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_contenidos  WHERE id_seccion = ".$id;
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$query2 = "SELECT * FROM cms_secciones WHERE id_seccion = ".$id;
				$this->db->doQuery($query2,SELECT_QUERY);
				$results2 = $this->db->results;
				
				$html = '
				<div>		
				<form id="formnews">        
				<legend><h1>Editar '.$results2[0][desc_seccion].'</h1></legend>
						<p>&nbsp;</p>                  
						  <fieldset>';				  
							  if($id == 4){
							$html .= '<div>
									  <p><label>Link</label></p>
									  <div><input type="text" name="link_c" id="link_c" value="'.$results[0][link_cont].'" class="large"/></div>
								  </div>';
							  }else{
								$html .= '<div><input type="hidden" name="link_c" id="link_c" value="" /></div>';
							  }
						$html .= '<p>&nbsp;</p> 
									<div>
									<p><label>Contenido Español</label></p>
									<div><textarea name="desc_es" id="desc_es" class="large">'.$results[0][descripcion_es].'</textarea></div>
									</div>
									<div>
										<p><label>Contenido Ingles</label></p>
										<div>  <textarea name="desc_en" id="desc_en" class="large">'.$results[0][descripcion_en].'</textarea></div>
										</div>

						  </fieldset>
						  <p>&nbsp;</p>                  
						  <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar Contenido</a>
						  <input name="id" type="hidden" value="'.$results[0][id_contenido].'" />
						  <input name="id_seccion" type="hidden" value="'.$results[0][id_seccion].'" />
				</form>
				</div>
				
				<p>&nbsp;</p>
				';

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
			
		$query = "SELECT * FROM cms_categorias WHERE id_categoria = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Categorias</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                               <div>
								  <p><label>Titulo Categoria en Español</label></p>
								  <div><input type="text" name="desc_es" id="desc_es"  class="large" value="'.$results[0][desc_categoria_es].'"/></div>
							  </div>
							  
							  <div>
								<p><label>Titulo Categoria en Ingles</label></p>
								<div><input type="text" name="desc_en" id="desc_en"  class="large" value="'.$results[0][desc_categoria_en].'"/></div>
							  </div>
                              
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar categoria</a> 				  
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





















