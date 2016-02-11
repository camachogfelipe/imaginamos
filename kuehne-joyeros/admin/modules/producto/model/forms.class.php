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
				$query = "SELECT * FROM cms_categorias ORDER BY desc_categoria_es";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
					
	
				$html = '
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
				
				<script>
					function enviar(){
							
							var categoria = document.getElementById("categoria").value;
							if(categoria > 0){
								var subcategoria = document.getElementById("subcategoria").value;
							}
							
							var nombre_es = document.getElementById("nombre_es").value;
							var nombre_en = document.getElementById("nombre_en").value;
							var ref_es = document.getElementById("ref_es").value;
							var ref_en = document.getElementById("ref_en").value;
							var desc_es = document.getElementById("desc_es").value;
							var desc_en = document.getElementById("desc_en").value;
							var precio = document.getElementById("precio").value;
							
							if(categoria == 0 || nombre_es == "" || nombre_en == "" || ref_es == "" || ref_en == "" || desc_es == "" || desc_en == "" || precio == ""){
								  document.getElementById("bt1").style.display = "none";
								  document.getElementById("bt2").style.display = "";
							}else{
								 document.getElementById("bt1").style.display = "";
								  document.getElementById("bt2").style.display = "none";
							}
							
						}
				</script>
				
				<div>
				<div class="imu_info" id="info"></div>
				<form name = "form" id="form" method="post" action="../controller/controller.php" onsubmit="enviar();"> 
				<legend><h1>Crear Producto</h1></legend>
						<p>&nbsp;</p>                  
						  <fieldset>
								<p><label>Categorias</label></p>
								<div>
								
								<select name="categoria" id="categoria" class="chzn-select" onchange="cargar()" onblur="enviar()">';
								
								$html .= '<option value="0" >Seleccione una Categoria</option>';
									if($results != ""){
									foreach($results as $result)
									{
								
							$html .= '<option value="'.$result[id_categoria].'">'.$result[desc_categoria_es].' / '.$result[desc_categoria_en].'</option>';
									
									}
									}
									
						$html .= '</select>
							  </div>	
							<p>&nbsp;</p> 
								
								 <div id="subcategoria"></div>
								 
							<p>&nbsp;</p> 
							
							<table border="0">
							  <tr>
								<td width="400">
									<div>
									  <h5><p><label>Nombre Producto en Español</label></h5>
									  <div><input type="text" name="nombre_es" id="nombre_es" class="large" onkeydown="enviar()"/></div>
									</div>
							    </td>
								<td width="400">
									<div>
									<h5><p><label>Nombre Producto en Ingles</label></h5>
									<div><input type="text" name="nombre_en" id="nombre_en" class="large" onkeydown="enviar()"/></div>
								  </div>
							   </td>
							  </tr>
							  
							  <tr>
								<td>
									<div>
									  <h5><label>Referencia Producto en Español</label></h5>
									  <div><input type="text" name="ref_es" id="ref_es" class="large" onkeydown="enviar()"/></div>
									</div>
							    </td>
								<td>
									<h5><label>Referencia Producto en Ingles</label></h5>
									<div><input type="text" name="ref_en" id="ref_en" class="large" onkeydown="enviar()"/></div>
							   </td>
							  </tr>
							  
							  <tr>
								<td>
									<h5><label>Descripción Producto en Español</label></h5>
								  <div><textarea name="desc_es" id="desc_es" rows="6" class="large" onkeydown="enviar()"></textarea></div>
							    </td >
								<td>
									<h5><label>Descripción Producto en Ingles</label></h5>
								  <div><textarea name="desc_en" id="desc_en" rows="6" class="large" onkeydown="enviar()"></textarea></div>
							   </td>
							  </tr>
		
							</table>
							<div>
								<p><label>Precio Producto</label></p>
								<div><input type="text" name="precio" id="precio" class="small" onkeydown="enviar();" onblur = "convertir_d()"/></div>
							</div>
							 <div id="convertir"></div>
							<div>
								<p><label>Imagen Producto</label></p>
							<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
							<div align="left">•Tamaño : 656x395</div>
							
							</div>
							<p>&nbsp;</p>   
							<div>
								<p><label>Destacados</label></p>
								
									<select name="destacado" id="destacado">
										<option value="4">Seleccione un item</option>
										<option value="1">Destacado 1</option>
										<option value="2">Destacado 2</option>
										<option value="3">Destacado 3</option>
									</select>
																
							</div>
							
							
							<div><input type="hidden" name="facebook" id="facebook" class="large"/></div>
							<div><input type="hidden" name="twitter" id="twitter" class="large"/></div>
	
						  </fieldset>
						  <p>&nbsp;</p>                  

							
						  <div id="bt1" style="display:none"><input class="uibutton"  name="guardar" type="submit" value="Crear Producto"/></div>
						  
						 <div id="bt2" style="display:"><a class="uibutton" onclick="xajax_news(xajax.getFormValues(\'form\')); return false;">Crear Producto</a></div>
						  
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
					
					 
					
				</form>
				</div>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th width="50px"><div class="th_wrapp">Destacado</div></th>
						<th width="200px"><div class="th_wrapp">Categoria</div></th>
						<th width="160px"><div class="th_wrapp">Sub Categoria</div></th>	
						<th width="160px"><div class="th_wrapp">Producto Español</div></th>	
						<th width="160px"><div class="th_wrapp">Producto Ingles</div></th>	
						<th width="150px"><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				$query3 = "SELECT p.id_producto, p.id_categoria, p.id_subcategoria, p.nombre_producto_es, p.referencia_producto_es, p.desc_producto_es, p.nombre_producto_en, p.referencia_producto_en, p.desc_producto_en, p.precio_producto, p.imagen, p.compartir_facebook, p.compartir_twitter, p.destacado , c.desc_categoria_es, c.desc_categoria_en, s.desc_subcategoria_es, s.desc_subcategoria_en
							FROM cms_productos p
							left JOIN cms_categorias c ON c.id_categoria = p.id_categoria
							left JOIN cms_subcategorias s ON p.id_subcategoria = s.id_subcategoria
							ORDER BY p.destacado,c.id_categoria,p.nombre_producto_es";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
				if($results3 != ""){
					foreach($results3 as $result3)
					{
					
					$html .= '
						
						<tr class="odd gradeX">
						<td>';
						if($result3[destacado] != 4){
							$html .= '<img src="../images/ok.jpg" width="20px" />';
						}
					$html .= '</td>
						<td>'.$result3[desc_categoria_es].'</td>
						<td>'.$result3[desc_subcategoria_es].'</td>
						<td>'.$result3[nombre_producto_es].'</td>
						<td>'.$result3[nombre_producto_en].'</td>
						<td class="center">';
					   $html .= '<a id="'.$result3[id_producto].'" class="Delete uibutton special" tableToDelete="cms_productos" nameField="id_producto">Eliminar</a>
						<a href="edit.php?id='.$result3[id_producto].'&funcionality=1" class="uibutton">Editar</a>
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
			
		$query = "SELECT * FROM cms_categorias  ORDER BY desc_categoria_es";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		
		$query3 = "SELECT p.id_producto, p.id_categoria, p.id_subcategoria, p.nombre_producto_es, p.referencia_producto_es, p.desc_producto_es, p.nombre_producto_en, p.referencia_producto_en, p.desc_producto_en, p.precio_producto, p.imagen, p.compartir_facebook, p.compartir_twitter, p.destacado, c.desc_categoria_es, c.desc_categoria_en, s.desc_subcategoria_es, s.desc_subcategoria_en
						FROM cms_productos p
						left JOIN cms_categorias c ON c.id_categoria = p.id_categoria
						left JOIN cms_subcategorias s ON p.id_subcategoria = s.id_subcategoria
						WHERE p.id_producto = ".$id." ORDER BY c.id_categoria,p.nombre_producto_es";
				$this->db->doQuery($query3,SELECT_QUERY);
				$results3 = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		
		
		
				$html = '
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
				
				<script>
					function enviar(){
							
							var categoria = document.getElementById("categoria").value;
							if(categoria > 0){
								var subcategoria = document.getElementById("subcategoria").value;
							}
							
							var nombre_es = document.getElementById("nombre_es").value;
							var nombre_en = document.getElementById("nombre_en").value;
							var ref_es = document.getElementById("ref_es").value;
							var ref_en = document.getElementById("ref_en").value;
							var desc_es = document.getElementById("desc_es").value;
							var desc_en = document.getElementById("desc_en").value;
							var precio = document.getElementById("precio").value;
							
							if(categoria == 0 || nombre_es == "" || nombre_en == "" || ref_es == "" || ref_en == "" || desc_es == "" || desc_en == "" || precio == ""){
								  document.getElementById("bt2").style.display = "none";
								  document.getElementById("bt1").style.display = "";
							}else{
								 document.getElementById("bt2").style.display = "";
								  document.getElementById("bt1").style.display = "none";
							}
							
						}
				</script>
				
				<div>
				<div class="imu_info" id="info"></div>
				<form name = "form" id="form" method="post" action="../controller/controllerEdit.php"> 
				<legend><h1>Edición de Producto</h1></legend>
				<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
						<p>&nbsp;</p>                  
						  <fieldset>
								<p><label>Categorias</label></p>
								<div>
								
								<select name="categoria" id="categoria" class="chzn-select" onchange="cargar()" onblur="enviar()">';
								
								$html .= '<option value="0" >Seleccione una Categoria</option>';
									if($results != ""){
									foreach($results as $result)
									{
									$sel = "";
									if($results3[0][id_categoria] == $result[id_categoria]){
										$sel = "selected";
									}
								
							$html .= '<option value="'.$result[id_categoria].'" '.$sel.'>'.$result[desc_categoria_es].' / '.$result[desc_categoria_en].'</option>';
									
									}
									}
									
						$html .= '</select>
							  </div>	
							<p>&nbsp;</p> 
								
								 <div id="subcategoria"></div>
								 
							<p>&nbsp;</p> 
							
							<table border="0">
							  <tr>
								<td width="400">
									<div>
									  <h5><p><label>Nombre Producto en Español</label></h5>
									  <div><input type="text" name="nombre_es" id="nombre_es" class="large" onblur="enviar()"  value="'.$results3[0][nombre_producto_es].'"/></div>
									</div>
							    </td>
								<td width="400">
									<div>
									<h5><p><label>Nombre Producto en Ingles</label></h5>
									<div><input type="text" name="nombre_en" id="nombre_en" class="large" onblur="enviar()" value="'.$results3[0][nombre_producto_en].'"/></div>
								  </div>
							   </td>
							  </tr>
							  
							  <tr>
								<td>
									<div>
									  <h5><label>Referencia Producto en Español</label></h5>
									  <div><input type="text" name="ref_es" id="ref_es" class="large" onblur="enviar()" value="'.$results3[0][referencia_producto_es].'" /></div>
									</div>
							    </td>
								<td>
									<h5><label>Referencia Producto en Ingles</label></h5>
									<div><input type="text" name="ref_en" id="ref_en" class="large" onblur="enviar()" value="'.$results3[0][referencia_producto_en].'"/></div>
							   </td>
							  </tr>
							  
							  <tr>
								<td>
									<h5><label>Descripción Producto en Español</label></h5>
								  <div><textarea name="desc_es" id="desc_es" rows="6" class="large" onblur="enviar()">'.$results3[0][desc_producto_es].'</textarea></div>
							    </td >
								<td>
									<h5><label>Descripción Producto en Ingles</label></h5>
								  <div><textarea name="desc_en" id="desc_en" rows="6" class="large" onblur="enviar()">'.$results3[0][desc_producto_en].'</textarea></div>
							   </td>
							  </tr>
		
							</table>
							<div>
								<p><label>Precio Producto</label></p>
								<div><input type="text" name="precio" id="precio" class="small" onblur="enviar()" value="'.$results3[0][precio_producto].'" /></div>
							</div>
							<div>
								<p><label>Imagen Producto</label></p>';
								if($results3[0][imagen] != ""){
								$html .= '<a href ="../files/'.$results3[0][imagen].'" target="_blank"><img src= "../files/'.$results3[0][imagen].'" width="150px" /></a><br>';
								}
							$html .= '<br><input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
							<div align="left">•Tamaño : 656x395</div>
							</div>
							
								<p>&nbsp;</p>   
							<div>
								<p><label>Destacados</label></p>
								
									<select name="destacado" id="destacado">
										<option value="4" '; if($results3[0][destacado] == 4){ $html .='selected'; } $html .='>Seleccione un item</option>
										<option value="1" '; if($results3[0][destacado] == 1){ $html .='selected'; } $html .='>Destacado 1</option>
										<option value="2" '; if($results3[0][destacado] == 2){ $html .='selected'; } $html .='>Destacado 2</option>
										<option value="3" '; if($results3[0][destacado] == 3){ $html .='selected'; } $html .='>Destacado 3</option>
									</select>
																
							</div>
							
							<div><input type="hidden" name="facebook" id="facebook" class="large" value="'.$results3[0][compartir_facebook].'" /></div>

							<div><input type="hidden" name="twitter" id="twitter"  class="large" value="'.$results3[0][compartir_twitter].'" /></div>
							  
							
						  </fieldset>
						  <p>&nbsp;</p>                  

							
						  <div id="bt1" style="display:"><input class="uibutton"  name="guardar" type="submit" value="Editar Producto"/></div>
						  
						 <div id="bt2" style="display:none"><a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'form\')); return false;">Editar Producto</a></div>
						 
						 <input name="id" type="hidden" value="'.$id.'" />
						  
					  
				</form>
				</div>';

				return $html;
				
		break;
		

		}
	}

}
?>





















