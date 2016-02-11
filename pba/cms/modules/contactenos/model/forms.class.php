<?php
////////////////////////////////
//fercho.ba@gmail.com
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
class Forms
{	
	var $db;
	
	function __construct($db)
		{$this->db=$db;}

function printFormContact(){
            
                $query = "SELECT * FROM cms_contact";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results;
                
//                echo '<pre>';
//                var_dump($results);
//                echo '</pre>';
           	
				foreach ($results as $result)
				{

				$html = '
				
		
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
			
				<div class="imu_info" id="info"></div>
				
				
				<fieldset>
				<div>
					<label>Imagen </label>
					<p>&nbsp;</p>
					<div>
					
						<img src="../files/middle/'.$result[imagen].'">
		
					</div>
				</div>
				</fieldset>
				
				<p>&nbsp;</p>
				
				<div>
				<div>	
					
					<a  href="edit.php" class="uibutton">Editar</a>
				</div>
				</div>
				';	


				}
					
				
				
				return $html;

                  }
                  
                  
function printFormEditContact()
		{
                    
                $query = "SELECT * FROM cms_contact";
		$this->db->doQuery($query,SELECT_QUERY);
		$results = $this->db->results[0];
                
		$html = '	<script type="text/javascript" src="../js/upload.min.js"></script>
				<script type="text/javascript" src="../js/swfobject.js"></script>
				<script type="text/javascript" src="../js/myupload.js"></script>
				<link type="text/css" rel="stylesheet" href="../css/style.css" />
		
				<div class="imu_info" id="info"></div>
                    
                    <form id="form" method="post" action="../controller/controllerEditContact.php">
                    
                    <legend><h1>Contactenos Edición de Imagen</h1></legend>
                              
					<br /><a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                    
							<p>&nbsp;</p>
							
							
							<img src="../files/middle/'.$results[imagen].'"><br><br>
														
							<p>&nbsp;</p>
							<fieldset>
							<div>
								<label>Imagen (tama&ntilde;o: 1616px de ancho x 800px de alto, formatos: jpg,jpeg &oacute; png)</label>
								<p>&nbsp;</p>
							<div>
							
								<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x38,500x192,1616x800" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png" fileDesc="Images (*.jpg, *.jpeg, *.png)" allowRemove="true" />
				
							</div>
							</div>
							</fieldset>
							
							<p>&nbsp;</p>


                              
						<div>
						<div>	
						<br><br>
						<input type="submit" value="Editar" class="uibutton submit_form" />
						<span class="imu_loader" id="loader">
							<img src=\'../images/loader.gif\'/>
						</span>
						</div>
						</div><input name="id" type="hidden" value="" />
							</form>
						  
					
				
                  
					';
		return $html;
		break;
		//////////////////////////////////////////////////////////////////
		}
                function edit_contenido_contactenos(){
                
                      $query2 = "SELECT * FROM cms_contact";
				$this->db->doQuery($query2,SELECT_QUERY);
				$results = $this->db->results;



			$html = '
		
			<div class="imu_info" id="info"></div>
                    
                    <form id="formnews">
                    
                    <legend><h1>Testimonials Edición Contenido</h1></legend>
                              
                           
                              <p>&nbsp;</p>
                              
                              <div>
							<label> Texto </label>
							<div>	
								<div><textarea name="texto" id="texto" cols="5" class="large">'.$results[0][texto].'</textarea></div>
							</div>
							</div>
                
                              <p>&nbsp;</p>
                                   
                                  <br><br>
                              
                              <a class="uibutton" onclick="xajax_edit_contenido(xajax.getFormValues(\'formnews\')); return false;">Editar</a> 				  
                              <input name="id" type="hidden" value="" />
                  </form>				  
				  </div>                    
                  </fieldset>';
                                
                        
		return $html;
                } 

}
?>





















