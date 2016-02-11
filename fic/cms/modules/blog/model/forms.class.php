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
			$consulta="SELECT * FROM t_blogs ORDER BY id_blog DESC";
			switch($funcionality)
			{
			case 1:
				$query = $consulta;
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
								  <div><input type="text" name="texto" id="texto"  class="large"/></div>
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
					<td class="center" width="200px">'.$result[texto1].'</td>
					<td class="center" width="100px">
					<a id="'.$result[id_home_slide].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[id_home_slide].'&funcionality=1" class="uibutton">Editar</a>
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
			
				$query = $consulta;
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../../../js/upload.min.js"></script>
				<script type="text/javascript" src="../../../js/swfobject.js"></script>
				<script type="text/javascript" src="../../../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../../../css/style.css" />
				<script type="text/javascript" src="../../includes/ckfinder/ckfinder.js"></script>
				<script type="text/javascript" src="../../includes/ckeditor/ckeditor.js"></script>
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				<div>
				<label>Título</label>
				<div>	
				<input type="text" name="titulo" id="titulo" maxlength="20" class="medium" /><br>
				Es necesario que tenga maximo 20 caracteres.
				</div>
				</div>
				
				<p>&nbsp;</p>

				<div>
				<label>Subtitulo</label>
				<div>	
				<input type="text" name="subtitulo" id="subtitulo" class="medium" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				 <label>Descripción</label>
				 <div><textarea name="descripcion" id="descripcion" cols="4" class="medium"></textarea></div>
				 </div>
							  
				<p>&nbsp;</p>	

				<div>
				<p><label>TAGS</label></p>
				<p><div>	
				<label>Titulo Tag 1</label>
				<input type="text" name="tag1" id="tag1" class="small" />
				<label>URL</label>
				 <input type="text" name="url1" id="url1" class="small" />
				</div></p>
				<p><div>	
				<label>Titulo Tag 2</label>
				<input type="text" name="tag2" id="tag2" class="small" />
				<label>URL</label>
				 <input type="text" name="url2" id="url2" class="small" />
				</div></p>
				<p><div>	
				<label>Titulo tag 3</label>
				<input type="text" name="tag3" id="tag3" class="small" />
				<label>URL</label>
				 <input type="text" name="url3" id="url3" class="small" />
				</div></p>
				</div>
				 <span class="f_help">Recuerde que no es necesario que agregue todos los tags.</span>
				
				<p>&nbsp;</p>				
		
				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
						</span>
				</div>
				</div>
				
				</form>
				
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Título</div></th>
						<th><div class="th_wrapp">Subtitulo</div></th>
						<th><div class="th_wrapp">Accion</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$result[titulo].'</td>
					<td class="center" width="200px">'.$result[subtitulo].'</td>
					<td><a id="'.$result[id_blog].'" class="Delete uibutton special" tableToDelete="t_blogs" nameField="id_blog">Eliminar</a>
					<a  href="edit.php?id='.$result[id_blog].'&funcionality=2" class="uibutton">Editar</a>
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
				$query = $consulta;
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$html = '
				<script type="text/javascript" src="../../../js/upload.min.js"></script>
				<script type="text/javascript" src="../../../js/swfobject.js"></script>
				<script type="text/javascript" src="../../../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../../../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controllerMulti.php">
            
				<div>
				<label>Título</label>
				<div>	
				<input type="text" name="texto" id="texto" class="large" />
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
				
			
	
	<input class="IMU" type="file" path="files/" starton="manually" buttoncaption="Cargar" afterupload="image" maxsize="204800" fileext="jpg,jpeg,png,gif" filedesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowremove="true" id="IMU0" style="display: none;" width="200" height="30">
				</div>
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div>
				<div>	

				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../../../images/loader.gif\'/>
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
					<td class="center" width="200px">'.$result[texto1].'</td>
					<td class="center" width="100px">
					<a id="'.$result[id_home_slide].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[id_home_slide].'&funcionality=3" class="uibutton">Editar</a>
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
			
		$query = "SELECT * FROM t_blogs WHERE id_blog = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
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
                                      <div><input type="text" name="texto" id="texto"  class="large" value="'.$results[0][news_title].'"/></div>
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
		
				<script type="text/javascript" src="../../../js/upload.min.js"></script>
				<script type="text/javascript" src="../../../js/swfobject.js"></script>
				<script type="text/javascript" src="../../../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../../../css/style.css" />
				<script type="text/javascript" src="../../includes/ckfinder/ckfinder.js"></script>
				<script type="text/javascript" src="../../includes/ckeditor/ckeditor.js"></script>
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Blogs</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="titulo" id="titulo" maxlength="20" class="medium" value="'.$results[0][titulo].'"/>                                  </div>
                                  </div>
                                  
                              <p>&nbsp;</p>
							  
							 
							  <div>
                                      <p><label>Subtítulo</label></p>
                                      <div><input type="subtitulo" name="subtitulo" id="texto" class="medium" value="'.$results[0][subtitulo].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
							 
							  
                                  
                                  <div>
                                      <p><label>Descripción</label></p>
                                      <div><textarea name="descripcion" id="descripcion" cols="4" class="medium">'.$results[0][descripcion].'</textarea></div>
                                  </div>
								  
								    <p>&nbsp;</p>
									
									
									  <div>
                                      <p><label>Imagen</label></p>
                                      <div><textarea name="imagen" id="imagen" cols="4" class="medium">'.$results[0][imagen].'</textarea>
									   <script type="text/javascript">
CKEDITOR.replace( "imagen",
    {
        filebrowserBrowseUrl : "../../includes/ckfinder/ckfinder.html",
    });
  </script>								  
									  </div>
                                  </div>
								  
								    <p>&nbsp;</p>
									
									<div>
				<p><label>TAGS</label></p>
				<p><div>	
				<label>Titulo Tag 1</label>
				<input type="text" name="tag1" id="tag1" class="small" value="'.$results[0][tag1].'"/>                       
				<label>URL</label>
				<input type="text" name="url1" id="url1" class="small" value="'.$results[0][url1].'"/>    
				</div></p>
				<p><div>	
				<label>Titulo Tag 2</label>
				<input type="text" name="tag2" id="tag2" class="small" value="'.$results[0][tag2].'"/>  
				<label>URL</label>
				 <input type="text" name="url2" id="url2" class="small" value="'.$results[0][url2].'"/>  
				</div></p>
				<p><div>	
				<label>Titulo tag 3</label>
				<input type="text" name="tag3" id="tag3" class="small" value="'.$results[0][tag3].'"/>  
				<label>URL</label>
				<input type="text" name="url3" id="url3" class="small" value="'.$results[0][url3].'"/>  
				</div></p>
				</div>
				 <span class="f_help">Recuerde que no es necesario que agregue todos los tags.</span>
				
				<p>&nbsp;</p>	
					
                              
                              </fieldset>
                
                              <br /><br />
				
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar blog" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
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
		
				<script type="text/javascript" src="../../../js/upload.min.js"></script>
				<script type="text/javascript" src="../../../js/swfobject.js"></script>
				<script type="text/javascript" src="../../../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../../../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
				<form id="form" method="post" action="../controller/controllerEditMulti.php">
				
				<legend><h1>Edición de Noticias</h1></legend>
						  
				<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
				
						  <fieldset>
						  
							  <div>
								  <p><label>Título</label></p>
								  <div><input type="text" name="texto" id="texto" class="large" value="'.$results[0][news_title].'"/></div>
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
					<img src=\'../../../images/loader.gif\'/>
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





















