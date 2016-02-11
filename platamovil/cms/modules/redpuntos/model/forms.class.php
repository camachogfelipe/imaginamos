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
							  <option value="1">Texto 1, Texto 2, enlace y una imagen</option>
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
//IMPRIME FORMULARIO DE REGISTRO CIUDAD
/**/

function printFormCiudad($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_redpuntos_ciudad WHERE redpuntos_ciudad_activa = '1' ORDER BY redpuntos_ciudad_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				<div>
					<p><label>Ciudad</label></p>
					<div><input type="text" name="ciudad" id="ciudad"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div>
				
				</form>
				
				
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Nombre Ciudad</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="300px"  >'.$result[redpuntos_ciudad_nombre].'</td>
					<td class="center" width="100px">
					<a id="'.$result[redpuntos_ciudad_id].'" class="Delete uibutton special" tableToDelete="cms_redpuntos_ciudad" nameField="redpuntos_ciudad_id">Eliminar</a>
					<a  href="editCiudad.php?id='.$result[redpuntos_ciudad_id].'&funcionality=1" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
				
			break;
						
				}
		}
	

function printFormDatos($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_redpuntos ORDER BY redpuntos_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$query3 = "SELECT * FROM cms_redpuntos_ciudad order by redpuntos_ciudad_id ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				$html = '
				
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller2.php">
            
				<div>
					<p><label>Ciudad</label></p>
					<div>
						<select name="ciudad" size="1">
				';			
						foreach ($results3 as $result3)
						{
							$html .= "<option value='".$result3['redpuntos_ciudad_id']."'>".trim($result3['redpuntos_ciudad_nombre'])."</option>";
						}
				$html .= '		
						</select>
					</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
					<p><label>Localidad</label></p>
					<div><input type="text" name="localidad" id="localidad"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
					<p><label>Barrio</label></p>
					<div><input type="text" name="barrio" id="barrio"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
					<p><label>Nombre del punto</label></p>
					<div><input type="text" name="nombrep" id="nombrep"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
					<p><label>Direcci&oacute;n</label></p>
					<div><input type="text" name="direccion" id="direccion"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
					<p><label>Horario</label></p>
					<div><input type="text" name="horario" id="horario"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div>
				
				</form>
				
				
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Ciudad</div></th>	
						<th><div class="th_wrapp">Localidad</div></th>
						<th><div class="th_wrapp">Barrio</div></th>	
						<th><div class="th_wrapp">Nombre del punto</div></th>
						<th><div class="th_wrapp">Direcci&oacute;n</div></th>	
						<th><div class="th_wrapp">Horario</div></th>
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
					$idcity = $result[redpuntos_campo1];	
					$queryTwo = "SELECT * FROM cms_redpuntos_ciudad where redpuntos_ciudad_id = '$idcity' ";
					$this->db->doQuery($queryTwo,SELECT_QUERY);
					$resultsTwo = $this->db->results;
					//print_r($resultsTwo);
				$html .= '
					<tr class="odd gradeX">
					<td class="center"   >'.$resultsTwo[0][redpuntos_ciudad_nombre].'</td>
					<td class="center"   >'.$result[redpuntos_campo2].'</td>
					<td class="center"   >'.$result[redpuntos_campo3].'</td>
					<td class="center"   >'.$result[redpuntos_campo4].'</td>
					<td class="center"   >'.$result[redpuntos_campo5].'</td>
					<td class="center" width="120px"  >'.$result[redpuntos_campo6].'</td>
					<td class="center" width="100px">
					<a id="'.$result[redpuntos_id].'" class="Delete uibutton special" tableToDelete="cms_redpuntos" nameField="redpuntos_id">Eliminar</a>
					<a  href="editDatos.php?id='.$result[redpuntos_id].'&funcionality=1" class="uibutton">Editar</a>
					</td>
					</tr>';		
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
			
		$query = "SELECT * FROM cms_redpuntos_ciudad WHERE redpuntos_ciudad_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de la Ciudad</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
									<div>
										<p><label>Ciudad</label></p>
										<div><input type="text" name="ciudad" id="ciudad"  class="large" value="'.$results[0][redpuntos_ciudad_nombre].'"/></div>
									</div>
								
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar ciudad</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		}
	}

	function printFormEdit2($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_redpuntos WHERE redpuntos_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		
		$query3 = "SELECT * FROM cms_redpuntos_ciudad order by redpuntos_ciudad_id ";
		$this->db->doQuery($query3,SELECT_QUERY);
		$results3 = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews2">
                    
                    <legend><h1>Edición de la Ciudad</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
									<div>
										<p><label>Ciudad</label></p>
										<div>
											<select name="ciudad" size="1">
											';			
													foreach ($results3 as $result3)
													{
														if($result3['redpuntos_ciudad_id'] == $results[0][redpuntos_campo1]){
															$html .= "<option value='".$result3['redpuntos_ciudad_id']."' selected='selected' >".trim($result3['redpuntos_ciudad_nombre'])."</option>";
														}else{
															$html .= "<option value='".$result3['redpuntos_ciudad_id']."'>".trim($result3['redpuntos_ciudad_nombre'])."</option>";
														}
													}
											$html .= '		
													</select>
										
										</div>
									<p>&nbsp;</p>
									<div>
										<p><label>Localidad</label></p>
										<div><input type="text" name="localidad" id="localidad"  class="large" value="'.$results[0][redpuntos_campo2].'"/></div>
									</div>
									<p>&nbsp;</p>
									<div>
										<p><label>Barrio</label></p>
										<div><input type="text" name="barrio" id="barrio"  class="large" value="'.$results[0][redpuntos_campo3].'"/></div>
									</div>
									<p>&nbsp;</p>
									<div>
										<p><label>Nombre del punto</label></p>
										<div><input type="text" name="nombrep" id="nombrep"  class="large" value="'.$results[0][redpuntos_campo4].'"/></div>
									</div>
									<p>&nbsp;</p>
									<div>
										<p><label>Direcci&oacute;n</label></p>
										<div><input type="text" name="direccion" id="direccion"  class="large" value="'.$results[0][redpuntos_campo5].'"/></div>
									</div>
									<p>&nbsp;</p>
									<div>
										<p><label>Horario</label></p>
										<div><input type="text" name="horario" id="horario"  class="large" value="'.$results[0][redpuntos_campo6].'"/></div>
									</div>
									<p>&nbsp;</p>
								
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit2(xajax.getFormValues(\'formnews2\')); return false;">Editar datos</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
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
                    
                    <legend><h1>Edición del Banner</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							
							<div>
							<label>Texto 1</label>
							<div>	
								<input type="text" name="texto1" id="texto1"  value="'.$results[0][banners_txt1].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							
							<div>
							<label>Texto 2</label>
							<div>	
								<input type="text" name="texto2" id="texto2" value="'.$results[0][banners_txt2].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							<div>
							<label>Enlace</label>
							<div>	
								<input type="text" name="enlace" id="enlace"  value="'.$results[0][banners_url].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							
							<img src="../files/big/'.$results[0][banners_image].'"><br><br>
														
							<fieldset>
							<div>
							<div>
							
								<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
				
							</div>
							</div>
							</fieldset>
							
							<p>&nbsp;</p>


                              
						<div>
						<div>	
						<br><br>
						<input type="submit" value="Editar banner" class="uibutton submit_form" />
						<span class="imu_loader" id="loader">
							<img src=\'../images/loader.gif\'/>
						</span>
						</div>
						</div><input name="id" type="hidden" value="'.$id.'" />
							</form>
						  
					
                  
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
			
				$queryTwo = "SELECT * FROM cms_news_pics WHERE news_id = '$id' ORDER BY news_id DESC";
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
								  <div><input type="text" name="title" id="title" class="large" value="'.$results[0][news_title].'"/></div>
							  </div>
							  
						  <p>&nbsp;</p>
							  
							  <div>
								  <p><label>Noticia</label></p>
								  <div><textarea name="article" id="article" cols="5" class="large">'.$results[0][news_article].'</textarea></div>
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
					<td class="center" width="70px"><img src="../files/big/'.$resultTwo[news_pics_path].'"></td>
					<td class="center" width="100px">
					<a id="'.$resultTwo[news_pics_id].'" class="Delete uibutton special" tableToDelete="cms_news_pics" nameField="news_pics_id">Eliminar</a>
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





















