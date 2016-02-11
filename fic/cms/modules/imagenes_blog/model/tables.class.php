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
			$query2 = "SELECT * FROM t_blogs ORDER BY id_blog ASC";
		$this->db->doQuery($query2,SELECT_QUERY);
		$results2 = $this->db->results;
		$numOfResults2 = $this->db->getNumResults();
			
					if ($tipo=='1') {		
		$query = "SELECT
t_blogs.titulo,
t_imagenes.img,
t_imagenes.id_imagen,
t_imagenes.id_blog
FROM
t_blogs
INNER JOIN t_imagenes ON t_imagenes.id_blog = t_blogs.id_blog ORDER BY t_blogs.id_blog Asc
";
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
	document.getElementById( "archivo" ).value = fileUrl;
	
}

	</script>';
	if ($tipo=='1') {	

	$html.='   <div>
				  
				  <form id="menus">                  
                  <legend><h1>Nueva imagen</h1></legend>                    
               				  
				<div class="section">
                      <label>Blog:</label>
                       <div><select name="id">
					   
					   ';
					if($numOfResults2>0){
	
		foreach($results2 as $result2)
		{   
					 $html.=' <option value="'.$result2[id_blog].'">'.$result2[titulo].'</option>';
		}
		
		}
					   
					   
					   	$html.='  
					   </select>
					   <style>
					   .ui-selectmenu {
						   width: 250px !important;}
						   .ui-selectmenu .ui-selectmenu-status {
						   width: auto !important;}
						   .ui-selectmenu-menu{
							   width: 250px !important;}
					   </style>
                       </div>
				  </div>			  
						 <div class="section">
                      <label>Imagen:</label>
                       <div><input type="text" name="archivo" id="archivo" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" />
                       </div>
				  </div>	  
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar Imagen</a> 
            	  </form>
				  
				  </div>';
				  $html.='
					
	
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Titulo Blog</div></th>
				<th><div class="th_wrapp">Imagen</div></th>
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
			<td class="center" width="50px">'.$result[titulo].'</td>
			<td class="center" width="50px"><img width="150" src="'.$result[img].'"></td>
			<td class="center" width="100px">

			<a id="'.$result[id_imagen].'" class="Delete uibutton special" tableToDelete="t_imagenes" nameField="id_imagen">Eliminar</a>

			</td>
			</tr>';
		}
	}
			
$html .= '
</tbody>
</table>
</div>
';
				  }
				  
				  else{

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
					 $html.=' <option value="'.$result2[titulo].'"</option>';
		
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