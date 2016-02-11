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
//IMPRIME FORMULARIO DE NOTICIAS
/**/

function printFormNews($funcionality)
		{	
			switch($funcionality)
			{
			case 1:
				
				
			break;
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			case 2:
			
				$query = "SELECT * FROM cms_news ORDER BY news_id DESC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				<script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<p>&nbsp;</p>
<div class="imu_info" id="info"></div>
				<div id="desact">
                                				
                             
<form id="form" method="post" action="../controller/controller.php">
            
				<div>
				<label>Título</label>
				<div>	
				<input type="text" name="titulo" id="title" class="large" />
				</div>
				</div>
				
				<p>&nbsp;</p>
				
				<div>
				<label>Texto</label>
				<div>	
				<div><textarea name="texto" id="article" cols="5" class="large"></textarea></div>
				</div>
				</div>
				
				<p>&nbsp;</p>				
				
				<fieldset>
				<div>
				<div>
				<label>Imagen de fondo - (el tamaño debe ser de 1000px x 400px)</label>
                                <p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                                <p>&nbsp;</p>
				<fieldset>
				<div>
				<div>
				<label>Imagen frontal - (el tamaño debe ser de 145px x 280px en formato .PNG)</label>
                                <p>&nbsp;</p>
				<input class="IMC" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
				<p>&nbsp;</p>
				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div>
				
				</form>
				</div>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen</div></th>	
						<th><div class="th_wrapp">Título</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/middle/'.$result[news_image].'"></td>
					<td class="center" width="200px">'.$result[news_title].'</td>
					<td class="center" width="100px">
					<a id="'.$result[news_id].'" class="Delete uibutton special" tableToDelete="cms_news" nameField="news_id">Eliminar</a>
					<a  href="edit.php?id='.$result[news_id].'&funcionality=2" class="uibutton">Editar</a>
<input type="hidden"  class="amt" >					
</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
			
			break;
			//////////////////////////////////////////////////////////////////			
			case 3:			
				
			
			break;			
				}
		}
		
