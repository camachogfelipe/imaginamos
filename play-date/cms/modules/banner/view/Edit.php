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
       
       <?php 
	   if (isset($_GET['erno']))
	   {
		$erno = $_GET['erno'];
			if (!intval($erno))
			{
				?>
				<script language="javascript" type="text/javascript">
				window.location.href = 'index.php';
				</script>
				<?php	
			}
			else
			{
				if ($erno==1)
				{
					?>
                    <script language="javascript" type="text/javascript">
					$(document).ready(function(){
					document.getElementById('info1').innerHTML = 'El Banner ha sido editado correctamente!<br />';
					$('#info1').show();
					})
					</script>
                    <?php
				}
				if ($erno==2)
				{
					?>
                    <script language="javascript" type="text/javascript">
					$(document).ready(function(){
					document.getElementById('info1').innerHTML = 'Problemas al editar!';
					$('#info1').show();
					})
					</script>
                    <?php
				}
				
			}
		}
	   ?>
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
                        <div class="header"><span><span class="ico gray clip"></span>EDICI&Oacute;N BANNER </span>
					</div><!-- End header -->	
                  <div class="content">
                    <div class="formEl_b">
                        <fieldset style="background-color: whitesmoke;">
                        <?php 
                        if (isset($_GET['id']))
                        {
                        	$id = base64_decode($_GET['id']);
							if (!intval($id))
							{
								header('Location: index.php');
								exit;
							}
							$Consultas = new Consultas;
							$arrayCampos[0] = 'id_banner_superior';
							$arrayCampos[1] = 'titulo_banner_superior';
                                                        $arrayCampos[2] = 'titulo2_banner_superior';
							$arrayCampos[3] = 'imagen_banner_superior';
                                                        
							$query1 = $Consultas->Byid('cms_banner_superior',$id,'id_banner_superior',$arrayCampos);
                                                        
                                                        
                        }
                        ?>
                            
                        <div>
                            <legend><h1>Editar imagen para banner</h1></legend>
                            <form id="form" method="post" action="../controller/edit.php">
                                <p>
                                    <div id="info1" class="imu_info"></div>
                                    <div>
                                        <div class="section">
                                            <label>T&iacute;tulo <small style="color: royalblue;" >Primera Franja de palabras.</small></label>
                                            <div>
                                            <input style="border-radius: 5px;" type="text" class="large"  name="titulo" id="titulo" value="<?php echo $query1[1] ?>" />
                                            <span class="f_help"> L&iacute;mite de car&aacute;cteres <span class="titulo">20</span>/20</span>
                                            </div>
                               		</div>
                                        
                                        <div class="section">
                                            <label>T&iacute;tulo <small style="color: royalblue;" >Segunda Franja de palabras.</small></label>
                                            <div>
                                            <input style="border-radius: 5px;" type="text" class="large"  name="titulo2" id="titulo2" value="<?php echo $query1[2] ?>" />
                                            <span class="f_help"> L&iacute;mite de car&aacute;cteres <span class="titulo2">30</span>/30</span>
                                            </div>
                               		</div>
                                       
                                        
                                        <div class="section">
                                            <label>Imagen</label>
                                            <div>
                                            <div><img src="../../../../imagenes/<?php echo $query1[3]; ?>" width="505"/><br /></div>
                                            <input class="IMU" type="file" path="../../../../imagenes/" thumbnails="1000x427" thumbnailsFolders="../../../../imagenes/" multi="false" startOn="onSubmit:form" afterUpload="filename" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
                                            <label>Tama&ntilde;o de imagen (1000x427)px <small>Redimensi&oacute;n</small></label>
                                            <input type="hidden" class="large" maxlength="45" name="imagenant" id="imagenant" value="<?php echo $query1[3]; ?>" />
                                            </div> 
                                            <!--<input class="IMU" type="file" path="files/" startOn="onSubmit:formAjax" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" multi="false" afterUpload="filename" maxSize="204800" fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)" thumbnails="90x90" thumbnailsFolders="files/small/" />-->
                                        </div>
                                      
                                       
                                        <div class="section">
                                            <input type="hidden" class="large" maxlength="45" name="id" id="id" value="<?php echo $query1[0]; ?>" />
                                            <input type="submit" value="Guardar" class="uibutton" />
                                            <a href="index.php" class="uibutton" />Regresar</a>
                                            <span class="imu_loader" id="loader">
                                            <img src="ajax-loader.gif"/>
                                            </span>
                                        </div>
                                    </div>
                                </p>
                            </form>
                            
                            <br />
                            <br />
                        </div>
                        
                        </fieldset>
                    </div>
                  </div><!-- End content -->
              </div><!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
             
              
</body>
</html>

<script type="text/javascript" language="javascript">
$('#titulo').limit('20','.titulo');
$('#titulo2').limit('30','.titulo2');
</script>
  <?php if (isset($_GET['lain'])){
     
     if ($_GET['lain']==1){
         
       ?><script>showSuccess('Informaci&oacute;n Actualizada',8000)</script><?php 
     }elseif($_GET['lain']==3){
         
     ?><script>showError('Faltan datos ',3000);</script><?php 
     }else{
         ?><script>showError('Fallas T&eacute;cnicas ',3000);</script><?php 
     }
 }
?> 