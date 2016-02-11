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

function printFormCat($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_vendemos_cat ORDER BY vendemos_cat_id DESC";
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
					<label>T&iacute;tulo (m&aacute;ximo 15 caracteres)</label>
					<div>	
						<input type="text" name="titulo" id="titulo" maxlength="15" class="large" />
					</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<label>Contenido (m&aacute;ximo 125 caracteres)</label>
				<div>	
					<textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="10" class="large"></textarea>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<fieldset>
				<div>
					<label>Imagen (tama&ntilde;o: 158px de ancho x 158px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
					<div>
					
						<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,158x158,158x158" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
		
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
					<td class="center" width="100px"><img src="../files/small/'.$result[vendemos_cat_img].'"></td>
					<td class="center" width="60px">'.$result[vendemos_cat_tit].'</td>
					<td class="center" width="100px">
					<a id="'.$result[vendemos_cat_id].'" class="Delete uibutton special" tableToDelete="cms_vendemos_cat" nameField="vendemos_cat_id">Eliminar</a>
					<a  href="editCat.php?id='.$result[vendemos_cat_id].'&funcionality=2" class="uibutton">Editar</a>
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



function printFormProd($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_vendemos_prod ORDER BY vendemos_prod_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$query3 = "SELECT * FROM cms_vendemos_cat order by vendemos_cat_id ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				$html = '
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controllerMulti.php">
            
				
				<div>
					<p><label>Categor&iacute;a</label></p>
					<div>
						<select name="cat" size="1" id="tselectCity">
				';			
						foreach ($results3 as $result3)
						{
							$html .= "<option value='".$result3['vendemos_cat_id']."'>".trim($result3['vendemos_cat_tit'])."</option>";
						}
				$html .= '		
						</select>
					</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<label>T&iacute;tulo (m&aacute;ximo 15 caracteres)</label>
				<div>	
				<input type="text" name="titulo" id="titulo"  maxlength="15" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Resumen (m&aacute;ximo 125 caracteres)</label>
				<div>	
				<div><textarea name="resum" id="resum" style="resize: none;" cols="5" rows="10" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Contenido</label>
				<div>	
				<div><textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="10" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Caracter&iacute;sticas</label>
				<div>	
				<div><textarea name="carac" id="carac" style="resize: none;" cols="5" rows="10" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<fieldset>
				<div>
				<label>Imagenes (tama&ntilde;o: 408px de ancho x 348px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
				
				<div>
				
				<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="94x94,158x158,408x348" button="../images/buttonSingle.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
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
					    <th><div class="th_wrapp">Categoria</div></th>
						<th><div class="th_wrapp">Producto</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($results as $result)
				{
				
				
					$idcate = $result[vendemos_prod_cat];	
					$queryThree = "SELECT * FROM cms_vendemos_cat where vendemos_cat_id = '$idcate' ";
					$this->db->doQuery($queryThree,SELECT_QUERY);
					$resultsThree = $this->db->results;
				
				
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$resultsThree[0][vendemos_cat_tit].'</td>
					<td class="center" width="200px">'.$result[vendemos_prod_tit].'</td>
					<td class="center" width="100px">
					<a id="'.$result[vendemos_prod_id].'" class="Delete uibutton special" tableToDelete="cms_vendemos_prod" nameField="vendemos_prod_id">Eliminar</a>
					<a  href="editProd.php?id='.$result[vendemos_prod_id].'&funcionality=1" class="uibutton">Editar</a>
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
		
		
function printFormNov($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_vendemos_prod WHERE vendemos_prod_nov = 1 ORDER BY vendemos_prod_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$query3 = "SELECT * FROM cms_vendemos_cat order by vendemos_cat_id ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				$query4 = "SELECT * FROM cms_vendemos_prod ORDER BY vendemos_prod_id DESC ";
				$this->db->doQuery($query4,SELECT_QUERY);
				$results4 = $this->db->results;
				
				$html = '
				
				<script type="text/javascript" src="../js/selSector.js"></script>
				
			
				
				<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    <div class="header"><span >Puede incluir un m&aacute;ximo de 10 productos en la secci&oacute;n de novedades</span></div>
					
					<p>&nbsp;</p>
                   <div>
						<p><label>Categor&iacute;a</label></p>
						<div>
							<select name="cat" size="1" id="tselectCity">
					';			
							foreach ($results3 as $result3)
							{
								$html .= "<option value='".$result3['vendemos_cat_id']."'>".trim($result3['vendemos_cat_tit'])."</option>";
							}
					$html .= '		
							</select>
						</div>
					</div>
					
					<p>&nbsp;</p>
					
					
					<div>
						<p><label>Producto</label></p>
						<div>
							<select  name="producto"  id="tselectSector">
							<option value="0">Seleccione</option>
					';			
							
					$html .= '		
							</select>
						</div>
					</div>
					
					<p>&nbsp;</p>
					
					
				
                
                              <br /><br />
                              
                              <a class="uibutton" id="botonGNov" onclick="xajax_editNov(xajax.getFormValues(\'formnews\')); return false;">Guardar</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  
				<p>&nbsp;</p>
				
				<div class="header"><span >No de productos incluidos:</span>&nbsp;<span id="nprodinclud"></span>&nbsp;&nbsp;&nbsp;<span id="msjnprodinclud" ></span></div>
				
				  
				<p>&nbsp;</p>
				<div class="tableName toolbar">
				<table class="display data_table2">
				<thead>
				
					<tr>
					    <th><div class="th_wrapp">Categoria</div></th>
						<th><div class="th_wrapp">Producto</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($results as $result)
				{
				
				
					$idcate = $result[vendemos_prod_cat];	
					$queryThree = "SELECT * FROM cms_vendemos_cat where vendemos_cat_id = '$idcate' ";
					$this->db->doQuery($queryThree,SELECT_QUERY);
					$resultsThree = $this->db->results;
				
				
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$resultsThree[0][vendemos_cat_tit].'</td>
					<td class="center" width="200px">'.$result[vendemos_prod_tit].'</td>
					<td class="center" width="100px">
					
					
					<a  onclick="xajax_elimNov('.$result[vendemos_prod_id].'); return false;" class="uibutton special" >Eliminar</a>
					<input type="hidden"  class="amt" >
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
		
	
function printFormProm($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_vendemos_prod WHERE vendemos_prod_prom = 1 ORDER BY vendemos_prod_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
				
				$query3 = "SELECT * FROM cms_vendemos_cat order by vendemos_cat_id ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				$query4 = "SELECT * FROM cms_vendemos_prod ORDER BY vendemos_prod_id DESC ";
				$this->db->doQuery($query4,SELECT_QUERY);
				$results4 = $this->db->results;
				
				$html = '
				
				<script type="text/javascript" src="../js/selSector2.js"></script>
				
			
				
				<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    <div class="header"><span >Puede incluir un m&aacute;ximo de 9 productos en la secci&oacute;n de promociones</span></div>
					
					<p>&nbsp;</p>
                   <div>
						<p><label>Categor&iacute;a</label></p>
						<div>
							<select name="cat" size="1" id="tselectCity">
					';			
							foreach ($results3 as $result3)
							{
								$html .= "<option value='".$result3['vendemos_cat_id']."'>".trim($result3['vendemos_cat_tit'])."</option>";
							}
					$html .= '		
							</select>
						</div>
					</div>
					
					<p>&nbsp;</p>
					
					<div>
						<p><label>Producto</label></p>
						<div>
							<select style="padding: 6px; " name="producto"  id="tselectSector">
								<option value="0">Seleccione</option>
					';			
							
					$html .= '		
							</select>
						</div>
					</div>
					
					<p>&nbsp;</p>
				
                
                              <br /><br />
                              
                              <a class="uibutton" id="botonGProm" onclick="xajax_editProm(xajax.getFormValues(\'formnews\')); return false;">Guardar</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  
				<p>&nbsp;</p>
				
				<div class="header"><span >No de productos incluidos:</span>&nbsp;<span id="nprodinclud2"></span>&nbsp;&nbsp;&nbsp;<span id="msjnprodinclud2" ></span></div>
				
				  
				<p>&nbsp;</p>
				<div class="tableName toolbar">
				<table class="display data_table2">
				<thead>
				
					<tr>
					    <th><div class="th_wrapp">Categoria</div></th>
						<th><div class="th_wrapp">Producto</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($results as $result)
				{
				
				
					$idcate = $result[vendemos_prod_cat];	
					$queryThree = "SELECT * FROM cms_vendemos_cat where vendemos_cat_id = '$idcate' ";
					$this->db->doQuery($queryThree,SELECT_QUERY);
					$resultsThree = $this->db->results;
				
				
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="200px">'.$resultsThree[0][vendemos_cat_tit].'</td>
					<td class="center" width="200px">'.$result[vendemos_prod_tit].'</td>
					<td class="center" width="100px">
					
					
					<a  onclick="xajax_elimProm('.$result[vendemos_prod_id].'); return false;" class="uibutton special" >Eliminar</a>
					<input type="hidden"  class="amt2" >
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
	
	
	
	function printFormEditCat($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_vendemos_cat WHERE vendemos_cat_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
			//////////////////////////////////////////////////////////////////
			case 2:
			$html = '
			
					<script type="text/javascript" src="../js/upload.min.js"></script>
					<script type="text/javascript" src="../js/swfobject.js"></script>
					<script type="text/javascript" src="../js/myupload.js"></script>
					<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
					<div class="imu_info" id="info"></div>
						
						<form id="form" method="post" action="../controller/controllerEdit.php">
						
						<legend><h1>Edición de Contenido</h1></legend>
								  
						<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<div>
							<label>T&iacute;tulo: (m&aacute;ximo 15 caracteres)  </label>
							<div>
								<input type="text" name="titulo" id="titulo"  maxlength="15"   value="'.$results[0][vendemos_cat_tit].'" class="large" />
							</div>
							</div>
							
							<p>&nbsp;</p>
							
							
							<div>
							<label>Contenido: (m&aacute;ximo 125 caracteres) </label>
							<div><textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="10" class="large">'.$results[0][vendemos_cat_con].'</textarea></div>
							</div>
							
							<p>&nbsp;</p>
							
							
							<div>
							<label>Imagen:  (tama&ntilde;o: 158px de ancho x 158px de alto, formatos: jpg,jpeg &oacute; png)</label>
							<div>
							
							<fieldset>
							<div>
							<div>
								<img src="../files/big/'.$results[0][vendemos_cat_img].'">
								<p>&nbsp;</p>
								<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,158x158,158x158" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
				
							</div>
							</div>
							</fieldset>
							
							<p>&nbsp;</p>
							
								  
					<div>
					<div>	
					<br><br>
					<input type="submit" value="Editar contenido" class="uibutton submit_form" />
					<span class="imu_loader" id="loader">
						<img src=\'../images/loader.gif\'/>
					</span>
					</div>
					</div><input name="id" type="hidden" value="'.$id.'" />
						</form>
				
						';
			return $html;
			break;
		
		}
	}
	
	
	
	function printFormEditProd($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_vendemos_prod WHERE vendemos_prod_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
			$queryTwo = "SELECT * FROM cms_vendemos_prodimg WHERE vendemos_prodimg_prod = '$id' ORDER BY vendemos_prodimg_prod DESC";
				$this->db->doQuery($queryTwo,SELECT_QUERY);
				$resultsTwo = $this->db->results;
				
			$query3 = "SELECT * FROM cms_vendemos_cat order by vendemos_cat_id ";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
		
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
				<form id="form" method="post" action="../controller/controllerEditMulti.php">
				
				<legend><h1>Edición de Contenido</h1></legend>
						  
				<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
				
						  
				<div>
					<p><label>Categor&iacute;a</label></p>
					<div>
						<select name="cat" size="1" id="tselectCity">
				';			
						foreach ($results3 as $result3)
													{
														if($result3['vendemos_cat_id'] == $results[0][vendemos_prod_cat]){
															$html .= "<option value='".$result3['vendemos_cat_id']."' selected='selected' >".trim($result3['vendemos_cat_tit'])."</option>";
														}else{
															$html .= "<option value='".$result3['vendemos_cat_id']."'>".trim($result3['vendemos_cat_tit'])."</option>";
														}
													}
						
						
						
				$html .= '		
						</select>
					</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<div>
				<label>T&iacute;tulo (m&aacute;ximo 15 caracteres)</label>
				<div>	
				<input type="text" name="titulo" id="titulo" maxlength="15" value="'.$results[0][vendemos_prod_tit].'" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Resumen (m&aacute;ximo 125 caracteres)</label>
				<div>	
				<div><textarea name="resum" id="resum" style="resize: none;" cols="5" rows="10" class="large">'.$results[0][vendemos_prod_resum].'</textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Contenido</label>
				<div>	
				<div><textarea name="contenido" id="contenido" style="resize: none;" cols="5" rows="10" class="large">'.$results[0][vendemos_prod_con].'</textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Caracter&iacute;sticas</label>
				<div>	
				<div><textarea name="carac" id="carac" style="resize: none;" cols="5" rows="10" class="large">'.$results[0][vendemos_prod_carac].'</textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				
				<fieldset>
				<div>
				<label>Imagenes (tama&ntilde;o: 408px de ancho x 348px de alto, formatos: jpg,jpeg &oacute; png)</label>
					<p>&nbsp;</p>
				
				<div>
				
				<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="94x94,158x158,408x348" button="../images/buttonSingle.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
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
					<td class="center" width="100px"><img src="../files/small/'.$resultTwo[vendemos_prodimg_img].'"></td>
					<td class="center" width="100px">
					<a id="'.$resultTwo[vendemos_prodimg_id].'" class="Delete uibutton special" tableToDelete="cms_vendemos_prodimg" nameField="vendemos_prodimg_id">Eliminar</a>
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





















