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
//IMPRIME FORMULARIO DE CATEGORIAS
/**/

function printFormNews($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
		
			    $query = "SELECT * FROM cms_banner WHERE tipo = 1 ORDER BY id_banner DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
		
				$html = '
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
				
				<div>
				<form name = "form" id="form" method="post" action="../controller/controller.php" > 
				<div class="imu_info" id="info"></div>
				<legend><h1>Banner Home</h1></legend>
						              
						  <fieldset>
							
							<div>
								<p><label>Imagen Banner</label></p>
								<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg"  fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
							</div>
						<div align="left">•Tamaño : 998x460</div>
						  </fieldset>
						  <p>&nbsp;</p>                  
						  <input name="tipo" id="tipo" type="hidden" value="1" />
						  <input class="uibutton"  name="guardar" type="submit" value="Subir"/>
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
					
				
				</div>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				
				<table class="display" >
				<thead>
					<tr>
						<th width="40%"><div class="th_wrapp">Imagen</div></th>
						<th width="40%"><div class="th_wrapp">Link</div></th>
						<th width="20%"><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>';
				
				
	
				
				if($results != ""){
					$a=0;
					foreach($results as $result)
					{
					
					$html .= '
						<tr class="odd gradeX">
						<td width="200px"><img src="../files/'.$result[imagen].'" width="200"/></td>
						<td width="200px"><textarea name="link_b'.$result[id_banner].'" type="text" cols="25" rows="4">'.$result[link_b].'</textarea>
						 
						</td>
						<td class="center">
						<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'form\'),'.$result[id_banner].'); return false;">Editar Link</a>
						<a id="'.$result[id_banner].'" class="uibutton"   href="edit.php?id='.($result[id_banner]).'&funcionality=1">Editar</a>
                                                <a id="'.$result[id_banner].'" class="Delete uibutton special" tableToDelete="cms_banner" nameField="id_banner">Eliminar</a>
                                                    
						</td>
						</tr>';	
						$a++;	
					}
					
				}	
				$html .= '
				</tbody>
				</table>
				</form>
				</div>';
				return $html;
				
			break;
					
				}
		}


		
					
				

		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_banner WHERE tipo = 1 AND id_banner = ".intval($_GET['id'])." ORDER BY id_banner DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
                //print_r($results);
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
                    <div>
                            <legend><h1>Editar imagen para banner</h1></legend>
                            <form id="form" method="post" action="../controller/controllerEdit.php">
                                <p>
                                   <div id="info1" class="imu_info"></div>
                                    <div>
                                        <div class="section">
                                            <label>Imagen</label>
                                            <small style="color:red">Tamaño recomendado 998 x 460 </small>
                                            <div>
                                            <div><img src="../files/'.$results[0]["imagen"].'" width="190" height="100" /><br /></div>
                                            <br />
                                            <br />
                                            <input type="hidden" value="'.intval($_GET["id"]).'" name="id" />
                                            <input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="false" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg"  fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
                                            </div> 
                                            <!--<input class="IMU" type="file" path="files/" startOn="onSubmit:formAjax" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" multi="false" afterUpload="filename" maxSize="204800" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" thumbnails="90x90" thumbnailsFolders="files/small/" />-->
                                        </div>
                                        <div class="section">
                                            <input type="submit" value="Guardar" class="uibutton" />
                                            <a href="index.php" class="uibutton" />Regresar</a>
                                            <span class="imu_loader" id="loader">
                                            <img src="ajax-loader.gif"/>
                                            </span>
                                        </div>
                                    </div>
                                </p>
                            </form>
                            
                            <br />
                            <br />
                        </div>
                ';
		return $html;
		break;
		

		}
	}

}
?>





















