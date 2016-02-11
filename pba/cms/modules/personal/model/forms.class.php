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
//IMPRIME FORMULARIO DE BANNERS
/**/

function printFormBanners($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_personal ";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				
				
				foreach ($results as $result)
				{

				$html = '
				
		
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				
				<fieldset>
				<div>
					<label>Imagen </label>
					<p>&nbsp;</p>
					<div>
					
						<img src="../files/middle/'.$result[imagen].'">
		
					</div>
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div>
				<div>	
					
					<a  href="edit.php?id='.$result[id].'&funcionality=2" class="uibutton">Editar</a>
				</div>
				</div>
				';	


				}
					
				
				
				return $html;
				
			break;
						
				}
		}

		

		//imprime formulario Item Datos
		
		
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_aboutus WHERE id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición del Banner</h1></legend>
                              
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
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar noticia</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		case 2:
                    
                $query = "SELECT * FROM cms_personal";
		$this->db->doQuery($query,SELECT_QUERY);
		$results1 = $this->db->results;
                
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1> Personal Edición de Imagen</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							
							<img src="../files/middle/'.$results1[0][imagen].'"><br><br>
														
							<p>&nbsp;</p>
							<fieldset>
							<div>
								<label>Imagen (tama&ntilde;o: 1616px de ancho x 800px de alto, formatos: jpg,jpeg &oacute; png)</label>
								<p>&nbsp;</p>
							<div>
							
								<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x38,500x192,1616x800" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
				
							</div>
							</div>
							</fieldset>
							
							<p>&nbsp;</p>


                              
						<div>
						<div>	
						<br><br>
						<input type="submit" value="Editar" class="uibutton submit_form" />
						<span class="imu_loader" id="loader">
							<img src=\'../images/loader.gif\'/>
						</span>
						</div>
						</div><input name="id" type="hidden" value="" />
							</form>
						  
					
                  
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
			
				$query = "SELECT * FROM cms_aboutus_item where id_item = '$id' ";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
                                
		$html = '
                                <link type="text/css" rel="stylesheet" href="../css/style.css" />
				<div class="imu_info" id="info"></div>
				
				<form id="formnews">
            
                                    <br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                                
				
				<p>&nbsp;</p>
				
				
				<div>
				<label> Item (m&aacute;ximo 61 caracteres)</label>
				<div>	
					<input type="text" name="item" id="item" maxlength="61" class="large" value="'.$results[0][item].'" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<div>	
				 <a class="uibutton" onclick="xajax_edit_item(xajax.getFormValues(\'formnews\')); return false;">Editar</a>
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div>

                                <input name="id" type="hidden" value="'.$id.'" />

				</form>
                                
				';
		return $html;
		break;
		}
	}

		
                
                function edit_contenido_personal(){
                
                      $query2 = "SELECT * FROM cms_personal";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results = $this->db->results;



			$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición Contenido</h1></legend>
                              
                           
                              <p>&nbsp;</p>
                              
                              <div>
							<label> Texto </label>
							<div>	
								<div><textarea name="texto" id="texto" cols="5" class="large">'.$results[0][texto].'</textarea></div>
							</div>
							</div>
                
                              <p>&nbsp;</p>
                                   
                                  <br><br>
                              
                              <a class="uibutton" onclick="xajax_edit_contenido(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                              <input name="id" type="hidden" value="" />
                  </form>				  
				  </div>                    
                  </fieldset>';
                                
                        
		return $html;
                } 
}
?>





















