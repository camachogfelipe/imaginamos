<?php
////////////////////////////////
//fercho.ba@gmail.com
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
							  <option value="1">Instalaci&oacute;n por defecto</option>
						  </select>
						  </p>
					  </div>				  
					  </fieldset>
					  
					  <p>&nbsp;</p>
					  
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
//IMPRIME FORMULARIO DE BANNERS
/**/

function printFormContacto($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_contacto ORDER BY contacto_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="tableName toolbar">
				';	
					
					foreach ($results as $result)
					{
						$html .= '
							
							<label>Contenido:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.nl2br($result[contacto_contenido]).'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Direcci&oacute;n 1:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_direc].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Direcci&oacute;n 2:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_direc2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Barrio:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_barrio].'</div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<label>Ciudad:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_ciudad].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Pa&iacute;s:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_pais].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Tel&eacute;fono:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_tel].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Movil:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_movil].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Correo electr&oacute;nico:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
							<fieldset>
								<div>'.$result[contacto_email].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<fieldset>
								<div><a  href="edit.php?id='.$result[contacto_id].'&funcionality=1" class="uibutton">Editar</a></div>
							</fieldset>
							<p>&nbsp;</p>
						';
					}
				$html .= '
				
				</div>';
				
				return $html;
				
			break;
						
				}
		}
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_contacto WHERE contacto_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						<p>&nbsp;</p>
						<p>&nbsp;</p>
                        <div>
						<label>Contenido:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="5" class="large">'.$results[0][contacto_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Direcci&oacute; 1:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="dir" id="dir" value="'.$results[0][contacto_direc].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Direcci&oacute; 2:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="dir2" id="dir2" value="'.$results[0][contacto_direc2].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Barrio:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="barrio" id="barrio" value="'.$results[0][contacto_barrio].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Ciudad:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="ciudad" id="ciudad" value="'.$results[0][contacto_ciudad].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Pa&iacute;s:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="pais" id="pais" value="'.$results[0][contacto_pais].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Tel&eacute;fono:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="tel" id="tel" value="'.$results[0][contacto_tel].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Movil:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="movil" id="movil" value="'.$results[0][contacto_movil].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Correo electr&oacute;nico:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label>
						<div><input type="text" name="email" id="email" value="'.$results[0][contacto_email].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
					<br /><br />
                    
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		case 2:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Noticias</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="title" id="title" class="large" value="'.$results[0][foodservice_title].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  
                                  <div>
                                      <p><label>Noticia</label></p>
                                      <div><textarea name="article" id="article" cols="5" class="large">'.$results[0][foodservice_article].'</textarea></div>
                                  </div>
                              
                              </fieldset>
                
                              <br /><br />
							  
							  <fieldset>
				<div>
				<div>
				
				<img src="../files/big/'.$results[0][foodservice_image].'"><br><br>
				
				<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,100x,x200" button="../images/buttonSingleChange.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar noticia" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="id" type="hidden" value="'.$id.'" />
                    </form>
				  
				  </div>
                  </fieldset>
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
			
				$queryTwo = "SELECT * FROM cms_foodservice_pics WHERE foodservice_id = '$id' ORDER BY foodservice_id DESC";
				$this->db->doQuery($queryTwo,SELECT_QUERY);
				$resultsTwo = $this->db->results;
		
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
				<form id="form" method="post" action="../controller/controllerEditMulti.php">
				
				<legend><h1>Edición de Noticias</h1></legend>
						  
				<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
				
						  <fieldset>
						  
							  <div>
								  <p><label>Título</label></p>
								  <div><input type="text" name="title" id="title" class="large" value="'.$results[0][foodservice_title].'"/></div>
							  </div>
							  
						  <p>&nbsp;</p>
							  
							  <div>
								  <p><label>Noticia</label></p>
								  <div><textarea name="article" id="article" cols="5" class="large">'.$results[0][foodservice_article].'</textarea></div>
							  </div>
						  
						  </fieldset>
			
						  <br /><br />
						  
						  <fieldset>
				<div>
				<div>
				
				<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,100x,x200" button="../images/buttonMore.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar noticia" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="foreing_key" type="hidden" value="'.$id.'" />
                </form>
				  
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($resultsTwo as $resultTwo)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/big/'.$resultTwo[foodservice_pics_path].'"></td>
					<td class="center" width="100px">
					<a id="'.$resultTwo[foodservice_pics_id].'" class="Delete uibutton special" tableToDelete="cms_foodservice_pics" nameField="foodservice_pics_id">Eliminar</a>
					</td>
					</tr>';		
				}	
				$html .= '
				</tbody>
				</table>
				</div>	
					';
		return $html;
		break;
		}
	}

}
?>





















