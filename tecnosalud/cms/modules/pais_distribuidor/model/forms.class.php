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
                if($results  == 0 )
                                { }else{


                foreach ($results as $result) {
                    $html .= '
					<tr class="odd gradeX">
					<td class="center" width="100px"><img src="../files/middle/'.$result[bannernosotros_image].'"></td>
					
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
				</div>';}

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




        $query = "SELECT * FROM cms_pais ORDER BY pais_id DESC";
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
<fieldset>
                              <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<p>&nbsp;</p>
<h1>Nuevo Pais</h1>                               
<div>
                                      <p><label>Nombre Pais</label></p>
                                      <div><input type="text" name="pais"  class="medium"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
                          				
<div>
				<div>
				<label>Imagen Pais - (el tamaño debe ser de 100px – 100px ) en formato PNG</label>
                                

<p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,180x150 " thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="png" fileDesc="Images (*.png)" allowRemove="true" />
	
				</div>
				</div>
				
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
                                </fieldset>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Pais</div></th>	
						<th><div class="th_wrapp">Bandera</div></th>	
						
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
					<td class="center" width="250px">'.$result[pais_nombre].'</td>
                                        <td class="center" width="100px"><img src="../files/middle/'.$result[pais_image].'"></td>
					<td class="center" width="200px">
					<a id="' . $result[pais_id] . '" class="Delete uibutton special" tableToDelete="cms_pais" nameField="pais_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[pais_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
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
    function printFormNews3() {


        

        $query = "SELECT * FROM cms_pais ORDER BY pais_id DESC";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        
        $mensaje = "'Si elimina este país eliminara tambien los distribuidores asociados al mismo'";
        

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
                                
                              
				<a href="nuevo.php" class="uibutton submit_form" >Agregar Pais</a> 
                                <p>&nbsp;</p>
                                <h1>Agregar Pais</h1>
                                 
				
				</form>
				</div>
				<p>&nbsp;</p>
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Pais</div></th>	
						<th><div class="th_wrapp">Bandera</div></th>	
						
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
					<td class="center" width="250px">'.$result[pais_nombre].'</td>
                                        <td class="center" width="100px"><img src="../files/middle/'.$result[pais_image].'"></td>
					<td class="center" width="200px">
					<a id="' . $result[pais_id] . '" class="Delete uibutton special" tableToDelete="cms_pais" nameField="pais_id" onclick ="alert('.$mensaje.')">Eliminar</a>
					<a  href="edit.php?id=' . $result[pais_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
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

    function printFormEdit($id, $funcionality) {

        $query = "SELECT * FROM cms_pais WHERE pais_id = ".$id;
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
		
				
				
                               <script type="text/javascript" src="../js/desactivar.js"></script>
				<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
                                <script type="text/javascript" src="../js/myuploadC.js"></script>
                                <script type="text/javascript" src="../js/myuploadP.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" /> 
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
                                <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<p>&nbsp;</p>
                                    <div class="imu_info" id="info"></div>
                                    
                                <form id="form" method="post" action="../controller/controllerEdit.php">				
                             
                               
<fieldset><h1>Editar Pais</h1>
				<div>
				<div>
				<label>Nombre Pais</label>
                                <p>&nbsp;</p>
                                
                                <input type="text" name="pais"  class="medium" value="' . $results[0][pais_nombre] . '"/>

				</div>
				</div>
                                <p>&nbsp;</p>
                              
                          				
<div>
				<div>
				<label>Imagen Pais - (el tamaño debe ser de 100px – 100px ) en Formato PNG</label>
                                
                                 <p>&nbsp;</p> <p>&nbsp;</p>
<p>&nbsp;</p>                   <img src="../files/middle/'.$results[0][pais_image].'"> <p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,180x150 " thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="png" fileDesc="Images (*.png)" allowRemove="true" />
	<input name="id" type="hidden" value="' . $_GET["id"] . '" />
				</div>
				</div>
				
				<p>&nbsp;</p>				
				<div>
				<div>	
<p>&nbsp;</p>
<div>
		
				<div>
				<div>	
				

<input type="submit" value="Editar Pais" class="uibutton submit_form" />
				<span class="imu_loader" id="loader">
					<img src=\'../images/loader.gif\'/>



				</span>
				</div>
				</div>				
</fieldset>
				
				
				</form>
				</div>
				<p>&nbsp;</p>';
				
				
				
        

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




















