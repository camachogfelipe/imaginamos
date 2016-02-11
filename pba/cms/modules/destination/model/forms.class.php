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
//IMPRIME FORMULARIO DE DESTINATION CONTENIDO
/**/

function printFormContenidoDestination()
		{	
			
				$query = "SELECT * FROM cms_destination ORDER BY id DESC";
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
					
					<a  href="edit.php" class="uibutton">Editar</a>
				</div>
				</div>
				';	


				}
					
				
				
				return $html;
				
			
		}

//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEditContenido()
		{
                    
                $query = "SELECT * FROM cms_destination";
		$this->db->doQuery($query,SELECT_QUERY);
		$results1 = $this->db->results;
                
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Destination Edición de Imagen</h1></legend>
                              
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
		
		//////////////////////////////////////////////////////////////////		
		
		}
                
                function printFormGaleria()
		{	
			
                                $query1 = "SELECT * FROM cms_destination_descargas";
				$this->db->doQuery($query1,SELECT_QUERY);
				$results3 = $this->db->results;
                        
				$query = "SELECT * FROM cms_destination_imagenes";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
//                                $cantidad = $this->db->rows;
                                
                                
                                $html ='';  
                                            
//                 if($cantidad < 30){ 

                $html .= '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
            
                                
                                <div>
					<p><label>T&iacute;tulo Descargable</label></p>
					<div>
						<select name="titulo" size="1" id="tselectCity">
				';			
						foreach ($results3 as $result3)
						{
							$html .= "<option value='".$result3['id_descarga']."'>".trim($result3['titulo'])."</option>";
						}
				$html .= '		
						</select>
					</div>
				</div>
                                
                                <p>&nbsp;</p>
				<div>
                                    <label>T&iacute;tulo </label>
				<div>	
                                    <input type="text" name="titulo1" id="titulo1" " class="large" />
				</div>
				</div>
							
				<p>&nbsp;</p>
				
				
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
				
				</form>
				

				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen</div></th>
                                                <th><div class="th_wrapp">Titulo Descargable</div></th>
                                                <th><div class="th_wrapp">Titulo Imagen</div></th>
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
                 ';
				
				foreach ($results as $result)
				{
                                    $query2 = "SELECT * FROM cms_destination_descargas where id_descarga = '$result[id_descarga]'";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results2 = $this->db->results;
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px"><img src="../files/small/'.$result[imagenes].'"></td>
                                        <td class="center" width="100px">'.$results2[0][titulo].'</td>   
                                        <td class="center" width="100px">'.$result[titulo].'</td>  
					<td class="center" width="100px">
					<a id="'.$result[id_imagenes].'" class="Delete uibutton special" tableToDelete="cms_destination_imagenes" nameField="id_imagenes">Eliminar</a>
					<a  href="editGaleria.php?id='.$result[id_imagenes].'" class="uibutton">Editar</a>
					</td>
					</tr>';
				}
                                
//                                var_dump($result[titulo]);
                              
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
						
				
		}
                
                function edit_galeria ($id) {
                    
                    
                $query = "SELECT * FROM cms_destination_imagenes where id_imagenes = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results[0];
                
//                var_dump($id);
                
		$html = '	<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEditGaleria.php">
                    
                    <legend><h1>Edicion Galeria</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							<div>
							<label>T&iacute;tulo</label>
							<div>	
								<input type="text" name="titulo1" id="titulo1"  value="'.$results[titulo].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							<img src="../files/middle/'.$results[imagenes].'"><br><br>
														
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
						</div><input name="id" type="hidden" value="'.$results[id_imagenes].'" />
							</form>
						  
					
				
                  
					';
//                var_dump($results[id_descarga]);
		return $html;
                    
                }
                function edit_contenido_destination(){
                    
                      $query2 = "SELECT * FROM cms_destination";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results = $this->db->results;



			$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición Contenido</h1></legend>
                              
                              <p>&nbsp;</p>
                                
                              <div>
							<label>T&iacute;tulo</label>
							<div>	
								<input type="text" name="titulo" id="titulo"  maxlength=""  value="'.$results[0][titulo].'" class="large" />
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





















