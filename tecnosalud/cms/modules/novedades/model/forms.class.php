<?php

////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Forms {

    var $db;

    function __construct($db) {
        $this->db = $db;
    }

    /**/

//IMPRIME FORMULARIO PARA LA INSTALACION DEL MODULO
    /**/

    function printFormInstall() {
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

    function printFormNews($funcionality) {
        switch ($funcionality) {
            case 1:


                break;
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            case 2:

                $query = "SELECT * FROM cms_bannernosotros ORDER BY bannernosotros_id DESC";
                $this->db->doQuery($query, SELECT_QUERY);
                $results = $this->db->results;

                $html = '
				
				<script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<p>&nbsp;</p>
                                    <div class="imu_info" id="info"></div>
                                    
                                				
                             
                                <form id="form" method="post" action="../controller/controller.php">
<fieldset>
				<div>
				<div>
				<label>Imagen Banner - (el tamaño debe ser de 976px x 350px)</label>
                                

<p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,976x350" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
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
							
						<th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
                if ($results == 0) {
                    
                } else {


                    foreach ($results as $result) {
                        $html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px"><img src="../files/middle/' . $result[bannernosotros_image] . '"></td>
					
					<td class="center" width="20px">
					<a id="' . $result[bannernosotros_id] . '" class="Delete uibutton special" tableToDelete="bannernosotros_contacto" nameField="bannernosotros_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[bannernosotros_id] . '&funcionality=2" class="uibutton">Editar</a>
<input type="hidden"  class="amt" >					
</td>
					</tr>';
                    }

                    $html .= '
				</tbody>
				</table>
				</div>';
                }

                return $html;

                break;
            //////////////////////////////////////////////////////////////////			
            case 3:


                break;
        }
    }

//////////////////////
//Imprime formularios de edicion y presenta opciones de carga segun la funcionalidad del modulo
    function printFormNews2() {




        $query = "SELECT * FROM cms_novedades ORDER BY novedad_id DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
       
        $html = '
				
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
                                <script type="text/javascript" src="../js/jContacto.js"></script>
                                <script type="text/javascript" src="../js/jquery.date.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <link type="text/css" rel="stylesheet" href="../css/tecnosalud.css" />
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
                                
                              <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<fieldset>
                                  <div>
                                      
                                            
                                       
                                      <h1>AGREGAR NOVEDAD</h1>
                                          
                                     
                                  
                                 
                                    <div>
                                      <p><label>Titulo Noticia :</label></p>
                                      <div><input type="text" name="title" id="title"  class="large" /></div>
                                          <span class="f_help" style="margin-rigtht: 200px;"> Límite de carácteres 18 / <span class="title"></span></span>
                                  </div>
                               <p>&nbsp;</p>
                               <div>
                                      <p><label>Texto Descriptivo :</label></p>
                                      <div><textarea style="resize:none;" rows="5" name="descript" id="descript"  class="large"></textarea></div>
                                      <span class="f_help" style="margin-rigtht: 200px;"> Límite de carácteres 210 / <span class="descript"></span></span>    
                                  </div>
                                  
                              <p>&nbsp;</p>   
                           <p>&nbsp;</p>
                               <div>
                                      <p><label>Texto Noticia :</label></p>
                                      <div><textarea style="resize:none;" rows="8" name="texto" id="texto"  class="large"></textarea></div>
                                         
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
                           
                               <div>
                                      <p><label>Fecha Novedad :</label></p>
                                      <div><input type="text" name="fecha"   class="short alerta"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  		
                                <div>                          
                                <p>&nbsp;</p>
				<div>
				<label>Imagen Novedad  - (el tamaño debe ser de 576px – 400px )</label>
                                

                                <p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,224x200,576x400 " thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				
				<p>&nbsp;</p>				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
                                        <input name="id" type="hidden" value="' . $_GET["id"] . '" />
				</span>
				</div>
				</div>
				
				</form>
				</div>
                                </fieldset>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Titulo</div></th>	
						<th><div class="th_wrapp">Texto</div></th>	
						<th><div class="th_wrapp">Imagen</div></th>
                                                
                                                <th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
        if ($results == 0) {
            
        } else {

            foreach ($results as $result) {
                $html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px">' . $result[novedad_title] . '</td>
                                        
                                           <td class="center" width="250px">'; if(strlen($result[novedad_texto]) > 200){$content = $result[novedad_texto]; $content = substr($content,0,180); $html.= $content."...";} else{ $html.=$result[novedad_texto];} $html.= '</td>
                                         <td class="center" width="250px"><img src="../files/middle/'.$result[novedad_image].'"></td>     
					<td class="center" width="200px">
					<a id="' . $result[novedad_id] . '" class="Delete uibutton special" tableToDelete="cms_novedades" nameField="novedad_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[novedad_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
<input type="hidden"  class="amt" >					
</td>
					</tr>';
            }

            $html .= '
				</tbody>
				</table>
				</div></fieldset>
                                
<script type="text/javascript" language="javascript">
                                 $("#title").limit("18",".title");
                                 $("#descript").limit("210",".descript");
                                 $("#texto").limit("720",".texto");
                                </script>
';
            
        }
        return $html;
    }

    function printFormNews3() {




        $query = "SELECT * FROM cms_novedades ORDER BY novedad_id DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;

        $html = '
				<script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				<form id="form" method="post" action="../controller/controller.php">
                              
                              
				<a href="nuevo.php" class="uibutton submit_form">Agregar Nuevo Banner</a> 
                              
                                 
				
				</form>
				</div>
				
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Titulo</div></th>	
						<th><div class="th_wrapp">Texto</div></th>	
						<th><div class="th_wrapp">Imagen</div></th>
                                                
                                                <th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
        if ($results == 0) {
            
        } else {

            foreach ($results as $result) {
                $html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px">' . $result[novedad_title] . '</td>
                                        <td class="center" width="250px">'; if(strlen($result[novedad_texto]) > 200){$content = $result[novedad_texto]; $content = substr($content,0,180); $html.= $content."...";} else{ $html.=$result[novedad_texto];} $html.= '</td>
                                            <td class="center" width="250px"><img src="../files/middle/'.$result[novedad_image].'"></td>
                                                
					<td class="center" width="200px">
					<a id="' . $result[novedad_id] . '" class="Delete uibutton special" tableToDelete="cms_novedades" nameField="novedad_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[novedad_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
<input type="hidden"  class="amt" >					
</td>
					</tr>';
            }

            $html .= '
				</tbody>
				</table>
				</div></fieldset>';
            
        }

        return $html;
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////
   
   
    
    function printFormEdit($id, $funcionality) {

        $query = "SELECT * FROM cms_novedades WHERE novedad_id = " . $id;
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        //  var_dump($results);
        switch ($funcionality) {
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
                                      <div><input type="text" name="title" id="title" class="large" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  
                                  <div>
                                      <p><label>Noticia</label></p>
                                      <div><textarea name="article" id="article" cols="5" class="large">' . $results[0][news_article] . '</textarea></div>
                                  </div>
                              
                              </fieldset>
                
                              <br /><br />
                              
                              <a class="uibutton" onclick="xajax_edit(xajax.getFormValues(\'formnews\')); return false;">Editar noticia</a> 				  
                              <input name="id" type="hidden" value="' . $_GET["id"] . '" />
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
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<script type="text/javascript" src="../js/jContacto.js"></script>
                                <script type="text/javascript" src="../js/jquery.date.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <link type="text/css" rel="stylesheet" href="../css/tecnosalud.css" />
                               
                                    <div class="imu_info" id="info"></div>
                                    
                                <form id="form" method="post" action="../controller/controllerEdit.php">
                        <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<fieldset>
                                  <div>
                                      
                                            
                                       
                                      <h1>EDITAR NOVEDAD</h1>
                                          
                                     
                                  
                                 
                                    <div>
                                      <p><label>Titulo Noticia :</label></p>
                                      <div><input type="text" name="title" id="title"  class="large" value="' . $results[0][novedad_title] . '"/></div>
                                          <span class="f_help" style="margin-rigtht: 200px;"> Límite de carácteres 18 / <span class="title"></span></span>
                                  </div>
                               <p>&nbsp;</p>
                               <div>
                                      <p><label>Texto Descriptivo :</label></p>
                                      <div><textarea style="resize:none;" rows="5" name="descript" id="descript"  class="large">'.$results[0][novedad_descript] .'</textarea></div>
                                      <span class="f_help" style="margin-rigtht: 200px;"> Límite de carácteres 210 / <span class="descript"></span></span>    
                                  </div>
                                  
                              <p>&nbsp;</p>   
                           <p>&nbsp;</p>
                               <div>
                                      <p><label>Texto Noticia :</label></p>
                                      <div><textarea style="resize:none;" rows="8" name="texto" id="texto"  class="large">'.$results[0][novedad_texto] .'</textarea></div>
                                          
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
                           
                               <div>
                                      <p><label>Fecha Novedad :</label></p>
                                      <div><input type="text" name="fecha" value="' . $results[0][novedad_fecha] . '"  class="short alerta"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                                  <div>
				<div>
                                <img src="../files/middle/' . $results[0][novedad_image] . '">
                                </div>
				</div>			
                                <div>                          
                                <p>&nbsp;</p>
				<div>
				<label>Imagen Novedad  - (el tamaño debe ser de 576px – 400px )</label>
                                

                                <p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,224x200,576x400 " thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" allowRemove="true" />
	
				</div>
				</div>
				
				<p>&nbsp;</p>				
				<div>
				<div>	
				<input type="submit" value="Guardar" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>
                                        <input name="id" type="hidden" value="' . $_GET["id"] . '" />
				</span>
				</div>
				</div>
				
				</form>
				</div>
                                </fieldset>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				
<script type="text/javascript" language="javascript">
                                 $("#title").limit("18",".title");
                                 $("#descript").limit("210",".descript");
                                 
                                </script>
                                



';
            
        
        return $html;
      
                break;
            //////////////////////////////////////////////////////////////////		
            case 3:

                $queryTwo = "SELECT * FROM cms_news_pics WHERE news_id = '$id' ORDER BY news_id DESC";
                $this->db->doQuery($queryTwo, SELECT_QUERY);
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
								  <div><input type="text" name="title" id="title" class="large" value="' . $results[0][news_title] . '"/></div>
							  </div>
							  
						  <p>&nbsp;</p>
							  
							  <div>
								  <p><label>Noticia</label></p>
								  <div><textarea name="article" id="article" cols="5" class="large">' . $results[0][news_article] . '</textarea></div>
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
				</div><input name="foreing_key" type="hidden" value="' . $id . '" />
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

                foreach ($resultsTwo as $resultTwo) {
                    $html .= '
					<tr class="odd gradeX">
					<td class="center" width="70px"><img src="../files/big/' . $resultTwo[news_pics_path] . '"></td>
					<td class="center" width="100px">
					<a id="' . $resultTwo[news_pics_id] . '" class="Delete uibutton special" tableToDelete="cms_news_pics" nameField="news_pics_id">Eliminar</a>
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

}
?>





















