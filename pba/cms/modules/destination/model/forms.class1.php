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
				$query = "SELECT * FROM cms_destination_descargas";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller1.php" enctype="multipart/form-data">
            
                                <p>&nbsp;</p>
				<div>
				<label>T&iacute;tulo </label>
				<div>	
					<input type="text" name="titulo1" id="titulo1" maxlength="" class="large" />
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
					<label>PDF</label>
					<p>&nbsp;</p>
					<div>
					
						<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/file.png" fileExt="pdf" fileDesc="pdf (*pdf)" allowRemove="true" />
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
				
                                
                                <div id="IMU7Queue" class="uploadifyQueue"></div>
                                
				</form>
				
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">T&iacute;tulo</div></th>
                                                <th><div class="th_wrapp">PDF</div></th>
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
                                        <td class="center" width="100px">'.$result[titulo].'</td>
					<td class="center" width="100px"><a href="../files/'.$result[descarga].'"><img src ="../files/Adobe_PDF_Icon.svg" width = "50" ></a></td>    
					<td class="center" width="100px">'.$result[url].'</td>
					<td class="center" width="100px">
					<a id="'.$result[id_descarga].'" class="Delete uibutton special" tableToDelete="cms_destination_descargas" nameField="id_descarga">Eliminar</a>
					<a  href="editDescargas.php?id='.$result[id_descarga].'" class="uibutton">Editar</a>
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

function edit_descarga($id)
		{
			
		$query = "SELECT * FROM cms_destination_descargas where id_descarga ='$id'";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
		
		
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit1.php">
                    
                    <legend><h1>Edición Descargas</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<div>
							<label>T&iacute;tulo</label>
							<div>	
								<input type="text" name="titulo1" id="titulo1"  maxlength=""  value="'.$results[0][titulo].'" class="large" />
							</div>
							</div>
							
							
							<p>&nbsp;</p>
							
							<div>
							<label>Enlace</label>
							<div>	
								<input type="text" name="enlace" id="enlace"  value="'.$results[0][url].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							
							
														
							<p>&nbsp;</p>
							<fieldset>
                                                        <div>
                                                                <label>PDF</label>
                                                                <p>&nbsp;</p>
                                                                    <div>
					
                                                                        <input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/file.png" fileExt="pdf" fileDesc="pdf (*pdf)" allowRemove="true" />
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
						</div><input name="id" type="hidden" value="'.$id.'" />
							</form>
						  
					
                  
					';
		return $html;
			
                
	}

}
?>
























