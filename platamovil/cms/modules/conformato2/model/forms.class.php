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
							  <option value="1">Instalaci&oacute;n por defecto</option>
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

function printFormE106($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '1'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<fieldset>
								<div><a  href="editE106.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
function printFormE107($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '2'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE107.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
	function printFormE109($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '3'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editE109.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

		function printFormE201($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '4'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							
							
							<fieldset>
								<div><a  href="editE201.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
function printFormE202($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '5'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE202.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormE203($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '6'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE203.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE204($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '7'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE204.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormE205($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '8'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE205.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormE206($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '9'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE206.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE301($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '10'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE301.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormE302($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '11'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							
							
							<fieldset>
								<div><a  href="editE302.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormE401($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '12'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE401.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
	function printFormE402($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '13'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE402.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
	function printFormE403($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '14'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE403.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
	function printFormE404($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '15'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

								
							
							<fieldset>
								<div><a  href="editE404.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE405($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '16'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							
							
							<fieldset>
								<div><a  href="editE405.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
	function printFormE406($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '17'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							
								
							
							<fieldset>
								<div><a  href="editE406.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

	function printFormC104($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '18'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC104.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

	function printFormC106($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '19'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC106.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

	function printFormC107($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '20'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC107.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC109($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '21'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC109.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	
	function printFormC202($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '22'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC202.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

	function printFormC203($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '23'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC203.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC205($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '24'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<fieldset>
								<div><a  href="editC205.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC206($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '25'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<fieldset>
								<div><a  href="editC206.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC302($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '26'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC302.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC402($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '27'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC402.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC403($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '28'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<fieldset>
								<div><a  href="editC403.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC404($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '29'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC404.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC405($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '30'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<fieldset>
								<div><a  href="editC405.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC502($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '31'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<fieldset>
								<div><a  href="editC502.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC503($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '32'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato2_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC503.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC504($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '33'  ORDER BY conformato2_id DESC";
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
							
							<label>T&iacute;tulo:</label>
							<fieldset>
								<div>'.$result[conformato2_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Izq:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido1].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido Der:</label>
							<fieldset>
								<div>'.$result[conformato2_contenido2].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<fieldset>
								<div><a  href="editC504.php?id='.$result[conformato2_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEditE106($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE106">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE106\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}

function printFormEditE107($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,426x226" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}	

	function printFormEditE109($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE109">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE109\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE201($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE201">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE201\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE202($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE202">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE202\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE203($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE203">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE203\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE204($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,330x307" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE205($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE205">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE205\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE206($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,400x300" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditE301($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
				
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE301">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE301\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
				';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE302($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE302">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE302\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE401($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE401">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE401\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE402($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE402">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE402\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE403($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,426x748" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE404($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
					<div class="imu_info" id="info"></div>
                    
                    <form id="formE404">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE404\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>		
			
				';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditE405($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE405">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formE405\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditE406($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formE406">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
				<div>
					<a class="uibutton" onclick="xajax_edit2(xajax.getFormValues(\'formE406\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC104($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,304x246" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC106($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,631x384" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC107($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,631x314" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC109($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,631x384" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC202($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,631x314" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC203($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,631x384" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC205($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC205">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC205\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC206($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC206">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC206\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC302($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC302">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC302\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC402($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,304x246" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC403($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC403">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC403\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC404($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC404">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC404\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC405($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC405">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
				<div>
					<a class="uibutton" onclick="xajax_edit2(xajax.getFormValues(\'formC405\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC502($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC502">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC502\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	
	function printFormEditC503($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato2_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,424x394" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
	function printFormEditC504($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato2 WHERE conformato2_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC504">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato2_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido Izq</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato2_contenido1].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						<div>
						<label>Contenido Der</label>
						<div><textarea name="contenido2" id="contenido2" cols="5" class="large">'.$results[0][conformato2_contenido2].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC504\')); return false;">Editar contenido</a> 				  
                    <input name="id" type="hidden" value="'.$id.'" />
				</div>
				
                    </form>
			
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		
		//////////////////////////////////////////////////////////////////		
		
		}
	}
	
}
?>





















