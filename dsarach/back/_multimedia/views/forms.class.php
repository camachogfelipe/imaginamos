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
//IMPRIME FORMULARIO DE NOTICIAS
/**/

function printFormNews($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_news ORDER BY news_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$html = '
				<div>		
				<form id="formnews">        
				<legend><h1>Carga de Noticias</h1></legend>
						<p>&nbsp;</p>                  
						  <fieldset>				  
							  <div>
								  <p><label>Título</label></p>
								  <div><input type="text" name="title" id="title"  class="large"/></div>
							  </div>
								<div>
								<p><label>Capítulo</label></p>
								<div>
								
								<select name="capitulo" id="capitulo" class="large">
									<?php
									for ($k = 0; $k<count($Capitulos);$k+=3)
									{
									?>
									<option value="<?php echo $Capitulos[$k]?>"><?php echo $Capitulos[$k+1]?></option>
									<?php
									}
									?>
								</select>
								</div>
							  					  
					   <p>&nbsp;</p>
							   <div>
								  <p><label>Noticia</label></p>
								  <div><textarea name="article" id="article" cols="5" class="large"></textarea></div>
							  </div>
						  </fieldset>
						  <p>&nbsp;</p>                  
						  <a class="uibutton" onclick="xajax_news(xajax.getFormValues(\'formnews\')); return false;">Cargar noticia</a>
				</form>
				</div>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Título</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				foreach($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$result[news_title].'</td>
					<td class="center" width="100px">
					<a id="'.$result[news_id].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[news_id].'&funcionality=1" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}	
				$html .= '
				</tbody>
				</table>
				</div>';
				return $html;
				
			break;
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			case 2:
			
				
				if ($_SESSION['CMSRolUser'] != 'admin' && $_SESSION['CMSRolUser'] != 'global')
				{
					$query = "SELECT * FROM cms_news WHERE news_idtbl_capitulos = '".$_SESSION['CMSPais']."' ORDER BY news_id DESC";
					
				}
				if ($_SESSION['CMSRolUser'] == 'admin' || $_SESSION['CMSRolUser'] == 'global')
				{
					$query = "SELECT * FROM cms_news ORDER BY news_id DESC";
				}
				
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$query = "SELECT * FROM tbl_capitulos ORDER BY nombretbl_capitulos ASC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results2 = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				<div>
				<label>Título</label>
				<div>	
				<input type="text" name="title" id="title" class="large" />
				</div>
				</div>
				<div>
				<p><label>Capítulo</label></p>
				<div>';
				if ($_SESSION['CMSRolUser'] != 'admin' && $_SESSION['CMSRolUser'] != 'global')
				{
					$query3 = "SELECT nombretbl_capitulos FROM tbl_capitulos WHERE idtbl_capitulos = ".mysql_real_escape_string($_SESSION['CMSPais']);
					$this->db->doQuery($query3,SELECT_QUERY);
					$result3 = $this->db->results;
					$html .='
					<input type="text" disabled="disabled" readonly="readonly" value="'.$result3[0][nombretbl_capitulos].'" class="small" name="txt_capitulo" id="txt_capitulo" />
					<input type="hidden" value="'.$_SESSION['CMSPais'].'" class="small" name="capitulo" id="capitulo" />';
				}
				if ($_SESSION['CMSRolUser'] == 'admin' || $_SESSION['CMSRolUser'] == 'global' )
				{
					$html .='
					<select name="capitulo" id="capitulo" class="large">';
						foreach($results2 as $result2)
						{
							$html .='<option value="'.$result2[idtbl_capitulos].'" ';
							if ($result2[idtbl_capitulos] == $_SESSION['CMSPais'])
							{
								$html .= 'selected="selected"';
							}
							$html .= '>'.$result2[nombretbl_capitulos].'</option>';
						
						}
						$html .='
					</select>';
				}
				$html .='
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Artículo</label>
				<div>	
				<div><textarea name="article" id="article" cols="5" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>				
				
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
						<th><div class="th_wrapp">Imagen</div></th>	
						<th><div class="th_wrapp">Título</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/middle/'.$result[news_image].'"></td>
					<td class="center" width="200px">'.$result[news_title].'</td>
					<td class="center" width="100px">
					<a id="'.$result[news_id].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[news_id].'&funcionality=2" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
			
			break;
			//////////////////////////////////////////////////////////////////			
			case 3:			
				$query = "SELECT * FROM cms_news ORDER BY news_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$html = '
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controllerMulti.php">
            
				<div>
				<label>Título</label>
				<div>	
				<input type="text" name="title" id="title" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Artículo</label>
				<div>	
				<div><textarea name="article" id="article" cols="5" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<fieldset>
				<div>
				<div>
				
				<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,100x,x200" button="../images/buttonSingle.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
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
				
				</form>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2">
				<thead>
				Si desea borrar un ítem recuerde borrar primero las imágenes que tiene cargadas. (Si las tuviera)
					<tr>
						<th><div class="th_wrapp">Título noticia</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$result[news_title].'</td>
					<td class="center" width="100px">
					<a id="'.$result[news_id].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[news_id].'&funcionality=3" class="uibutton">Editar</a>
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
			
		$query = "SELECT * FROM cms_news WHERE news_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		
		$query = "SELECT * FROM tbl_capitulos ORDER BY nombretbl_capitulos ASC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results2 = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
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
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar noticia</a> 				  
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
                    
                    <legend><h1>Edición de Noticias</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="title" id="title" class="large" value="'.$results[0][news_title].'"/></div>
                                  </div>
								  <div>
									<p><label>Capítulo</label></p>
									<div>';
									if ($_SESSION['CMSRolUser'] != 'admin' && $_SESSION['CMSRolUser'] != 'global')
									{
										$query3 = "SELECT nombretbl_capitulos FROM tbl_capitulos WHERE idtbl_capitulos = ".mysql_real_escape_string($_SESSION['CMSPais']);
										$this->db->doQuery($query3,SELECT_QUERY);
										$result3 = $this->db->results;
										$html .='
										<input type="text" disabled="disabled" readonly="readonly" value="'.$result3[0][nombretbl_capitulos].'" class="small" name="txt_capitulo" id="txt_capitulo" />
										<input type="hidden" value="'.$_SESSION['CMSPais'].'" class="small" name="capitulo" id="capitulo" />';
									}
									if ($_SESSION['CMSRolUser'] == 'admin' || $_SESSION['CMSRolUser'] == 'global' )
									{
										$html .='
										<select name="capitulo" id="capitulo" class="large">';
											foreach($results2 as $result2)
											{
												$html .='<option value="'.$result2[idtbl_capitulos].'" ';
												if ($result2[idtbl_capitulos] == $results[0][news_idtbl_capitulos])
													{
														$html .= 'selected="selected"';
													}
												$html .= '>'.$result2[nombretbl_capitulos].'</option>';
											
											}
											$html .='
										</select>';
									}
									$html .='
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
				
				<img src="../files/big/'.$results[0][news_image].'" width="260" height="140"><br><br>
				
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




















