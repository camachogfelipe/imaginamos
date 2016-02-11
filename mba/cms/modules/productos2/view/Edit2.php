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
require_once("objetivo.php");

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
                                if ($erno == 5) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info1').innerHTML = 'El adjunto ha sido eliminado correctamente!<br />';
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
                            <legend><h1>Editar <?=$query1[1]?></h1></legend>
<form id="formAjax" method="post" action="../controller/edit2.php">
<input type="hidden" name="id" id="id" value="<?=$query1[0]?>" >
<input type="Hidden"  name="titulo5" id="titulo5" class="large" value="<?=$query1[5]?>"  />

<input type="Hidden"  name="imagen1ant" id="imagen1ant" class="large" value="<?=$query1[10]?>"  />
<input type="Hidden"  name="imagen2ant" id="imagen2ant" class="large" value="<?=$query1[11]?>"  />

<div id="info1" class="imu_info"></div>
                                    
     <p>
<div class="imu_info" id="info"></div>
<div class="section">
<label>Hoja de Seguridad</label>
<div>
    <a href="files/<?=$query1[10]?>"  target="_black"><?=$query1[10]?></a><br></br>
<input class="IMU" type="file" path="files/" startOn='onSubmit:formAjax' ajax='false' ajaxInfoId='info' ajaxLoaderId='loader' multi='false' afterUpload='filename' fileExt="*" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
</div>
</div>

<div class="section">
<label>Tarjeta de emergencia</label>
<div>
    <a href="files/<?=$query1[11]?>" target="_black" ><?=$query1[11]?></a><br></br>
<input class="IMU1" type="file" path="files/" startOn='onSubmit:formAjax' ajax='false' ajaxInfoId='info' ajaxLoaderId='loader' multi='false' afterUpload='filename' fileExt="*" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/>
</div>
</div>

<div class="section">
                                            <input type="submit" value="Guardar" class="uibutton" />
                                            <a href="index.php?id=<?=base64_encode($query1[5])?>" class="uibutton" />Regresar</a>
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
                        
					 <p>&nbsp;</p>
                            <p>&nbsp;</p>



                            <fieldset>
  <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <div class="tableName toolbar">
                                    <table class="display data_table2" >
                                        <thead>
                                            <tr>
                                                <th><div class="th_wrapp">Tipo</div></th>
                                                <th><div class="th_wrapp">Archivo </div></th>

                                                <th><div class="th_wrapp">Acciones</div></th>

                                            </tr>
                                        </thead>
                                        <?php 
                                        
                                        $obj = new cons();
                                        $res = $obj->Pintartabla($id);
                                        
                                        ?>
                                        <tbody>
                                            <?php
                                            if($res[0]['imagen1'] != ""){?>
                                               <tr class="odd gradeX">
                                                <td class="center" width="100px"><b>Hoja de Seguridad</b></td>
                                                <td class="center" width="100px"><?php echo $res[0]['imagen1'];?></td>

                                                <td class="center" width="100px">
                                                    <form action="../controller/delete3.php" method="POST" id="Elim" >
                                                        <input type="submit" name="Eliminar3" class="uibutton special" value="Eliminar"/>
                                                        <input type="hidden" name="id" id="id" value="<?=$query1[0]?>" ></input>
                                                    </form>
                                                    <input type="hidden"  class="amt" >					
                                                </td>
                                            </tr> 
                                           <?php     
                                            }
                                            if($res[0]['imagen2'] != ""){ ?>
                                                
                                                <tr class="odd gradeX">
                                                <td class="center" width="100px"><b>Tarjeta de Emergencia</b></td>
                                                <td class="center" width="100px"><?php echo $res[0]['imagen2'];?></td>

                                                <td class="center" width="100px">
                                                    <form action="../controller/delete3.php" method="POST" id="Elim" >
                                                        <input type="submit" name="Eliminar4" class="uibutton special" value="Eliminar"/>
                                                        <input type="hidden" name="id" id="id" value="<?=$query1[0]?>" ></input>
                                                    </form>

                                                    <input type="hidden"  class="amt" >					
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
             
              
</body>
</html>

<script type="text/javascript" language="javascript">
$("#titulo2").cleditor();
$("#titulo4").cleditor();
</script>