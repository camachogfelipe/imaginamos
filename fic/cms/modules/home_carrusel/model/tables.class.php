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
		$query = "SELECT * FROM t_carrusel ORDER BY id_img DESC";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$numOfResults = $this->db->getNumResults();
	}else{
$query = "SELECT * FROM t_carrusel WHERE id_img='".$_GET['id']."' ORDER BY id_img DESC";
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
                  <legend>Carrusel Home</h1></legend>                    
               				  
				  <div class="section">
                      <label>Nueva foto:</label>
                       <div><input type="text" name="img" id="img" class="large"/> 
						<input type="button" value="Buscar..." onClick="BrowseServer();" class="uibutton" /><br>
						Dimensiones(210 x 115) en Px
                       </div>
				  </div>

				  <div class="section">
                      <label>Texto:</label>
                       <div><input type="text" name="texto" id="texto" maxlength="38" class="large"/> <br>
						Maximo 38 carácteres
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus(xajax.getFormValues(\'menus\')); return false;">Agregar imagen</a> 
            	  </form>
				  
				  </div>';
				  $html.='
					
	
		
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Imagen</div></th>
				<th><div class="th_wrapp">texto</div></th>
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
			<td class="center" width="50px">'.$result[texto].'</td>
			<td class="center" width="100px">
<a  href="edit.php?id='.$result[id_img].'&funcionality=2" class="uibutton">Editar</a>
			<a id="'.$result[id_img].'" class="Delete uibutton special" tableToDelete="t_carrusel" nameField="id_img">Eliminar</a>

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
						Dimensiones(210 x 115) en Px
                       </div>
				  </div>
				  
				    <div class="section">
                      <label>Texto:</label>
                       <div><input type="text" name="texto" id="texto" maxlength="38" class="large" value="'.$results[0][texto].'"/> <br>
						Maximo 38 carácteres
                       </div>
				  </div>
				  
				                
	              <br /><br />
                  
				  <a class="uibutton" onclick="xajax_menus_edit(xajax.getFormValues(\'menus_edit\')); return false;">Editar imagen</a> 
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