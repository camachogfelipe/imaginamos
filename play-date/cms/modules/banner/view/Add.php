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
		<!-- manejo de imagenes -->
		<script type='text/javascript' src='js/upload.min.js'></script>
		<script type='text/javascript' src='js/swfobject.js'></script>
		<script type='text/javascript' src='js/myupload.js'></script>
        <!-- fin manejo de imagenes-->
        <script type="text/javascript">
            $(document).ready(function(){
            $("#mensaje1").hide();
            $("#mensaje12").hide();
            $("#mensaje13").hide();
            $("#mensaje14").hide();
            $("#mensaje3").hide();
            $("#mensaje4").hide();
            
                $("#button").click(function(){
                var titulo = $("#titulo").val();
                var titulo2 = $("#titulo2").val();
                var titulo3 = $("#titulo3").val();
                var titulo4 = $("#titulo4").val();
                var imagen = $("#IMU").val();
                var link = $("#link").val();
                
                if ((titulo == " ") || (titulo == ""))
                {
                    $("#mensaje1").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje1").fadeOut();
                } 
                if ((titulo2 == " ") || (titulo2 == ""))
                {
                    $("#mensaje12").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje12").fadeOut();
                } 
                if ((titulo3 == " ") || (titulo3 == ""))
                {
                    $("#mensaje13").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje13").fadeOut();
                } 
                if ((titulo4 == " ") || (titulo4 == ""))
                {
                    $("#mensaje14").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje14").fadeOut();
                } 
                
                
                if ((imagen == " ") || (imagen == ""))
                {
                    $("#mensaje3").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje3").fadeOut();
                }
                if ((link == " ") || (link == ""))
                {
                    $("#mensaje4").fadeIn();
                    return false;
                }
                else
                {
                    $("#mensaje4").fadeOut();
                }
                
                
                });
            
            
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
                        <div class="header"><span><span class="ico gray shadow"></span>Banner</span>
					</div><!-- End header -->	
                  <div class="content">
					<div class="formEl_b">
        				<fieldset style="background-color: whitesmoke;">
                            <div>
                            <legend><h1>Nuevo</h1></legend>
                            <form id="formAjax" method="post" action="../controller/add.php">
                                <p>
                                <div class="imu_info" id="info"></div>
                                    <div class="section">
                                        <label>T&iacute;tulo <small style="color: royalblue;" >Primera Franja de palabras.</small></label>
                                        <div>
                                        <input type="text" name="titulo" id="titulo" class="large" />
					<span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo">20</span></span>
                                        <div id="mensaje1"><i>T&iacute;tulo Requerido</i></div>
                                    	</div>
                               		</div>
                                    <div class="section">
                                        <label>T&iacute;tulo <small style="color: royalblue;" >Segunda Franja de palabras.</small></label>
                                        <div>
                                        <input type="text" name="titulo2" id="titulo2" class="large" />
					<span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo2">30</span></span>
                                        <div id="mensaje12"><i>T&iacute;tulo Requerido</i></div>
                                    	</div>
                               		</div>
                                    <div class="section">
                                        <label>Imagen</label>
                                        <div>
                                        <input id="IMU"  class="IMU" type="file" path="../../../../imagenes/" thumbnails="1000x427" thumbnailsFolders="../../../../imagenes/" startOn='onSubmit:formAjax' ajaxInfoId='info' ajaxLoaderId='loader' multi='false' afterUpload='filename'  fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
                                        <label>Tama&ntilde;o final de imagen (1000x427)px Redimensionada <small>Redimensi&oacute;n</small></label>
                                        <div id="mensaje3"><i>Imagen Requerido</i></div>
					</div>
                                    </div>
                                <input type="submit" value="Guardar" class="uibutton" id="button" />
                                <a href="index.php" class="uibutton" />Regresar</a>
                                <span class="imu_loader" id="loader">
                                    <img src="ajax-loader.gif"/>
                                </span>
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

