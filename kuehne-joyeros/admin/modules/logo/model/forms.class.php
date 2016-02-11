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
		
			    $query = "SELECT * FROM cms_logo";
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
				<legend><h1>Logos</h1></legend>
						              
						  <fieldset>
							<div>
							<table width="80%" border="0">
							  <tr>
							  	<td align="center" width="15%">&nbsp;</td>
								<td align="center" width="30%"><p><label>Logo Header</label></p></td>
								<td align="center" width="30%"><p><label>Logo Footer</label></p></td>
							  </tr>
							  <tr>
							  	<td align="center">&nbsp;</td>
								<td align="center"><div><img src="../files/'.$results[0][logoHeader].'" width="155" /></div></td>
								<td align="center"><div><img src="../files/'.$results[0][logoFooter].'" width="135" /></div></td>
							  </tr>
							  <tr>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <tr>
								<td><label>Subir Imagen de:</label></td>
								<td align="center"><label><input type="radio" name="tipo" id="radio-1" value="1" class="ck" checked /></label></td>
								<td align="center"><label><input type="radio" name="tipo" id="radio-2" value="2" class="ck"/></label></td>
							  </tr>
							  
							</table>

							<p>&nbsp;</p>
							
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg"  fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
							</div>
						<div align="left">•Tamaño : 155x120</div>
						  </fieldset>
						  
						  <p>&nbsp;</p>
						  <input class="uibutton"  name="guardar" type="submit" value="Subir"/>
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
					
				
				</div>';
				return $html;
				
			break;
					
				}
		}


		
					
				

		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo

function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_categorias  ORDER BY desc_categoria_es";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;

		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '';
		return $html;
		break;
		

		}
	}

}
?>





















