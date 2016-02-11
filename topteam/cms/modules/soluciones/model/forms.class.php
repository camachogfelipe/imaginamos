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

function printFormsoluciones($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_soluciones ORDER BY soluciones_id DESC";
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
							
							<label>Mensaje:</label>
							<fieldset>
								<div>'.$result[soluciones_mensaje].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<fieldset>
								<div><a  href="edit.php?id='.$result[soluciones_id].'&funcionality=1" class="uibutton">Editar</a></div>
							</fieldset>
							<p>&nbsp;</p>
							
							<hr />
							<label>SECCI&Oacute;N 1:</label>
							<hr />
							<p>&nbsp;</p>
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[soluciones_titulo1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[soluciones_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Enlace:</label>
							<fieldset>
								<div>'.$result[soluciones_enlace1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[soluciones_imagenInt1].'"></div>
							</fieldset>
							<p>&nbsp;</p>
							<fieldset>
								<div><a  href="edit.php?id='.$result[soluciones_id].'&funcionality=2" class="uibutton">Editar</a></div>
							</fieldset>
							<p>&nbsp;</p>
							
							
							<hr />
							<label>SECCI&Oacute;N 2:</label>
							<hr />
							<p>&nbsp;</p>
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[soluciones_titulo2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[soluciones_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Enlace:</label>
							<fieldset>
								<div>'.$result[soluciones_enlace2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[soluciones_imagenInt2].'"></div>
							</fieldset>
							<p>&nbsp;</p>
							<fieldset>
								<div><a  href="edit.php?id='.$result[soluciones_id].'&funcionality=3" class="uibutton">Editar</a></div>
							</fieldset>
							<p>&nbsp;</p>
							
							
							
							<hr />
							<label>SECCI&Oacute;N 3:</label>
							<hr />
							<p>&nbsp;</p>
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[soluciones_titulo3].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[soluciones_contenido3].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Enlace:</label>
							<fieldset>
								<div>'.$result[soluciones_enlace3].'</div>
							</fieldset>
							<p>&nbsp;</p>
							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[soluciones_imagenInt3].'"></div>
							</fieldset>
							<p>&nbsp;</p>
							<fieldset>
								<div><a  href="edit.php?id='.$result[soluciones_id].'&funcionality=4" class="uibutton">Editar</a></div>
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
			
		$query = "SELECT * FROM cms_soluciones WHERE soluciones_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit1.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						<div>
						<label>Mensaje</label>
						<div>	
							<input type="text" name="mensaje" id="mensaje" value="'.$results[0][soluciones_mensaje].'" class="large" />
						</div>
						</div>
					
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar contenido" class="uibutton submit_form" />
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
		case 2:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						<div>
						<label>T&iacute;tulo</label>
						<div>	
							<input type="text" name="titulo" id="titulo" value="'.$results[0][soluciones_titulo1].'" class="large" />
						</div>
						</div>
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][soluciones_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Enlace</label>
						<div><input type="text" name="enlace" id="enlace" value="'.$results[0][soluciones_enlace1].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][soluciones_imagenInt1].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,220x145" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
						</div>
						</div>
						</fieldset>
						
						
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar contenido" class="uibutton submit_form" />
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
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit3.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						<div>
						<label>T&iacute;tulo</label>
						<div>	
							<input type="text" name="titulo" id="titulo" value="'.$results[0][soluciones_titulo2].'" class="large" />
						</div>
						</div>
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][soluciones_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Enlace</label>
						<div><input type="text" name="enlace" id="enlace" value="'.$results[0][soluciones_enlace2].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][soluciones_imagenInt2].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,220x145" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
						</div>
						</div>
						</fieldset>
						
						
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar contenido" class="uibutton submit_form" />
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
		case 4:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit4.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
						<div>
						<label>T&iacute;tulo</label>
						<div>	
							<input type="text" name="titulo" id="titulo" value="'.$results[0][soluciones_titulo3].'" class="large" />
						</div>
						</div>
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][soluciones_contenido3].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Enlace</label>
						<div><input type="text" name="enlace" id="enlace" value="'.$results[0][soluciones_enlace3].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][soluciones_imagenInt3].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,220x145" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
						</div>
						</div>
						</fieldset>
						
						
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar contenido" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="id" type="hidden" value="'.$id.'" />
                    </form>
				  
				
					';
		return $html;
		break;
		
		
		
		}
	}

}
?>





















