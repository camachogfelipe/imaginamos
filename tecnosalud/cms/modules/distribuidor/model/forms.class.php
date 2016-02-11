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




        $query = "SELECT * FROM cms_pais";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        
        $queryTree = "SELECT * FROM cms_distribuidor";
        $this->db->doQuery($queryTree, SELECT_QUERY);
        $resultsTree = $this->db->results;
        
       
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
                                
                              <a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>    
				<fieldset>
                                  <div>
                                      <h1>AGREGAR DISTRIBUIDOR</h1>
                                           <p><label>Seleccione Pais :</label></p>
                                      <div>
                                      <select name="pais" class="medium">
                                      <option value="1">-- Seleccione --</option>';
        //////////////////////////////////////////////////////////                      
        
                                        foreach ($results as $result) { 
                                        $html .= '
					
					<option value="'. $result[pais_id].'">'. $result[pais_nombre].'</option>';
                                                        }
                 
                                       $html .= '</select></div>
                                  </div>
                                  <p>&nbsp;</p>
                                  <div>
                                      <p><label>Ciudad :</label></p>
                                      <div><input type="text" name="ciudad"  class="medium" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  <div>
                                      <p><label>Distribuidor :</label></p>
                                      <div><input type="text" name="distri" id="distri" class="medium" value="' . $results[0][news_title] . '"/></div>
                                          <span class="f_help" style="margin-rigth: 200px;"> Límite de carácteres 29 / <span class="distri"></span></span>
                                  </div>
                                    <div>
                                      <p><label>Direccion :</label></p>
                                      <div><input type="text" name="dir"  class="medium" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  
                                  
                              
                               <div>
                                      <p><label>Direccion 2 :</label></p>
                                      <div><input type="text" name="dir2"  class="medium" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  
                              
                               <div>
                                      <p><label>Telefono :</label></p>
                                      <div><input type="text" name="tel"  class="medium" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  
                           
                               <div>
                                      <p><label>Celular :</label></p>
                                      <div><input type="text" name="cel"  class="medium" value="' . $results[0][news_title] . '"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
                          				
<div>
				<div>
				<label>Distribuidor - (el tamaño debe ser de 200px – 200px ) en Formato JPG y PNG</label>
                                