//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo
                function printFormNews2()
		{	
			
			
				$query = "SELECT * FROM cms_news ORDER BY news_id ASC";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
			
				$html = '
				<script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <h1>Banner Home</h1>
                                <p>&nbsp;</p>
				<div class="imu_info" id="info"></div>
				<div id="desact">
				
        	
                                <fieldset>				
                               
                                <h1>Banner Home</h1>
                                </fieldset>
			
				</form>
				</div>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen Fondo</div></th>	
						<th><div class="th_wrapp">Imagen Frontal</div></th>
                                                <th><div class="th_wrapp">Título</div></th>	
						<th><div class="th_wrapp">Editar</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach ($results as $result)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/middle/'.$result[news_image].'"></td>
					<td class="center" width="70px"><img src="../files/middle/'.$result[new_image2].'"></td>
                                        <td class="center" width="100px">'.$result[news_title].'</td>
					<td class="center" width="200px">
					
					<a  href="edit.php?id='.$result[news_id].'&funcionality=2" class="uibutton">Contenido</a>
                                        <a  href="edit2.php?id='.$result[news_id].'&funcionality=2" class="uibutton">Imagen Frontal</a>
                                        <a class="uibutton submit_form" "="" href="url.php?id='.$result[news_id].'">Agregar Enlace</a>
<input type="hidden"  class="amt" >					
</td>
					</tr>';		
				}
					
				$html .= '
				</tbody>
				</table>
				</div>';
				
				return $html;
			
			
		}
                
                function url($id){
                    
                    $query = "SELECT * FROM cms_news WHERE news_id = '$id'";
				$this->db->doQuery($query,SELECT_QUERY);
				$results = $this->db->results;
                                
                    $query2 = "SELECT * FROM cms_categoria WHERE id_padre = 0 ORDER BY categoria_id DESC";
                                $this->db->doQuery($query2,SELECT_QUERY);
				$results2 = $this->db->results;
                   	
				
                      $html = '          <script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" /> 
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a> 
                                ';
                      ?>
                                <script type="text/javascript">
             $(document).ready(function(){ 
                       jQuery("select[name='enlace']").change(function(){displayCollage();});           
            });
            
            function displayCollage(){
               // alert("hola");
                  var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";           
                var optionValue = jQuery("select[name='enlace']").val();
               // alert(optionValue);
                jQuery("#collageAjax")
                    .html(ajaxLoader)
                    .load("geraselect.php", {id: optionValue, opt:"sin_ind", status: 1}, function(response){     
                    if(response) {
                        jQuery("#collageAjax").css("display", "");                       
                    } else {                    
                        jQuery("#collageAjax").css("display", "none"); 
                    }
                });     
            } 
                                 </script>  
                            <?php    
                            
			$html ='    
                                    <p>&nbsp;</p>
                                    <div class="imu_info" id="info"></div> 
                                    
                                    <h1>Editar Enlace <p>'.$results[0]["news_title"].'</p></h1> 
                                    ';
                        $evaluar = $results[0]["url"];
                        $buscar = "www";
                        $resultado = strpos($evaluar, $buscar);
                        $label ="" ;
                        $enlace = "";
                        if ($resultado !== FALSE) {
                            
                            $label = "Url a la que se dirige Actualmente:";
                            $enlace = $results[0][url];
    
                            }else{
                                
                                $label = "Seccion a la que se dirige Actualmente:";
                                $enlace = $results[0][url_name];
                            }
                            $html .='  <div>
                                      <p><label>'.$label.'</label></p>
                                      <div>'.$enlace.'</div>
                                      <br>
                                      <br>
                                      </div>
                                    ';
                            
                                  $html .='  <form id="formnews">
                                       
                                  <div>
                                           <p><label>Seleccione :</label></p>
                                      <div>
                                      <select name="enlace" class="medium">
                                        <option></option>  
                                        <option>Url</option>
                                        <option>seccion</option>
                                     </select></div>
                                  </div>
                                  <p>&nbsp;</p>
                                  

                                  <div id="collageAjax">
                    
                                    </div><br>
                                  
                                  <input type="hidden" name="id" value='.$id.'>
                                  
                                  <a class="uibutton" onclick="xajax_enlace(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                              <input name="id" type="hidden" value="'.$id.'" /> 
                                  
                                    </form> 
                           
                             ';
                      
                     return $html; 
            
        
        
                }     
                
                        function printFormEdit($id,$funcionality)
		{
			
		$query = "SELECT * FROM cms_news WHERE news_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
				
		switch($funcionality)
		{
		//////////////////////////////////////////////////////////////////
		case 1:
		$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Edición de Noticias</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  <div>
                                      <p><label>Título</label></p>
                                      <div><input type="text" name="title" id="title" class="large" value="'.$results[0][news_title].'"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  
                                  <div>
                                      <p><label>Noticia</label></p>
                                      <div><textarea name="article" id="article" cols="5" class="large">'.$results[0][news_article].'</textarea></div>
                                  </div>
                              
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar noticia</a> 				  
                              <input name="id" type="hidden" value="'.$_GET[id].'" />
                  </form>				  
				  </div>                    
                  </fieldset>';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		case 2:
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit.php">
                    
                    <legend><h1>Edición de Banner</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              <fieldset>
                              
                                  <div>
                                      <p><label>Título</label></p>
                                      <div><textarea name="title" id="title" class="large" style="resize: none;">'.$results[0][news_title].'</textarea></div>
                                      <span class="f_help" style="margin-rigth: 200px;"> Límite de carácteres 19 / <span class="title"></span></span>    
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  
                                  <div>
                                      <p><label>Texto</label></p>
                                      <div><textarea name="article" id="article" cols="5" rows class="large" style="resize: none;">'.$results[0][news_article].'</textarea></div>
                                          <span class="f_help" style="margin-rigth: 200px;"> Límite de carácteres 260 / <span class="article"></span></span>
                                  </div>
                              
                              </fieldset>
                
                              <br /><br />
							  
							  <fieldset>
				<div>
				<div>
				<p><label>El tamaño Imagen (972px x 330px ) en formato JPG y PNG</label></p>
				<img src="../files/middle/'.$results[0][news_image].'"><br><br>
				
				<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,290x200,972x330" button="../images/buttonSingleChange.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="id" type="hidden" value="'.$id.'" />
                    </form>
				  
				  </div>
                  </fieldset>
                  <script type="text/javascript" language="javascript">
                $("#title").limit("29",".title");
                $("#article").limit("260",".article");
		
                
                </script>
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////		
		case 3:
			
				$queryTwo = "SELECT * FROM cms_news_pics WHERE news_id = '$id' ORDER BY news_id DESC";
				$this->db->doQuery($queryTwo,SELECT_QUERY);
				$resultsTwo = $this->db->results;
		
		$html = '
		
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
				<form id="form" method="post" action="../controller/controllerEditMulti.php">
				
				<legend><h1>Edición de Noticias</h1></legend>
						  
				<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
				
						  <fieldset>
						  
							  <div>
								  <p><label>Título</label></p>
								  <div><input type="text" name="title" id="title" class="large" value="'.$results[0][news_title].'"/></div>
							  </div>
							  
						  <p>&nbsp;</p>
							  
							  <div>
								  <p><label>Noticia</label></p>
								  <div><textarea name="article" id="article" cols="5" class="large">'.$results[0][news_article].'</textarea></div>
							  </div>
						  
						  </fieldset>
			
						  <br /><br />
						  
						  <fieldset>
				<div>
				<div>
				
				<input class="CMS" type="file" path="files/" multi="true" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,100x,x200" button="../images/buttonMore.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Editar noticia" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="foreing_key" type="hidden" value="'.$id.'" />
                </form>
				  
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Imagen</div></th>	
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
				
				foreach($resultsTwo as $resultTwo)
				{
				$html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/big/'.$resultTwo[news_pics_path].'"></td>
					<td class="center" width="100px">
					<a id="'.$resultTwo[news_pics_id].'" class="Delete uibutton special" tableToDelete="cms_news_pics" nameField="news_pics_id">Eliminar</a>
					</td>
					</tr>';		
				}	
				$html .= '
				</tbody>
				</table>
				</div>	
					';
		return $html;
		break;
		}
	
                
        }
       function printFormEdit200($id)
		{
			
		$query = "SELECT * FROM cms_news WHERE news_id = '$id'";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
		$html = '
		
				<script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEdit2.php">
                    
                    <h1>Banner Frontal</h1>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
                              
                
                              <br /><br />
							  
							  <fieldset>
				<div>
				<div>
				<p><label>Imagen Frontal (145px x 280px) en Formato PNG</label></p>
				<img src="../files/big/'.$results[0][new_image2].'"><br><br>
				
				<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" thumbnails="90x90,100x,145x280" button="../images/buttonSingleChange.jpg" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="png" fileDesc="Images (*.png)" allowRemove="true" />
	
				</div>
				</div>
				</fieldset>
                              
				<div>
				<div>	
				<br><br>
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
				</span>
				</div>
				</div><input name="id" type="hidden" value="'.$id.'" />
                    </form>
				  
				  </div>
                  </fieldset>
					';
		return $html;
		
	
                
        } 
        

                }
?>





















