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
				$query = "SELECT * FROM cms_banners_img";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
                                $cantidad = $this->db->rows;
                                
                                
                                $html ='';  
                                            
                 if($cantidad < 30){ 

                $html .= '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				
				<p>&nbsp;</p>
				
				<fieldset>
				<div>
					<label>Imagen (tama&ntilde;o: 1616px de ancho x 800px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
					<div>
					
						<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x50,500x192,1616x800" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
		
					</div>
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div>
				

                                    <input type="hidden" name="id" value="'.$results['idbanners_img'].'">

				</form>
				
                 ';}

                 $html .= '
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
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px"><img src="../files/small/'.$result[imagen_banners].'"></td>
					<td class="center" width="100px">
					<a id="'.$result[idbanners_img].'" class="Delete uibutton special" tableToDelete="cms_banners_img" nameField="idbanners_img">Eliminar</a>
					<a  href="edit.php?id='.$result[idbanners_img].'&funcionality=2" class="uibutton">Editar</a>
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
			
		$query = "SELECT * FROM cms_banners WHERE banners_id = '$id'";
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
                    
                    $query = "SELECT * FROM cms_banners_img where idbanners_img = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results1 = $this->db->results;
                
                
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición del Banner</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							
							
							<p>&nbsp;</p>
							
							
							<img src="../files/middle/'.$results1[0][imagen_banners].'"><br><br>
														
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
               function printFormContenido()
		{	
			
            $query3 = "SELECT * FROM cms_banners ";
            $this->db->doQuery($query3, SELECT_QUERY);
            $results3 = $this->db->results;

            $html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición Contenido</h1></legend>
                              
                                        
                                      <div>
                                
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="titulo" id="titulo" class="large" value="' . $results3[0][banners_txt1] . '"/></div>
                                     </div>
                                
				
				<p>&nbsp;</p>
                    
                              
                                   <div>
                                
                                      <p><label>subtitulo</label></p>
                                      <div><input type="text" name="subtitulo" id="subtitulo" class="large" value="' . $results3[0][banners_txt2] . '"/></div>
                                  </div>
                              
                              <p>&nbsp;</p>
                              
                              <div>
                                
                                      <p><label>Url</label></p>
                                      <div><input type="text" name="url" id="url" class="large" value="' . $results3[0][banners_url] . '"/></div>
                                     </div>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit_contenido_banner(xajax.getFormValues(\'formnews\')); return false;">Editar Contenido</a> 				  
                              <input name="id" type="hidden" value="' . $results3[0][banners_id] . '" />
                  </form>				  
				  </div>                    
                  </fieldset>';
                                
                        
		return $html;
						
				}
        

    }


?>





















