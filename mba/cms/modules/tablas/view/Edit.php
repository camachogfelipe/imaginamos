<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
include("../model/consultas.php");
include '../define.php';

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

<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced",
plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

// Theme options
theme_advanced_buttons1 : " tablecontrols,|save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",

});
</script>
<!--------------->
        <link type="text/css" rel="stylesheet" href="css/style.css" />
		<!--you can use this packed script and jQuery-->
		<!--<script type='text/javascript' src='js/jquery-1.7.min.js'></script>-->
		<!--<script type="text/javascript" src="js/upload.packed.js"></script>-->
		
		<!--or below scripts-->
		<script type='text/javascript' src='js/upload.min.js'></script>
		<script type='text/javascript' src='js/swfobject.js'></script>
		<script type='text/javascript' src='js/myupload.js'></script>
		<script type='text/javascript' src='js/myupload1.js'></script>
       
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
					document.getElementById('info1').innerHTML = 'El <?=MODULE?> ha sido editado correctamente!<br />';
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
                        <div class="header"><span><span class="ico gray window"></span><?=MODULE?></span>
					</div><!-- End header -->	
                  <div class="content">
                    <div class="formEl_b">
                        <fieldset>
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
                                    $arrayCampos[0] = 'idcms';
				    $arrayCampos[1] = 'titulo1';
				    $arrayCampos[2] = 'titulo2';
                                    $arrayCampos[3] = 'titulo3';
                                    $arrayCampos[4] = 'titulo4';
                                    $arrayCampos[5] = 'titulo5';
                                    $arrayCampos[6] = 'titulo6';
                                    $arrayCampos[7] = 'titulo7';
                                    $arrayCampos[8] = 'titulo8';
                                    $arrayCampos[9] = 'titulo9';
                                    $arrayCampos[10] = 'imagen1';
                                    $arrayCampos[11] = 'imagen2';
                                    $arrayCampos[12] = 'imagen3';    
//                                    echo TABLE_NAME;
                                    $query1 = $Consultas->Byid(TABLE_NAME,$id,'idcms',$arrayCampos);
                        }
                        ?>
                        <div>
                            <legend><h1>Editar </h1></legend>
<form id="form" method="post" action="../controller/edit.php">
<input type="hidden" name="id" id="id" value="<?=$id?>" >
<input type="hidden"  name="titulo5" id="titulo5" class="large" value="<?=$id ?>"  />
 <div id="info1" class="imu_info"></div>                               
     <p>
<div class="imu_info" id="info"></div>
<div class="section">
<label>Tabla Español</label>   
<div> 
    <textarea name="titulo1" id="titulo1"   class="large"  cols="100" rows="20" ><?=$query1[1]?></textarea>
</div>
</div>
<div class="section">
<label>Tabla Ingles</label>   
<div> 
    <textarea name="titulo2" id="titulo2"   class="large"  cols="100" rows="20" ><?=$query1[2]?></textarea>
</div>
</div>
<div class="section">
    <input type="submit" value="Guardar" class="uibutton" />
    <a href="../../productos2/view/index.php?id=<?=base64_encode($id)?>" class="uibutton" />Regresar</a>
    <span class="imu_loader" id="loader">
    <img src="ajax-loader.gif"/>
</span>
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
//$/("#titulo1").cleditor();
//$("#titulo2").cleditor();
</script>