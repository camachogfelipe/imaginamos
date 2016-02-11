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
                        <div class="header"><span><span class="ico gray shadow access_point"></span>Home</span>
					</div><!-- End header -->	
                        <div class="content">

					  
                    <div class="formEl_b">
        
                    <fieldset style="background-color: whitesmoke;">
                    <?php echo $htmlFormTableUser->printTableUsers($_GET[idService]); ?>
                    </fieldset>
                    <div>
                     <?php 
					 $Consultas = new Consultas;
					 $total = $Consultas->total('cms_banner_superior');
					 //echo $total.' total';
                                if ($total<5)
                                {
                                ?>
                                <a href="Add.php" class="uibutton">Agregar Nuevo</a>
                                <?php
                                }
                                ?>
                     </div> 
                    </div>
							
                        </div><!-- End content -->
                      
                    </div><!-- End full width -->
                        
					
                </div> <!--// End inner -->
                
              </div> <!--// End content -->
   <?php if (isset($_GET['lain'])){
     
     if ($_GET['lain']==1){
         
       ?><script>showSuccess('Informaci&oacute;n ingresada',8000)</script><?php 
     }elseif($_GET['lain']==3){
         
     ?><script>showError('Faltan datos ',3000);</script><?php 
     }else{
         ?><script>showError('Fallas T&eacute;cnicas ',3000);</script><?php 
     }
 }
?>             
             
              
                    
  
</body>
</html>