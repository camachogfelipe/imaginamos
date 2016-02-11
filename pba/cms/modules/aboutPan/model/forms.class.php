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
				
			break;
						
				}
		}
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_aboutpan_itembloque WHERE banners_id = '$id'";
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
		$query3 = "SELECT * FROM cms_aboutpan_itembloque where id_item = '$id'";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
                                
                $query2 = "SELECT * FROM cms_aboutpan_bloque order by id_bloque ";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results2 = $this->db->results;



			$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición FAQ</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <div>
					<p><label>Titulo</label></p>
					<div>
						<select name="nombreBloque" size="1" id="nombreBloque">
				';			
						foreach ($results2 as $result2)
						{
							$html .= "<option value='".$result2['id_bloque']."'>".trim($result2['nombre_bloque'])."</option>";
						}
				$html .= '		
						</select>
					</div>
				</div>
                                
				
				<p>&nbsp;</p>
                    
                              
                                   <div>
                                
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="titulo" id="titulo" maxlength ="125" class="large" value="'.$results3[0][titulo].'"/></div>
                                  </div>
                              
                              <p>&nbsp;</p>
                              
                              <div>
							<label> Texto (m&aacute;ximo 1265 caracteres)</label>
							<div>	
								<div><textarea name="texto" id="texto" cols="5" class="large">'.$results3[0][texto].'</textarea></div>
							</div>
							</div>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit_FAQ(xajax.getFormValues(\'formnews\')); return false;">Editar FAQ</a> 				  
                              <input name="id" type="hidden" value="'.$results3[0][id_item].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
                                
                        
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
                    
                $query4 = "SELECT * FROM cms_aboutpan_cont";
		$this->db->doQuery($query4,SELECT_QUERY);
		$results = $this->db->results[0];
                
		$html = '	<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>About Panama Edición de Imagen</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							
							<img src="../files/middle/'.$results[imagen].'"><br><br>
														
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
		}
	}
        
        
        
        function printFormCont (){
            
                $query = "SELECT * FROM cms_aboutpan_cont";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
                
//                echo '<pre>';
//                var_dump($results);
//                echo '</pre>';
           	
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
					
					<a  href="edit.php?id='.$result[id].'&funcionality=3" class="uibutton">Editar</a>
				</div>
				</div>
				';	


				}
					
				
				
				return $html;
            
            
        }
        
        function PrintFormImg (){
            
                $query = "SELECT * FROM cms_aboutpan_imagen";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
            
            $html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEditImg.php">
                    
                    <legend><h1>About Panama Edición Imagen Final</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							
							<img src="../files/middle/'.$results[0][imagen].'"><br><br>
														
							<p>&nbsp;</p>
                                                        
							<fieldset>
				<div>
					<label>Imagen (tama&ntilde;o: 485px de ancho x 300px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
					<div>
					
						<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x38,300x192,485x300" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
		
					</div>
				</div>
				</fieldset>
							
							<p>&nbsp;</p>


                              
						<div>
						<div>	
						<br><br>
						<input type="submit" value="Editar Imagen" class="uibutton submit_form" />
						<span class="imu_loader" id="loader">
							<img src=\'../images/loader.gif\'/>
						</span>
						</div>
						</div><input name="id" type="hidden" value="" />
							</form>
						  
					
                  
					';
		return $html;
        }
        
        function printFormBloque()
		{	
			
				$query = "SELECT b.nombre_bloque,i.id_item ,i.titulo,i.texto FROM cms_aboutpan_bloque as b inner join cms_aboutpan_itembloque as i on (b.id_bloque=i.id_bloque) ORDER BY b.id_bloque DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
                                
                                $query3 = "SELECT * FROM cms_aboutpan_bloque order by id_bloque ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				//var_dump($results);
				$html = '
                                <link type="text/css" rel="stylesheet" href="../css/style.css" />
				<div class="imu_info" id="info"></div>
				
                                <form id="formnews">
            
				<div>
					<p><label>Titulo</label></p>
					<div>
						<select name="nombreBloque" size="1" id="nombreBloque">
				';			
						foreach ($results3 as $result3)
						{
							$html .= "<option value='".$result3['id_bloque']."'>".trim($result3['nombre_bloque'])."</option>";
						}
				$html .= '		
						</select>
					</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<label> Titulo (m&aacute;ximo 61 caracteres)</label>
				<div>	
					<input type="text" name="titulo" id="titulo" maxlength="" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
                                
                                <div>
					<label> Texto (m&aacute;ximo 1265 caracteres)</label>
				<div>	
				<div><textarea name="texto" id="texto" cols="5" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
                                


				<div>
				<div>	
				 <a class="uibutton" onclick="xajax_agregar_FAQ(xajax.getFormValues(\'formnews\')); return false;">Guardar</a>
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
						
						<th><div class="th_wrapp">T&iacute;tulo 1</div></th>
						<th><div class="th_wrapp">Bloque</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
                                
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px">'.$result[titulo].'</td>
					<td class="center" width="60px">'.$result[nombre_bloque].'</td>					
					<td class="center" width="100px">
					<a id="'.$result[id_item].'" class="Delete uibutton special" tableToDelete="cms_aboutpan_itembloque" nameField="id_item">Eliminar</a>
					<a  href="edit.php?id='.$result[id_item].'&funcionality=2" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
				
			
		}
                function edit_contenido_aboutpan(){
                    
                      $query2 = "SELECT * FROM cms_aboutpan_cont";
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





