<p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,200x200" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
	
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
						<th><div class="th_wrapp">Ciudad</div></th>	
						<th><div class="th_wrapp">Direccion</div></th>
                                                <th><div class="th_wrapp">Telefono</div></th>
                                                <th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
        if ($results == 0) {
            
        } else {

            foreach ($resultsTree as $result) {
                
                
                $queryTwo = "SELECT * FROM cms_pais WHERE pais_id =".$result[pais_id];
                $this->db->doQuery($queryTwo, SELECT_QUERY);
                $resultsTwo = $this->db->results;
                
                
                $html .= '
					<tr class="odd gradeX">
					<td class="center" width="250px">' . $resultsTwo[0][pais_nombre] . '</td>
                                        <td class="center" width="100px">' . $result[distribuidor_ciudad] . '</td>
                                            <td class="center" width="250px">' . $result[distribuidor_direccion] . '</td>
                                                <td class="center" width="250px">' . $result[distribuidor_telefono] . '</td>
					<td class="center" width="200px">
					<a id="' . $result[distribuidor_id] . '" class="Delete uibutton special" tableToDelete="cms_distribuidor" nameField="distribuidor_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[distribuidor_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
<input type="hidden"  class="amt" >					
</td>
					</tr>';
            }

            $html .= '
				</tbody>
				</table>
				</div></fieldset>
<script type="text/javascript" language="javascript">
  $("#distri").limit("29",".distri");
 
</script>                                
';
            
        }
        return $html;
    }

    function printFormNews3() {

        $query2 = "SELECT * FROM cms_distribuidor ORDER BY pais_id DESC";
        $this->db->doQuery($query2, SELECT_QUERY);
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
                              
                              
				<a href="nuevo.php" class="uibutton submit_form">Agregar Distribuidor</a> 
                              
                                 
				
				</form>
				</div>
				
				
				
				<div class="tableName toolbar">
				<table class="display data_table2" >
				<thead>
					<tr>
						<th><div class="th_wrapp">Pais</div></th>	
						<th><div class="th_wrapp">Ciudad</div></th>	
						<th><div class="th_wrapp">Direccion</div></th>
                                                <th><div class="th_wrapp">Telefono</div></th>
                                                <th><div class="th_wrapp">Acciones</div></th>
					</tr>
				</thead>
				<tbody>
				';
        if ($results == 0) {
            
        } else {

            foreach ($results as $result) {
                
             
                
                $idcity = $result[pais_id]; 
                $queryTwo = "SELECT * FROM cms_pais WHERE pais_id = '$idcity' ";
                $this->db->doQuery($queryTwo,SELECT_QUERY);
                $resultsTwo = $this->db->results;
                
                
                
                $html .= '
					<tr class="odd gradeX">
					<td class="center" width="250px">'.$resultsTwo[0][pais_nombre].'</td>
                                        <td class="center" width="100px">' . $result[distribuidor_ciudad] . '</td>
                                            <td class="center" width="250px">' . $result[distribuidor_direccion] . '</td>
                                                <td class="center" width="250px">' . $result[distribuidor_telefono] . '</td>
					<td class="center" width="200px">
					<a id="' . $result[distribuidor_id] . '" class="Delete uibutton special" tableToDelete="cms_distribuidor" nameField="distribuidor_id">Eliminar</a>
					<a  href="edit.php?id=' . $result[distribuidor_id] . '&funcionality=2" class="uibutton">Editar</a>
                                            
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

        $query = "SELECT * FROM cms_pais";
        $this->db->doQuery($query, SELECT_QUERY);
        $results = $this->db->results;
        
        
        $queryTwo = "SELECT * FROM cms_distribuidor where distribuidor_id = '$id' ";
        $this->db->doQuery($queryTwo,SELECT_QUERY);
        $resultsTwo = $this->db->results;
        //  var_dump($results);
        switch ($funcionality) {
            //////////////////////////////////////////////////////////////////
            
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
                                
                                 
				<fieldset>
                                  <div>
                                      <h1>EDITAR DISTRIBUIDOR</h1>
                                           <p><label>Seleccione Pais :</label></p>
                                      <div>
                                      <select name="pais" class="medium">
                                     ';
        //////////////////////////////////////////////////////////                      
        
                                        foreach ($results as $result) { 
                                        
                                            if($resultsTwo[0][pais_id] == $result[pais_id] ){
                                            
                                                $html .= '<option value="'. $result[pais_id].'" selected = "selected">'. $result[pais_nombre].'</option>';
                                         
                                            }else{
                                                $html .= '<option value="'. $result[pais_id].'">'. $result[pais_nombre].' - '.$resultsTwo[pais_id].' </option>';
                                                
                                            }
                                            
                                         }
                                                        
                 
                                       $html .= '</select></div>
                                  </div>
                                  <p>&nbsp;</p>
                                  <div>
                                      <p><label>Ciudad :</label></p>
                                      <div><input type="text" name="ciudad"  class="medium" value="' .$resultsTwo[0][distribuidor_ciudad] . '"/></div>
                                  </div>
                                  <div>
                                      <p><label>Distribuidor :</label></p>
                                      <div><input type="text" name="distri" id="distri"  class="medium" value="' . $resultsTwo[0][distribuidor_nombre] . '"/></div>
                                          <span class="f_help" style="margin-rigth: 200px;"> Límite de carácteres 29 / <span class="distri"></span></span>
                                  </div>
                                    <div>
                                      <p><label>Direccion :</label></p>
                                      <div><input type="text" name="dir"  class="medium" value="' . $resultsTwo[0][distribuidor_direccion] . '"/></div>
                                  </div>
                                  
                                  
                              
                               <div>
                                      <p><label>Direccion 2 :</label></p>
                                      <div><input type="text" name="dir2"  class="medium" value="' . $resultsTwo[0][distribuidor_direccion2] . '"/></div>
                                  </div>
                                  
                              
                               <div>
                                      <p><label>Telefono :</label></p>
                                      <div><input type="text" name="tel"  class="medium" value="' . $resultsTwo[0][distribuidor_telefono] . '"/></div>
                                  </div>
                                  
                           
                               <div>
                                      <p><label>Celular :</label></p>
                                      <div><input type="text" name="cel"  class="medium" value="' . $resultsTwo[0][distribuidor_celular] . '"/></div>
                                  </div>
                                  
                              <p>&nbsp;</p>
                              
                          				
<div>
				<div>
				<label>Distribuidor - (el tamaño debe ser de 200px – 200px ) en Formato JPG y PNG </label>
                                <p>&nbsp;</p>
                                <div>
				<div>
                                <img src="../files/big/'.$resultsTwo[0][distribuidor_image1].'">
                                </div>
				</div>   
                                <p>&nbsp;</p>
				<input class="IMG" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="90x90,100x,200x200 " thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />

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
				
				
				<script type="text/javascript" language="javascript">
  $("#distri").limit("29",".distri");
 
</script>  ';
            
        
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





















