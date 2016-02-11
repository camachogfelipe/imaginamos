<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Tables
{	
	var $db;
	
	function __construct($db)
		{$this->db=$db;}

	
//IMPRIME FORMULARIO PARA LOS MENUS
function printTableMenus($tipo)
		{
			$query2 = "SELECT * FROM t_usuarios ORDER BY nombre ASC";
		$this->db->doQuery($query2,SELECT_QUERY);
		$results2 = $this->db->results;
		$numOfResults2 = $this->db->getNumResults();
			
					if ($tipo=='1') {		
		$query = "SELECT
t_descargas.id_descarga,
t_descargas.id_usuario,
t_descargas.nombre,
t_descargas.descripcion,
t_descargas.archivo,
t_usuarios.nombre AS usuario
FROM
t_descargas
INNER JOIN t_usuarios ON t_descargas.id_usuario = t_usuarios.id_usuario
";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
	}else{
$query = "SELECT
t_descargas.id_descarga,
t_descargas.id_usuario,
t_descargas.nombre,
t_descargas.descripcion,
t_descargas.archivo,
t_usuarios.nombre AS usuario
FROM
t_descargas
INNER JOIN t_usuarios ON t_descargas.id_usuario = t_usuarios.id_usuario WHERE t_descargas.id_descarga='".$_GET['id']."' ORDER BY id_descarga DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();

	}
		
		
		$html = '
		
				<script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>
<script type="text/javascript" src="../../includes/ckeditor/ckeditor.js"></script>
<script src="../../includes/ckeditor/sample.js" type="text/javascript"></script>
<link href="../../includes/ckeditor/sample.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../includes/ckfinder/ckfinder.js"></script>


<script type="text/javascript">
            function contar(input,num_carat) {
                if (input.value.length >= num_carat) {
                    input.value = input.value.substring(0,num_carat);
                }
                //alamacenamos el resto
                var resto = num_carat - input.value.length;
 
                //imprimimos los caracteres restantes en el span
                var finalT=document.getElementById("letras");
                finalT.innerHTML=resto+"/"+num_carat+" caracteres";
 
            }
        </script>
				

  <script type="text/javascript">

function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	finder.basePath = "../../";	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField;
	finder.popup();

	// It can also be done in a single line, calling the "static"
	// Popup( basePath, width, height, selectFunction ) function:
	// CKFinder.Popup( "../../", null, null, SetFileField ) ;
	//
	// The "Popup" function can also accept an object as the only argument.
	// CKFinder.Popup( { BasePath : "../../", selectActionFunction : SetFileField } ) ;
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
	document.getElementById( "archivo" ).value = fileUrl;
	
}

	</script>';
	if ($tipo=='1') {	

	$html.='   <div>
				  
				  <form id="menus">                  
                  <legend><h1>Nuevo archivo</h1></legend>                    
               				  
				<div class="section">
                      <label>Usuario:</label>
                       <div><select name="id_usuario">
					   
					   ';
					if($numOfResults2>0){
	
		foreach($results2 as $result2)
		{   
					 $html.=' <option value="'.$result2[id_usuario].'">'.$result2[nombre].'</option>';
		}
		
		}
					   
					   
					   	$html.='  
					   </select>
                       </div>
				  </div>			  
						 <div class="section">
                      <label>Archivo:</label>
                       <div><input type="text" name="archivo" id="archivo" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" />
                       </div>
				  </div>	  
				  <div class="section">
                      <label>Nombre Archivo:</label>
                       <div><input type="text" name="nombre" id="nombre" maxlength="25" class="large"/> <br>
						Maximo 25 carácteres
                       </div>
				  </div>
				 

				  <div class="section">
                      <label>Descripcion:</label>
                       <div><textarea  cols="" rows="" name="descripcion" id="descripcion" onkeyup="contar(this,65)" style="width: 442px; height: 81px;"></textarea><br>
						Maximo 65 carácteres
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar archivo</a> 
            	  </form>
				  
				  </div>';
				  $html.='
					
	
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Nombre de Archivo</div></th>
				<th><div class="th_wrapp">usuario</div></th>
				<th><div class="th_wrapp">Acciones</div></th>
			</tr>
		</thead>
		<tbody>
	';
	
	if($numOfResults>0)
	{
		foreach($results as $result)
		{
	
		$html .= '
			<tr class="odd gradeX">
			<td class="center" width="50px">'.$result[nombre].'</td>
			<td class="center" width="50px">'.$result[usuario].'</td>
			<td class="center" width="100px">
<a  href="edit.php?id='.$result[id_descarga].'&funcionality=2" class="uibutton">Editar</a>
			<a id="'.$result[id_descarga].'" class="Delete uibutton special" tableToDelete="t_descargas" nameField="id_descarga">Eliminar</a>

			</td>
			</tr>';
		}
	}
			
$html .= '
</tbody>
</table>
</div>
';
				  }else{

			$html.='   <div>
				  
				  <form id="menus2">                  
                  <legend><h1>Editar archivo</h1></legend>                    
               				  
				<div class="section">
                      <label>Usuario:</label>
                       <div><select name="id_usuario">
					   
					   ';
					if($numOfResults2>0){
	
		foreach($results2 as $result2)
		{   
		if($result2[id_usuario]==$results[0][id_usuario]){
			$sele='selected="selected"';
			}else{
				$sele='';
				}
					 $html.=' <option value="'.$result2[id_usuario].'"  '.$sele.'>'.$result2[nombre].'</option>';
		
		}
		
		}
					   
					   
					   	$html.='  
					   </select>
                       </div>
				  </div>			  
						 <div class="section">
                      <label>Archivo:</label>
                       <div><input type="text" name="archivo" id="archivo" value="'.$results[0][archivo].'" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" />
                       </div>
				  </div>	  
				  <div class="section">
                      <label>Nombre Archivo:</label>
                       <div><input type="text" name="nombre" id="nombre" maxlength="25" value="'.$results[0][nombre].'"  class="large"/> <br>
						Maximo 25 carácteres
                       </div>
				  </div>
				 

				  <div class="section">
                      <label>Descripcion:</label>
                       <div><textarea  cols="" rows="" name="descripcion" id="descripcion" onkeyup="contar(this,65)" style="width: 442px; height: 81px;">'.$results[0][descripcion].'</textarea><br>
						Maximo 65 carácteres
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  <input type="hidden" name="id_descarga" id="id_descarga" value="'.$results[0][id_descarga].'"  class="large"/>
				  <a class="uibutton" onclick="xajax_menus2(xajax.getFormValues(\'menus2\')); return false;">Editar archivo</a> 
				  <a class="uibutton" href="index.php">volver</a> 
            	  </form>
				  
				  </div>';	  	


			}
	
		return $html;

			
		}
		
		
function icons()
{
	$html = '			

';
	
	}		
}
?>