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

function printFormE101($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '1'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE101.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
	

function printFormE102($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '2'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE102.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

	function printFormE103($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '3'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE103.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE104($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '4'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE104.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE105($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '5'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE105.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormE108($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '6'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE108.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		function printFormE501($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '7'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editE501.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC101($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '8'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC101.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC102($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '9'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC102.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC103($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '10'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC103.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC105($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '11'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC105.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC108($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '12'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC108.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC201($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '13'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC201.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC204($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '14'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC204.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC301($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '15'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC301.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC401($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '16'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC401.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC406($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '17'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC406.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC408($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '18'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC408.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC501($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '19'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC501.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC505($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '20'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC505.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC506($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '21'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC506.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC601($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '22'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC601.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC602($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '23'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

							<label>Imagen:</label>
							<fieldset>
								<div><img src="../files/big/'.$result[conformato1_imagen].'"></div>
							</fieldset>
							<p>&nbsp;</p>	
							
							<fieldset>
								<div><a  href="editC602.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC603($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '24'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>
	
							
							<fieldset>
								<div><a  href="editC603.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC604($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '25'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

													
							<fieldset>
								<div><a  href="editC604.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		function printFormC605($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '26'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

													
							<fieldset>
								<div><a  href="editC605.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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
		
		
		function printFormC606($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '27'  ORDER BY conformato1_id DESC";
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
								<div>'.$result[conformato1_titulo].'</div>
							</fieldset>
							<p>&nbsp;</p>
							
							<label>Contenido:</label>
							<fieldset>
								<div>'.$result[conformato1_contenido].'</div>
							</fieldset>
							<p>&nbsp;</p>

														
							<fieldset>
								<div><a  href="editC606.php?id='.$result[conformato1_id].'&funcionality=1" class="uibutton">Editar</a></div>
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

function printFormEditE101($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 326px Ancho X 498px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,326x498" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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

	
function printFormEditE102($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 326px Ancho X 498px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,326x498" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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

	function printFormEditE103($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 426px Ancho X 347px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,426x347" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
	function printFormEditE104($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 326px Ancho X 498px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,326x498" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
	function printFormEditE105($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 229px Ancho X 270px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,229x270" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
	function printFormEditE108($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 326px Ancho X 377px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,326x377" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
	
	function printFormEditE501($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 326px Ancho X 498px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,326x498" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
	
	function printFormEditC101($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

	
function printFormEditC102($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC102">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC102\')); return false;">Editar contenido</a> 				  
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

function printFormEditC103($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC103">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC103\')); return false;">Editar contenido</a> 				  
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

function printFormEditC105($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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
	
function printFormEditC108($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC108">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC108\')); return false;">Editar contenido</a> 				  
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

function printFormEditC201($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC201">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC201\')); return false;">Editar contenido</a> 				  
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

function printFormEditC204($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC204">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC204\')); return false;">Editar contenido</a> 				  
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

function printFormEditC301($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

function printFormEditC401($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

function printFormEditC406($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

function printFormEditC408($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

function printFormEditC501($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

	function printFormEditC505($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC505">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC505\')); return false;">Editar contenido</a> 				  
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
	
function printFormEditC506($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 300px Ancho X 250px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,300x250" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
			
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
	
function printFormEditC601($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 314px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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
	
function printFormEditC602($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
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
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Imagen Dimensiones 631px Ancho X 384px Alto</label>
						<div>
						
						<fieldset>
						<div>
						<div>
							<img src="../files/big/'.$results[0][conformato1_imagen].'"><br><br>
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

	function printFormEditC603($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC603">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC603\')); return false;">Editar contenido</a> 				  
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
	
	function printFormEditC604($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC604">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC604\')); return false;">Editar contenido</a> 				  
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
	
	
	function printFormEditC605($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC605">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC605\')); return false;">Editar contenido</a> 				  
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
	
	
	function printFormEditC606($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_conformato1 WHERE conformato1_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="formC606">
                    
                    <legend><h1>Edición de Contenido</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                        <div>
						<label>T&iacute;tulo</label>
						<div><input type="text" name="titulo" id="titulo"  value="'.$results[0][conformato1_titulo].'" class="large" /></div>
						</div>
						
						<p>&nbsp;</p>
						
						
						<div>
						<label>Contenido</label>
						<div><textarea name="contenido" id="contenido" cols="5" class="large">'.$results[0][conformato1_contenido].'</textarea></div>
						</div>
						
						<p>&nbsp;</p>
						
									
						      
				
				<div>
					<a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formC606\')); return false;">Editar contenido</a> 				  
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





















