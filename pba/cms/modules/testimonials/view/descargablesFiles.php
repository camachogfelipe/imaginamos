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
$htmlFormBanners = new Forms($db);
if(isset($_GET['idt'])) :
	$editDescargable = $htmlFormBanners->printDescargables($_GET['idt']);
endif;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>CMS imaginamos.com - Todos los derechos reservados</title>
  <!-- Link shortcut icon-->
  <link rel="shortcut icon" type="image/ico" href="../images/favicon2.ico"/>
  <!--External Files-->
  <link href="../../../css/generalCMS.css" rel="stylesheet" type="text/css" />
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
  <!--End External Files-->
  <script type="text/javascript" src="../js/upload.min.js"></script>
	<script type="text/javascript" src="../js/swfobject.js"></script>
  <script type="text/javascript" src="../js/myupload.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>

<body class="dashborad">
	<div id="alertMessage" class="error"></div>
  	<!-- Header -->
  	<div id="header">
    	<div id="account_info"><?php include("../../../menu/administrator.php"); ?></div>
    </div>
    <!-- End Header -->
    <div id="shadowhead"></div>
    <div id="left_menu">
    	<ul id="main_menu" class="main_menu"><?php include("../../../menu/index.php"); ?></ul>
    </div>
    <div id="content">
    	<div class="inner">
      	<div class="topcolumn">
        	<div class="logo"></div>
          <ul id="shortcut"><?php include("../../../menu/icons.php"); ?></ul>
        </div>
        <div class="clear"></div>
        <!-- full width -->
        <div class="widget" >
        	<div class="header">
          	<span><span class="ico gray pictures_folder"></span>Testimonilas Descargables Archivos</span>
          </div>
          <!-- content -->
          <div class="content">
            <div class="formEl_b">
              <fieldset>
              	<a class="uibutton icon special answer" href="javascript:history.back();">Volver</a>
                
                <div class="imu_info" id="info"></div>
                <form id="form" method="post" action="../controller/controllerFile.php">
                	<legend><h1>Testimonials <?php
										if(isset($editDescargable) and !empty($editDescargable))
											echo "Edición";
										else echo "Creación";
                  ?> de Archivo</h1></legend>
                  <p>&nbsp;</p>
                  <fieldset>
                  	<div>
                    	<label>Año</label> 
                      <input type="text" name="year" id="year"<?php
												if(isset($editDescargable) and !empty($editDescargable))
													echo ' value="' . $editDescargable[0]['year'] . '"';
                      ?> />
                      <?php
												if(isset($editDescargable) and !empty($editDescargable))
													echo '<input type="hidden" name="oldFile" value="' . $editDescargable[0]['file'] . '" /><br>';
													echo '<input type="hidden" name="idt" value="' . $editDescargable[0]['id_descargables'] . '" />';
                      ?>
                      <p>&nbsp;</p>
                    	<label>Archivo (formatos: jpg,jpeg, png, doc, docx, ppt, pptx, xls, xlsx)</label>
                      <p>&nbsp;</p>
                    	<div>
                    		<input class="CMS" type="file" path="files/" multi="false" startOn="onSubmit:form" ajax="true" ajaxInfoId="info" ajaxLoaderId="loader" button="../images/buttonSingle.jpg" thumbnails="100x38,500x192,1616x800" thumbnailsFolders="files/small/,files/middle/,files/big/" fileExt="jpg,jpeg,png,pdf,doc,docx,ppt,pptx,xls,xlsx" fileDesc="Archivos (*.jpg, *.jpeg, *.png, *.doc, *.doc, *.ppt, *.pptx, *.xls, *.xlsx)" allowRemove="true" />
                      </div>
                   </div>
                 </fieldset>
                 <p>&nbsp;</p>
                 <div>
                 	<div>
                  	<br><br>
                    <input type="submit" value="<?php
												if(isset($editDescargable) and !empty($editDescargable))
													echo 'Editar';
												else echo 'Crear';
                      ?>" class="uibutton submit_form" />
                    <span class="imu_loader" id="loader"><img src='../images/loader.gif'/></span>
                  </div>
                </div>
              </form>
            </fieldset>
            	<?php $results = $htmlFormBanners->printDescargables(); ?>
              <div class="tableName toolbar">
                <table class="display data_table2" >
                <thead>
                  <tr>
                  	<th><div class="th_wrapp">Año</div></th>
                    <th><div class="th_wrapp">Imagen</div></th>
                    <th><div class="th_wrapp">Acciones</div></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($results as $descargable) : ?>
                  <tr class="odd gradeX">
                  	<td class="center" width="30"><?= $descargable['year'] ?></td>
                    <td class="center" width="100px"><a href="../files/<?= $descargable['file'] ?>" target="_blank"><?= $descargable['file'] ?></a></td>
                    <td class="center" width="100px">
                    	<a id="<?= $descargable['id_descargables'] ?>" class="Delete uibutton special" tableToDelete="cms_testimonials_descargables" nameField="id_descargables">Eliminar</a>
                      <a href="descargablesFiles.php?idt=<?= $descargable['id_descargables'] ?>" class="uibutton">Editar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
              </div>
            </div>
            <!-- clear fix -->
            <div class="clear"></div>
          </div>
          <!-- End content -->
      	</div>
        <!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
              <!-- <script language="javascript">$("#texto1").cleditor();</script> -->             
              
</body>
</html>