<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../admin/security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/functions.xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
//Clase para el armado de la tabla de administradores
include("../model/forms.class.php");
$htmlFormNews = new Forms($db);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	        
        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link css-->
        <link rel="stylesheet" type="text/css" href="../../../css/cms.style.css?v1"/>
        <link rel="stylesheet" type="text/css" href="../../../css/icon.css"/>
        <link rel="stylesheet" type="text/css" href="../../../css/ui-custom.css"/>
        <link rel="stylesheet" type="text/css" href="../../../css/timepicker.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/colorpicker/css/colorpicker.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/elfinder/css/elfinder.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/datatables/dataTables.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/validationEngine/validationEngine.jquery.css"/>     
        <link rel="stylesheet" type="text/css" href="../../../components/jscrollpane/jscrollpane.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/tipsy/tipsy.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/editor/jquery.cleditor.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/chosen/chosen.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/confirm/jquery.confirm.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/sourcerer/sourcerer.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/fullcalendar/fullcalendar.css"/>
        <link rel="stylesheet" type="text/css" href="../../../components/Jcrop/jquery.Jcrop.css"/>   
		
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->  
		
        <script type="text/javascript" src="../../../js/jquery.min.js"></script>

        <script type="text/javascript" src="../../../components/ui/jquery.autotab.js"></script>
        <script type="text/javascript" src="../../../components/ui/timepicker.js"></script>
        <script type="text/javascript" src="../../../components/colorpicker/js/colorpicker.js"></script>
        <script type="text/javascript" src="../../../components/checkboxes/iphone.check.js"></script>
        <script type="text/javascript" src="../../../components/elfinder/js/elfinder.full.js"></script>
        <script type="text/javascript" src="../../../components/datatables/dataTables.min.js"></script>
        <script type="text/javascript" src="../../../components/datatables/ColVis.js"></script>
        <script type="text/javascript" src="../../../components/scrolltop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="../../../components/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="../../../components/jscrollpane/mousewheel.js"></script>
        <script type="text/javascript" src="../../../components/jscrollpane/mwheelIntent.js"></script>
        <script type="text/javascript" src="../../../components/jscrollpane/jscrollpane.min.js"></script>
        <script type="text/javascript" src="../../../components/spinner/ui.spinner.js"></script>
        <script type="text/javascript" src="../../../components/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="../../../components/editor/jquery.cleditor.js"></script>
        <script type="text/javascript" src="../../../components/chosen/chosen.js"></script>
        <script type="text/javascript" src="../../../components/confirm/jquery.confirm.js"></script>
        <script type="text/javascript" src="../../../components/validationEngine/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="../../../components/validationEngine/jquery.validationEngine-en.js"></script>
        <script type="text/javascript" src="../../../components/vticker/jquery.vticker-min.js"></script>
        <script type="text/javascript" src="../../../components/sourcerer/sourcerer.js"></script>
        <script type="text/javascript" src="../../../components/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="../../../components/flot/flot.js"></script>
        <script type="text/javascript" src="../../../components/flot/flot.pie.min.js"></script>
        <script type="text/javascript" src="../../../components/flot/flot.resize.min.js"></script>
        <script type="text/javascript" src="../../../components/flot/graphtable.js"></script>
        
        <script type="text/javascript" src="../../../components/uploadify/swfobject.js"></script>
        <script type="text/javascript" src="../../../components/uploadify/uploadify.js"></script>
            
        <script type="text/javascript" src="../../../components/checkboxes/customInput.jquery.js"></script>
        <script type="text/javascript" src="../../../components/effect/jquery-jrumble.js"></script>
        <script type="text/javascript" src="../../../components/filestyle/jquery.filestyle.js"></script>
        <script type="text/javascript" src="../../../components/placeholder/jquery.placeholder.js"></script>
		<script type="text/javascript" src="../../../components/Jcrop/jquery.Jcrop.js"></script>
        <script type="text/javascript" src="../../../components/imgTransform/jquery.transform.js"></script>
        <script type="text/javascript" src="../../../components/webcam/webcam.js"></script>
		<script type="text/javascript" src="../../../components/rating_star/rating_star.js"></script>
		<script type="text/javascript" src="../../../components/dualListBox/dualListBox.js"></script>
		<script type="text/javascript" src="../../../components/smartWizard/jquery.smartWizard.min.js"></script>
		<script type="text/javascript" src="../../../components/maskedinput/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="../../../components/highlightText/highlightText.js"></script>
		<script type="text/javascript" src="../../../components/elastic/jquery.elastic.source.js"></script>
        <script type="text/javascript" src="../../../js/jquery.cookie.js"></script>
        <script type="text/javascript" src="../../../js/cms.custom.js"></script>
       
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
                        <div class="header"><span><span class="ico gray window"></span>CONFIGURACION GENERAL CMS</span>
					</div><!-- End header -->	
                        <div class="content">

					  
                    <div class="formEl_b">
        
                    <fieldset>
                    
            
     				<?php 
					//Enviamos el query que realiza la búsqueda de la tabla que necesia el módulo
					$db->doQuery("SHOW TABLES LIKE 'cms_news'",SHOW_TABLE_QUERY);
					//Si recibimos TRUE como respuesta quiere decir que si existe la tabla
					if($show = $db->show)
						{
						$db->doQuery("SELECT news_config_funcionality FROM cms_news_config WHERE news_config_id = 1",SELECT_QUERY);					
						$result = $db->results;
						//Imprimimos el formulario que necesitamos
						echo $htmlFormNews->printFormNews($result[0][news_config_funcionality]);
						}
					else
						//Si la tabla no existe presentamos el formulario de configuración del módulo "NEWS"
						echo $htmlFormNews->printFormInstall();
					?>
                    </fieldset>
                       
                    </div>
							
                        </div><!-- End content -->
                    </div><!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
             <script language="javascript">$("#article").cleditor();</script> 
              
</body>
</html>