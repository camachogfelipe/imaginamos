<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// @marionavas
// marionavas@me.com
// Agencia: imaginamos.com
// Bogota, Colombia, 2012
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
session_start();
//Evita presentar contenidos sin el login debido
include("../security/secure.php");
//Carga las funciones generales en XAJAX
include("../model/xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	        
        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

        <!--External Files-->
        <link href="../../../css/generalCMS.css" rel="stylesheet" type="text/css" />
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
						<?php include("../../../menu/panel.php"); ?>
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
                    <form id="emails">
                    
                    <legend>
                    <h1>Datos de la compaÑÍa REMITENTE</h1></legend>
                    
                    <div class="section">
                        <label>Ingrese el nombre de la compañía que figurará como remitente de los correos del sistema</label>
                        <?php
						$query = "SELECT * FROM cms_configuration WHERE config_id = '1'";
						$db->doQuery($query,SELECT_QUERY);
						$result = $db->results;
						?>
                        <div><input type="text" name="company" id="company"  class="large" value="<?php echo $result[0][config_company]; ?>"  /></div>
					</div>
                    
                     <div class="section">
                        <label>Ingrese el email de la compañía que figurará como remitente de los correos del sistema</label>
                       <div><input type="text" name="emailRemitent" id="emailRemitent"  class="large" value="<?php echo $result[0][config_mail_remitent]; ?>"  /></div>
</div>
                  
	                    <br /><br />
                    <a class="uibutton" onclick="xajax_remitent(xajax.getFormValues('emails')); return false;">Guardar</a> 
            		</form>
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