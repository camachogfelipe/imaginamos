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
//IMPRIME FORMULARIO DE REGISTRO CIUDAD
/**/

function printFormTxt($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_distrib ORDER BY distrib_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="tableName toolbar">
				';	
					
					foreach ($results as $result)
					{
						$html .= '
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.nl2br($result[distrib_contenido]).'</div>
							</fieldset>
							<p>&nbsp;</p>

							<fieldset>
								<div><a  href="editTxt.php?id='.$result[distrib_id].'&funcionality=1" class="uibutton">Editar</a></div>
							</fieldset>
							<p>&nbsp;</p>
						';
					}
				$html .= '
				
				</div>';
				
				return $html;
				
			break;
						
				}
		}
	

function printFormDatos($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_distrib_ap ORDER BY distrib_ap_id DESC";
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
					<p><label>Campo 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label></p>
					<div><input type="text" name="campo1" id="campo1"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
					<p><label>Campo 2</label></p>
					<div><input type="text" name="campo2" id="campo2"  class="large"/></div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
					<p><label>Campo 3</label></p>
					<div><input type="text" name="campo3" id="campo3"  class="large"/></div>
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
						<th><div class="th_wrapp">Campo 1</div></th>
						<th><div class="th_wrapp">Campo 2</div></th>	
						<th><div class="th_wrapp">Campo 3</div></th>
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
					
					
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="250px"  >'.$result[distrib_ap_tit].'</td>
					<td class="center"  width="150px" >'.$result[distrib_ap_c1].'</td>
					<td class="center"  width="150px" >'.$result[distrib_ap_c2].'</td>
					<td class="center"  width="150px"  >'.$result[distrib_ap_c3].'</td>
					<td class="center" width="150px">
					<a id="'.$result[distrib_ap_id].'" class="Delete uibutton special" tableToDelete="cms_distrib_ap" nameField="distrib_ap_id">Eliminar</a>
					<a  href="editDatos.php?id='.$result[distrib_ap_id].'&funcionality=1" class="uibutton">Editar</a>
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

function printFormEditTxt($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_distrib WHERE distrib_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición del contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
									<div>
										<label>Contenido</label>
										<div><textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="10" class="large">'.$results[0][distrib_contenido].'</textarea></div>
									</div>
									
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		}
	}

	
	function printFormEditDatos($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_distrib_ap WHERE distrib_ap_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición del contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
									<div>
										<p><label>T&iacute;tulo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label></p>
										<div><input type="text" name="titulo" id="titulo" value="'.$results[0][distrib_ap_tit].'" class="large"/></div>
									</div>
									
									<p>&nbsp;</p>
									
									<div>
										<p><label>Campo 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Obligatorio</label></p>
										<div><input type="text" name="campo1" id="campo1" value="'.$results[0][distrib_ap_c1].'" class="large"/></div>
									</div>
									
									<p>&nbsp;</p>
									
									
									<div>
										<p><label>Campo 2</label></p>
										<div><input type="text" name="campo2" id="campo2"  value="'.$results[0][distrib_ap_c2].'"  class="large"/></div>
									</div>
									
									<p>&nbsp;</p>
									
									
									<div>
										<p><label>Campo 3</label></p>
										<div><input type="text" name="campo3" id="campo3" value="'.$results[0][distrib_ap_c3].'" class="large"/></div>
									</div>
									
									<p>&nbsp;</p>
									
									
									
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit2(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  ';
		return $html;
		break;
		}
	}
	
	
	
}
?>





















