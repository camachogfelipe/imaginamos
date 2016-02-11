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
				$query = "SELECT * FROM cms_user WHERE rol_user = 'user'ORDER BY username_user";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;

				$html = '
				<div>		
				<form id="formnews">        
				<legend><h1>Crear Usuario</h1></legend>
						<p>&nbsp;</p>                  
						  <fieldset>				  
						      <div>
								  <p><label>Usuario:</label></p>
								  <div><input type="text" name="usuario" id="usuario"/></div>
							  </div>
							  
							  <div>
								<p><label>Email del usuario (Con el que se iniciará sesión)</label></p>
								<div><input type="text" name="correo" id="correo" /></div>
							  </div>
							  
							  <div>
								<p><label>Contraseña:</label></p>
								<div><input type="password" name="clave" id="clave" /></div>
							  </div>
							  
							   <div>
								<p><label>Repetir Contraseña: </label></p>
								<div><input type="password" name="clave2" id="clave2" /></div>
							  </div>
							
						  </fieldset>
						  <p>&nbsp;</p>                  
						  <a class="uibutton" onclick="xajax_news(xajax.getFormValues(\'formnews\')); return false;">Crear Usuario</a>
				</form>
				</div>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th width="40%"><div class="th_wrapp">Usuario</div></th>	
						<th width="40%"><div class="th_wrapp">Correo</div></th>	
						<th width="20%"><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				if($results != ""){
				foreach($results as $result)
				{
				
				$html .= '
					<tr class="odd gradeX">
					<td width="200px">'.$result[username_user].'</td>
					<td width="200px">'.$result[email_user].'</td>
					<td class="center" width="100px">
					<a id="'.$result[id_user].'" class="Delete uibutton special" tableToDelete="cms_user" nameField="id_user">Eliminar</a>
					<a  href="edit.php?id='.$result[id_user].'&funcionality=1" class="uibutton">Editar</a>
					</td>
					</tr>';		
				}
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
			
		$query = "SELECT * FROM cms_user WHERE id_user = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Usuarios</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                               <div>
								  <p><label>Usuario:</label></p>
								  <div><input type="text" name="usuario" id="usuario" value="'.$results[0][username_user].'"/></div>
							  </div>
							  
							  <div>
								<p><label>Correo:</label></p>
								<div><input type="text" name="correo" id="correo" value="'.$results[0][email_user].'"/></div>
							  </div>
							  
							  <div>
								<p><label>Contraseña Actual:</label></p>
								<div><input type="text" name="clave" id="clave" /></div>
							  </div>
							  
							  <div>
								<p><label>Nueva Contraseña: </label></p>
								<div><input type="text" name="clave2" id="clave2" /></div>
							  </div>
							  
							   <div>
								<p><label>Repetir Contraseña: </label></p>
								<div><input type="text" name="clave3" id="clave3" /></div>
							  </div>
                              
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar Usuario</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		

		}
	}

}
?>





















