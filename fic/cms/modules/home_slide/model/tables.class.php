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
		$query = "SELECT * FROM t_home_slide ORDER BY id_img DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
	}else{
$query = "SELECT * FROM t_home_slide WHERE id_img='".$_GET['id']."' ORDER BY id_img DESC";
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

	$html.='   <div>
				  
				  <form id="menus">                  
                  <legend><h1>Banner Principal</h1></legend>                    
               				  
				  <div class="section">
                      <label>Nuevo Banner:</label>
                       <div><input type="text" name="img" id="img" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" /><br>
						Dimensiones(1000 x 445) en Px
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar banner</a> 
            	  </form>
				  
				  </div>';
				  $html.='
					
	
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Banner</div></th>
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
			<td class="center" width="50px"><img width="70" src="'.$result[img].'"></td>
			<td class="center" width="100px">
<a  href="edit.php?id='.$result[id_img].'&funcionality=2" class="uibutton">Editar</a>
			<a id="'.$result[id_img].'" class="Delete uibutton special" tableToDelete="t_home_slide" nameField="id_img">Eliminar</a>

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
				  
				  <form id="menus_edit">                  
                  <legend><h1>Banner Principal</h1></legend>                    
               				  
				  <div class="section">
                      <label>Editar Banner:</label>
                       <div><input type="text" name="img" id="img" class="large" value="'.$results[0][img].'" />
                       <input type="hidden" name="id_img" id="id_img" value="'.$results[0][id_img].'" />
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" /><br>
						Dimensiones(1000 x 445) en Px
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus_edit(xajax.getFormValues(\'menus_edit\')); return false;">Editar banner</a> 
				  <a class="uibutton" onclick="history.go(-1)">Volver</a> 

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