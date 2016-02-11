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
                                $query = "SELECT * FROM cms_banners ORDER BY banners_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
				<div>
				<label>T&iacute;tulo 1 (m&aacute;ximo 18 caracteres)</label>
				<div>	
					<input type="text" name="titulo1" id="titulo1" maxlength="" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<label>T&iacute;tulo 2 (m&aacute;ximo 61 caracteres)</label>
				<div>	
					<input type="text" name="titulo2" id="titulo2" maxlength="61" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Enlace</label>
				<div>	
					<input type="text" name="enlace" id="enlace" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<fieldset>
				<div>
					<label>Imagen (tama&ntilde;o: 960px de ancho x 476px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
					<div>
					
						<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x38,500x192,960x476" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
		
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
						<th><div class="th_wrapp">T&iacute;tulo 1</div></th>
						<th><div class="th_wrapp">T&iacute;tulo 2</div></th>
						<th><div class="th_wrapp">T&iacute;tulo 3</div></th>
						<th><div class="th_wrapp">Enlace</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px"><img src="../files/small/'.$result[banners_image].'"></td>
					<td class="center" width="60px">'.$result[banners_txt1].'</td>
					<td class="center" width="60px">'.$result[banners_txt2].'</td>
					<td class="center" width="60px">'.$result[banners_txt3].'</td>
					<td class="center" width="100px">'.$result[banners_url].'</td>
					<td class="center" width="100px">
					<a id="'.$result[banners_id].'" class="Delete uibutton special" tableToDelete="cms_banners" nameField="banners_id">Eliminar</a>
					<a  href="edit.php?id='.$result[banners_id].'&funcionality=2" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
						
                        
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
		 $query = "SELECT * FROM cms_meeting_contenido";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results[0];
                
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Meeting Planner Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							
							<p>&nbsp;</p>
							
							<div>
							<label> Texto (m&aacute;ximo 1265 caracteres)</label>
							<div>	
								<div><textarea name="texto" id="texto" cols="5" class="large">'.htmlentities($results[texto]).'</textarea></div>
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							<img src="../files/middle/'.htmlentities($results[imagen_meeting_contenido]).'"><br><br>
														
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
						</div><input name="id" type="hidden" value="" />
							</form>
						  
					
                  
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
			
				$query = "SELECT * FROM cms_destination_desing_items where id_items = '$id' ";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
                            
		$html = '
                                <link type="text/css" rel="stylesheet" href="../css/style.css" />
				<div class="imu_info" id="info"></div>
				
				<form id="formnews">
            
                                    <br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                                
				
				<p>&nbsp;</p>
				
				
				<div>
				<label> Item (m&aacute;ximo 255 caracteres)</label>
				<div>	
					<input type="text" name="item" id="item" maxlength="255" class="large" value="'.$results[0][item].'" />
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
        
        function printFormTitulo($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_meeting_titulo ORDER BY id_meeting_titulo ASC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				 <form id="formnews">
            
				<div>
					<p><label>T&iacute;tulo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label></p>
					<div><input type="text" name="titulo" id="titulo"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<div>	
				 <a class="uibutton" onclick="xajax_agregar2(xajax.getFormValues(\'formnews\')); return false;">Guardar</a>
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
						<th><div class="th_wrapp">T&iacute;tulo</div></th>						
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';


				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$result[titulo].'</td>					
					<td class="center" width="100px">
					<a id="'.$result[id_meeting_titulo].'" class="Delete uibutton special" tableToDelete="cms_meeting_titulo" nameField="id_meeting_titulo">Eliminar</a>
					<a  href="editTitulo.php?id='.$result[id_meeting_titulo].'&funcionality=2" class="uibutton">Editar</a>
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
               
		
                
             //imprime formulario Item Datos
		function printFormItemDatos($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				
                                
                                
                                $query3 = "SELECT * FROM cms_destination_desing_items order by id_items asc ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results = $this->db->results;
				
				//var_dump($results);
				$html = '
                                <link type="text/css" rel="stylesheet" href="../css/style.css" />
				<div class="imu_info" id="info"></div>
				
				<form id="formnews">
           
				
				<div>
				<label> Item (m&aacute;ximo 255 caracteres)</label>
				<div>	
					<input type="text" name="item" id="item" maxlength="255" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<div>	
				 <a class="uibutton" onclick="xajax_agregar_item(xajax.getFormValues(\'formnews\')); return false;">Guardar</a>
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
						<th><div class="th_wrapp">Item</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="60px">'.$result[item].'</td>					
					<td class="center" width="100px">
					<a id="'.$result[id_items].'" class="Delete uibutton special" tableToDelete="cms_destination_desing_items" nameField="id_items">Eliminar</a>
					<a  href="edit.php?id='.$result[id_items].'&funcionality=3" class="uibutton">Editar</a>
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
                
                function edit_contenido(){
                    
                      $query2 = "SELECT * FROM cms_destination_desing";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results = $this->db->results;



			$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición Desing</h1></legend>
                              
					
                                        
                                        <p>&nbsp;</p>
                                        
                                        <div>
					<p><label>Titulo</label></p>
					<div>
                                        <div><input type="text" name="titulo" id="titulo" maxlength ="255" class="large" value="'.$results[0][titulo].'"/></div>
					</div>
				</div>
                                
                              
                              <p>&nbsp;</p>
                              
                              <div>
							<label> Texto </label>
							<div>	
								<div><textarea name="texto" id="texto" cols="5" class="large">'.$results[0][texto].'</textarea></div>
							</div>
							</div>
                
                              <p>&nbsp;</p>
                    
                              
                                   <div>
                                
                                      <p><label>Subtitulo</label></p>
                                      <div><input type="text" name="titulo2" id="titulo2" maxlength ="255" class="large" value="'.$results[0][subtitulo].'"/></div>
                                  </div>
                                   
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





















