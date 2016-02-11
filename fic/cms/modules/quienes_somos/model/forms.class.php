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
			$consulta="SELECT * FROM t_quienes_somos ORDER BY id_quienes_somos ASC";
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
				<script type="text/javascript" src="../../includes/ckfinder/ckfinder.js"></script>
				<script src="../../includes/ckeditor/ckeditor.js" type="text/javascript"></script>
				<script type="text/javascript" src="../../../js/upload.min.js"></script>
				<script type="text/javascript" src="../../../js/swfobject.js"></script>
				<script type="text/javascript" src="../../../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../../../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				<div>
				<label>Título </label>
				<div>	
				<input type="text" name="titulo" id="titulo" class="small" />
				</div>
				</div>
				
				<p>&nbsp;</p>	
				
				<div>
				<label>Título Subrayado</label>
				<div>	
				<input type="text" name="titulo2" id="titulo2" class="small" />
				</div>
				</div>
				
				<p>&nbsp;</p>	
				
				<div>
				<label>Subtitulo</label>
				<div>	
				<input type="text" name="subtitulo" id="subtitulo" class="small" />
				</div>
				</div>
				
				<p>&nbsp;</p>			
		
			      <div><p><label>Descripción</label></p>
                  <div><textarea name="descripcion" id="descripcion" cols="4" class="medium"></textarea>
				  </div>
                   </div>				   
				
				<p>&nbsp;</p>	
				
		
			      <div><p><label>Imagenes</label></p>
                  <div><textarea name="imagen" id="imagen" cols="4" class="medium"></textarea>
				  </div>
                   </div>				   
				
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
				
			
				
				<tbody>
				';
				
				
					
				$html .= '
				</tbody>
				';
				
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
			
		$query = "SELECT * FROM t_quienes_somos WHERE id_quienes_somos = '1'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		
			$query = "SELECT * FROM t_imagenes_blog";
		$this->db->doQuery($query,SELECT_QUERY);
		$results2 = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Quines Somos</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
							  
							  
							   <div>
                                      <p><label>Título Stroke</label></p>
                                <div><input type="text" name="texto" id="texto" class="medium" value="'.$results[0][titulo_subrayado].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
							  
							    <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="texto" id="texto" class="medium" value="'.$results[0][titulo].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
							  
							  <div>
                                      <p><label>Subtitulo</label></p>
                                      <div><input type="text" name="subtitulo" id="subtitulo" class="medium" value="'.$results[0][subtitulo].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
							  
                                  <div>
                                      <p><label>Descripción</label></p>
                                      <div><textarea name="descripcion" id="descripcion" cols="4" class="large">'.$results[0][descripcion].'</textarea></div>
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
				
				 <script type="text/javascript">

function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	finder.basePath = "../../";	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField;
	finder.popup();

	// It can also be done in a single line, calling the "static"
	// Popup( basePath, width, height, selectFunction ) function:
	// CKFinder.Popup( "../../", null, null, SetFileField ) ;
	//
	// The "Popup" function can also accept an object as the only argument.
	// CKFinder.Popup( { BasePath : "../../", selectActionFunction : SetFileField } ) ;
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
	document.getElementById( "img" ).value = fileUrl;
	
}

	</script>
	
	<script type="text/javascript">
            function contar(input,num_carat) {
                if (input.value.length >= num_carat) {
                    input.value = input.value.substring(0,num_carat);
                }
                //alamacenamos el resto
                var resto = num_carat - input.value.length;
 
                //imprimimos los caracteres restantes en el span
                var finalT=document.getElementById("letras");
                finalT.innerHTML=resto+"/"+num_carat+" caracteres";
 
            }
        </script>
				
				
				
					
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Quienes Somos</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  
							    <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="titulo" id="titulo" maxlength="20" class="medium" value="'.$results[0][titulo].'"/></div><br />Es necesario que el título tenga maximo 20 caracteres.</div>
                                  
                              <p>&nbsp;</p>
                              
							  
							  <div>
                                      <p><label>Subtitulo</label></p>
                                      <div><input type="text" name="subtitulo" id="subtitulo" maxlength="38" class="medium" value="'.$results[0][subtitulo].'"/></div><br />Es necesario que el título tenga maximo 38 caracteres.</div>
                                  
                              <p>&nbsp;</p>
							  
                                  <div>
                                      <p><label>Descripción</label></p>
                                      <div><textarea name="descripcion" id="descripcion" cols="5" onkeyup="contar(this,1267)" class="large">'.$results[0][descripcion].'</textarea></div><br />Es necesario que la descripción tenga maximo 1267 caracteres.</div>
								  
								  <p>&nbsp;</p>
							  
					                              
                              </fieldset>
                                    
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar quienes somos" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					
				</span>
				
				
				
				</div>
				</div><input name="id" type="hidden" value="1" />
				
				  </div>
				  
				  
				  
                  </fieldset>
                    </form>
					
					
				  <form id="menus">  	
				
				 <br /><br />
				 
							<div class="section">
                      <label>Nueva Imagen:</label>
                       <div><input type="text" name="img" id="img" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" /><br>
						Dimensiones(1000 x 445) en Px
                       </div>
				  </div>
				
				
				 <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar Imagen</a> 
				  
				  </form>	
					
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen</div></th>
						
					<th><div class="th_wrapp">Acción</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results2 as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px">		
		<a href="#" class="servItem" style="margin:auto; float:none;">
    	<div class="icon icon1"></div>
       	<div class="texts">
            <div class="tit"><img src="'.$result[img].'"></div>
       
        </div>
   	</a>    
  <div class="clear"></div>

					</td>
                                    <td class="center" width="100px">
                                       <a id="'.$result[id_imagen_blog].'" class="Delete uibutton special" tableToDelete="t_imagenes_blog" nameField="id_imagen_blog">Eliminar</a>
                                      
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





















