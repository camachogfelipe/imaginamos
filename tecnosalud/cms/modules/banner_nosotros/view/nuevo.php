<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
include("../model/functions.xajax.php");
//Carga conexión e interacción con la base de datos
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

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="../images/favicon2.ico"/>

		<!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->

      
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
                    <div class="widget" >
                        <div class="header"><span ><span class="ico gray pictures_folder"></span>BANNER NOSOTROS >> NUEVO BANNER</span>
                            
                        </div><!-- End header -->	
                        <div class="content">
                        
                          <div class="formEl_b">
        
                    <fieldset>
                    
     				<?php
					//Enviamos el query que realiza la búsqueda de la tabla que necesia el módulo
					$db->doQuery("SHOW TABLES LIKE 'cms_pais'",SHOW_TABLE_QUERY);
					//Si recibimos TRUE como respuesta quiere decir que si existe la tabla
					if($show = $db->show)
						{
						$db->doQuery("SELECT bannernosotros_config_funcionality FROM cms_bannernosotros_config WHERE bannernosotros_config_id = 1",SELECT_QUERY);					
						$result = $db->results;
						//Imprimimos el formulario que necesitamos
						echo $htmlFormNews->printFormNews($result[0][bannernosotros_config_funcionality]);
						}
					else
						//Si la tabla no existe presentamos el formulario de configuración del módulo "NEWS"
						echo $htmlFormNews->printFormInstall();
					?>
                    </fieldset>
                       
                    </div>
                          
                            <!-- clear fix -->
							<div class="clear"></div>
                            
                        </div><!-- End content -->
                    </div><!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
              <script language="javascript">//$("#article").cleditor();</script>              
              
</body>
</html>