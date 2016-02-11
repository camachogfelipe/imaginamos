<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
include("../model/consultas.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
//Clase para el armado de la tabla de administradores
include("../model/tables.class.php");
$htmlFormTableUser = new Tables($db);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	        
        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

      	<!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files--> 
        
        <link type="text/css" rel="stylesheet" href="css/style.css" />
		<!--you can use this packed script and jQuery-->
		<!--<script type='text/javascript' src='js/jquery-1.7.min.js'></script>-->
		<!--<script type="text/javascript" src="js/upload.packed.js"></script>-->
		
		<!--or below scripts-->
		<script type='text/javascript' src='js/upload.min.js'></script>
		<script type='text/javascript' src='js/swfobject.js'></script>
		<script type='text/javascript' src='js/myupload.js'></script>
		<script type='text/javascript' src='js/myupload2.js'></script>
                <script type="text/javascript" src="js/jquery.validacion.js"></script>
                <script>
                $(document).ready(function(){
                    $('#validation').validationEngine();
                });
                </script>

        </head>
        <body class="dashborad">
        <div id="alertMessage" class="error"></div>
		<!-- Header -->
        <div id="header">
                <div id="account_info">
                    <?php include("../../../menu/administrator.php"); ?>
                </div>
            </div><!-- End Header -->
			<div id="shadowhead"></div>

              <div id="left_menu">
                    <ul id="main_menu" class="main_menu">
						<?php include("../../../menu/index.php"); ?>
                    </ul>
              </div>
            
              <div id="content">
                <div class="inner">
					<div class="topcolumn">
						<div class="logo"></div>
                            <ul id="shortcut">
								<?php include("../../../menu/icons.php"); ?>
                            </ul>
					</div>
                    <div class="clear"></div>
                    
					<!-- full width -->
                    <div class="widget">
                        <div class="header"><span><span class="ico gray sphere"></span>&iquest;Quienes Somos?</span>
					</div><!-- End header -->	
                        <div class="content">
                            <?php 
                            $id=1;
                            $Consultas = new Consultas;
							$arrayCampos[0] = 'id_quienes';
							$arrayCampos[1] = 'titulo_quienes';
							$arrayCampos[2] = 'texto_quienes';
							$arrayCampos[3] = 'titulo2_quienes';
							$arrayCampos[4] = 'texto2_quienes';
							$arrayCampos[5] = 'titulo3_quienes';
							$arrayCampos[6] = 'texto3_quienes';
							$arrayCampos[7] = 'imagen1_quienes';
							$arrayCampos[8] = 'imagen2_quienes';
							
                                                        
							$query1 = $Consultas->Byid('cms_quienes',$id,'id_quienes',$arrayCampos);
                            $tel=explode('/',$query1[1]);
                            
                            ?>
                            
                            
                            <div class="formEl_b">
                                <fieldset>
                                    <div>
                                        <legend style="border-radius: 5px;" >&iquest;Quienes Somos?</legend>
                                    <form id="validation" method="post" action="../controller/edit.php">
                                        <p>
                                             
                                <div class="imu_info" id="info"></div>
                                <div class="section">
                                        <label>T&iacute;tulo:  </label>
                                        <div>
                                        <input value="<?php echo $query1[1]; ?>" style="border-radius: 5px;" type="text" class="large validate[required]" data-validation-placeholder="titulo" name="titulo" id="titulo" />
					<span class="f_help"> L&iacute;mite de caracteres <span class="titulo">20</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                        <label>Texto:  </label>
                                        <div>
                                        <textarea id="texto" name="texto" class="large validate[required]" data-validation-placeholder="texto"  cols="65" rows="12" style="border-radius: 5px;" ><?php echo $query1[2]; ?></textarea>
                                        
					<span class="f_help"> L&iacute;mite de caracteres <span class="texto">580</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                        <label>T&iacute;tulo 2:  </label>
                                        <div>
                                        <input value="<?php echo $query1[3]; ?>" style="border-radius: 5px;" type="text" class="large validate[required]" data-validation-placeholder="titulo2"  name="titulo2" id="titulo2" />
					<span class="f_help"> L&iacute;mite de caracteres <span class="titulo2">20</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                        <label>Texto 2:  </label>
                                        <div>
                                        <textarea id="texto2" name="texto2" cols="65" class="validate[required]" data-validation-placeholder="texto2" rows="12" style="border-radius: 5px;" ><?php echo $query1[4]; ?></textarea>
                                        
					<span class="f_help"> L&iacute;mite de caracteres <span class="texto2">580</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                        <label>T&iacute;tulo 3:  </label>
                                        <div>
                                        <input value="<?php echo $query1[5]; ?>" style="border-radius: 5px;" type="text" class="large validate[required]" data-validation-placeholder="titulo3" name="titulo3" id="titulo3" />
					<span class="f_help"> L&iacute;mite de caracteres <span class="titulo3">20</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                        <label>Texto 3:  </label>
                                        <div>
                                        <textarea id="texto3" name="texto3" cols="65" rows="12" class="validate[required]" data-validation-placeholder="texto3"  style="border-radius: 5px;" ><?php echo $query1[6]; ?></textarea>
                                        
					<span class="f_help"> L&iacute;mite de caracteres <span class="texto3">580</span></span>

                                    	</div>
                               		</div>
                                <div class="section">
                                    <label>Imagen / Foto: </label>
                                    <div>
                                        <img src="../../../../imagenes/<?php echo $query1[7]; ?>" width="350" />
                                        <input type="hidden" name="imagenant1" value="<?php echo $query1[7]; ?>"/>
                                        <input class="IMU" type="file" path="../../../../imagenes/" thumbnails="350x450" thumbnailsFolders="../../../../imagenes/" multi="false" startOn="onSubmit:validation" afterUpload="filename" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
                                        <label>Tama&ntilde;o de imagen (350x450)px</label>
                                    </div>
                                </div>
<!--                                <div class="section">
                                    <label>Imagen / Foto: </label>
                                    <div>
                                        <img src="files/<?php // $query1[8]; ?>" width="350" />
                                        <input type="hidden" name="imagenant2" value="<?php // $query1[8]; ?>"/>
                                        <input class="IMU2" type="file" path="files/" thumbnails="350x215" thumbnailsFolders="files/" multi="false" startOn="onSubmit:validation" afterUpload="filename" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
                                        <label>Tama&ntilde;o de imagen (350x215)px</label>
                                    </div>
                                </div>-->
                                
                                
                                  <fieldset>
                                   <input style="border-radius: 5px;" type="submit" id="button" value="Guardar" class="uibutton icon answer " /> 
                                  </fieldset>
                                        </p>
                                        </form>
                                       </div>
                                   </fieldset>
			</div>
                    <div class="formEl_b">
                    <div>
                     </div> 
                    </div>
							
                        </div><!-- End content -->
                      
                    </div><!-- End full width -->
                        
					
                </div> <!--// End inner -->
                
              </div> <!--// End content -->
              
</body>
</html>
<script type="text/javascript" language="javascript">
$('#titulo').limit('20','.titulo');
$('#texto').limit('580','.texto');
$('#titulo2').limit('20','.titulo2');
$('#texto2').limit('580','.texto2');
$('#titulo3').limit('20','.titulo3');
$('#texto3').limit('580','.texto3');
 </script>
  <?php if (isset($_GET['lain'])){
     
     if ($_GET['lain']==1){
         
       ?><script>showSuccess('Informaci&oacute;n ingresada',8000)</script><?php 
     }elseif($_GET['lain']==3){
         
     ?><script>showError('Faltan datos ',3000);</script><?php 
     }else{
         ?><script>showError('Fallas T�cnicas ',3000);</script><?php 
     }
 }
?>