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
		$query = "SELECT * FROM t_contacto ORDER BY id_contacto DESC";
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


				  $html.='
					
	
		<br><br />
<br />
<script type="text/javascript">
function popup(url,ancho,alto) {
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "leonpurpura.com", "width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+"");
}
</script>
<a href="excel.php" target="_blank">Descargar excel <img src="../../../images/EXCEL.png" width="30" style="margin-bottom: -9px;"></a>
	<div class="tableName toolbar">
	<table class="display data_table2" >
		<thead>
			<tr>
				<th><div class="th_wrapp">Nombre</div></th>
				<th><div class="th_wrapp">E-mail</div></th>
				<th><div class="th_wrapp">Asunto</div></th>
				<th><div class="th_wrapp">Acciones</div></th>
			</tr>
		</thead>
		<tbody>
	';
	
	if($numOfResults>0)
	{
		foreach($results as $result)
		{
	$pop="popup('pop_up.php?id_contacto=".$result[id_contacto]."',700,500)";
		$html .= '
			<tr class="odd gradeX">
			<td class="center">'.$result[nombre].'</td>
			<td class="center">'.$result[email].'</td>
			<td class="center">'.$result[asunto].'</td>
			<td class="center">
			<a href="#" onclick="'.$pop.'" class="uibutton">Ver mensaje</a>
			<a id="'.$result[id_contacto].'" class="Delete uibutton special" tableToDelete="t_contacto" nameField="id_contacto">Eliminar</a>

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
	
		return $html;

			
		}
		
		
function icons()
{
	$html = '			

';
	
	}		
}
?>