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
					if ($tipo=='1') {		
		$query = "SELECT * FROM t_usuarios ORDER BY id_usuario DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
	}else{
$query = "SELECT * FROM t_usuarios WHERE id_usuario='".$_GET['id']."' ORDER BY id_usuario DESC";
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
	document.getElementById( "img" ).value = fileUrl;
	
}

	</script>';
	if ($tipo=='1') {	

  // abrir un directorio y listarlo recursivo 
  

	$html.='   <div>
				  
				  <form id="menus" action="../controller/index.php?id=1" method="post">                  
                  <legend><h1>Nuevo Usuario</h1></legend>                    
               				  
				  <div class="section">
                      <label>Estado:</label>
                       <div><select name="estado">
					   <option value="0">Inactivo</option>
					   <option value="1">Activo</option>
					   </select></div>                       
				  </div>
				 
				  <div class="section">
                      <label>Nombre:</label>
                       <div><input type="text" name="nombre" id="nombre" class="large"/></div>                       
				  </div>

				  <div class="section">
                      <label>Apellido:</label>
                       <div><input type="text" name="apellido" id="apellido" class="large"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>E-mail:</label>
                       <div><input type="text" name="email" id="email" class="large"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Teléfono:</label>
                       <div><input type="text" name="telefono" id="telefono" class="large"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>País:</label>
                       <div><input type="text" name="pais" id="pais" class="large"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Ciudad:</label>
                       <div><input type="text" name="ciudad" id="ciudad" class="large"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Contrase&ntilde;a:</label>
                       <div><input type="password" name="contrasena" id="contrasena" class="large"/> 
                       </div>
				  </div>
				    <div class="section">
                      <label>Subtitulo:</label>
                       <div><input type="text" name="subtitulo" id="subtitulo" class="large"/> 
                       </div>
				  </div>
				   <div class="section">
                      <label>Descripción:</label>
                       <div><textarea  name="descripcion2" id="descripcion2" cols="" rows=""></textarea>
					   <script type="text/javascript">
CKEDITOR.replace( "descripcion2",
    {
        filebrowserBrowseUrl : "../../includes/ckfinder/ckfinder.html",
		 toolbar :
               [
                     
                      
               ]
		
    });
  </script> 
                       </div>
				  </div>
				  
				  
				                
	              <br /><br />
                  <input name="" type="submit" class="uibutton" value="Agregar Usuario" />
            	  </form>
				  
				  </div>';
				  $html.='
					
	
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Nombre</div></th>
				<th><div class="th_wrapp">Apellido</div></th>
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
			<td class="center" width="50px">'.$result[apellido].'</td>
			<td class="center" width="100px">
<a  href="edit.php?id='.$result[id_usuario].'&funcionality=2" class="uibutton">Editar</a>
			<a id="'.$result[id_usuario].'" class="Delete uibutton special" tableToDelete="t_usuarios" nameField="id_usuario">Eliminar</a>

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
				  
				  <form id="menus" action="../controller/index.php?id=2" method="post">                  
                  <legend><h1>Actualizar Usuario</h1></legend>                    
               				  
				  <div class="section">
                      <label>Estado:</label>
                       <div><select name="estado">
					   ';
					  $estado=$results[0][estado];
					   if($estado=='0'){ 
					   $html.='
						<option value="0" selected="selected">Inactivo</option>
					   <option value="1">Activo</option> ';
					   }else{
						 $html.='
						<option value="0">Inactivo</option>
					   <option value="1" selected="selected">Activo</option> ';  
						   }
						
					   
					   	$html.=' 
					   </select></div>                       
				  </div>
				 
				  <div class="section">
                      <label>Nombre:</label>
                       <div><input type="text" name="nombre" id="nombre" class="large" value="'.$results[0][nombre].'"/></div>                       
				  </div>

				  <div class="section">
                      <label>Apellido:</label>
                       <div><input type="text" name="apellido" id="apellido" class="large" value="'.$results[0][apellido].'"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>E-mail:</label>
                       <div><input type="text" name="email" id="email" class="large" value="'.$results[0][email].'"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Teléfono:</label>
                       <div><input type="text" name="telefono" id="telefono" class="large" value="'.$results[0][telefono].'"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>País:</label>
                       <div><input type="text" name="pais" id="pais" class="large"  value="'.$results[0][pais].'"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Ciudad:</label>
                       <div><input type="text" name="ciudad" id="ciudad" class="large"  value="'.$results[0][ciudad].'"/> 
                       </div>
				  </div>
				  <div class="section">
                      <label>Contrase&ntilde;a:</label>
                       <div><input type="password" name="contrasena" id="contrasena" class="large"  value="'.$results[0][contrasena].'"/> 
                       </div>
				  </div>
				    <div class="section">
                      <label>Subtitulo:</label>
                       <div><input type="text" name="subtitulo" id="subtitulo" class="large"  value="'.$results[0][subtitulo].'"/> 
                       </div>
				  </div>
				   <div class="section">
                      <label>Descripción:</label>
                       <div><textarea  name="descripcion2" id="descripcion2" cols="" rows="" >'.$results[0][descripcion].'</textarea>
					   <script type="text/javascript">
CKEDITOR.replace( "descripcion2",
    {
        filebrowserBrowseUrl : "includes/ckfinder/ckfinder.html",
		
		 toolbar :
               [
                     
                      
               ]
    });
  </script> 
                       </div>
				  </div>
				  
				  
				                
	              <br /><br />
                  <input name="" type="submit" class="uibutton" value="Editar Usuario" />
				  <a href="index.php" class="uibutton" >Atras</a>
				  <input name="id_usuario" type="hidden" class="uibutton" value="'.$results[0][id_usuario].'" />
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