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
        <script type="text/javascript" src="../../../js/ckeditor/ckeditor.js"></script>
        <!-- fin manejo de imagenes-->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mensaje1").hide();
                $("#mensaje2").hide();
                $("#mensaje3").hide();
                $("#mensaje4").hide();
                $("#mensaje5").hide();
            
                $("#button").click(function(){
                    var titulo = $("#titulo").val();
                    var titulo2 = $("#titulo2").val();
                    var texto = $("#texto").val();
                    var imagen = $("#IMU").val();
                    
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
                        $("#mensaje5").fadeIn();
                        return false;
                    }
                    else
                    {
                        $("#mensaje5").fadeOut();
                    }
                    
                    if ((texto == " ") || (texto == ""))
                    {
                        $("#mensaje2").fadeIn();
                        return false;
                    }
                    else
                    {
                        $("#mensaje2").fadeOut();
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
                    <div class="header"><span><span class="ico gray window"></span>PRESENTACIONES</span>
                    </div><!-- End header -->	
                    <div class="content">
                        <div class="formEl_b">
                            <fieldset>
                                <div>
                                    <legend><h1>Nueva presentacion</h1></legend>
                                    <form id="formAjax" method="post" action="../controller/add.php">
                                        <p>
                                            <div class="imu_info" id="info"></div>
                                            <div class="section">
                                                <label>T&iacute;tulo </label>
                                                <div>
                                                    <input type="text" name="titulo" id="titulo" />
                                                    <span class="f_help"> L&iacute;mite de car&aacute;cteres 100/ <span class="titulo"></span></span>
                                                    <div id="mensaje1"><i>T&iacute;tulo Requerido</i></div>

                                                </div>
                                            </div>

                                            <div class="section">
                                                <label>Subtítulo</label>
                                                <div>
                                                    <input type="text" name="subtitulo" id="titulo2" />
                                                    <span class="f_help"> L&iacute;mite de car&aacute;cteres 50/ <span class="titulo2"></span></span>
                                                    <div id="mensaje5"><i>Subtítulo Requerido</i></div>
                                                </div>
                                            </div>


                                            <div class="section">
                                                <label>Texto</label>
                                                <div>
                                                    <textarea name="texto" id="texto" class="large" cols="" rows=""></textarea>
                                                    <span class="f_help"> L&iacute;mite de car&aacute;cteres 70/ <span class="texto"></span></span>
                                                    <div id="mensaje2"><i>Texto Requerido</i></div>
                                                </div>
                                            </div>


                                          

                                            <div class="section">
                                        <label>Archivo</label>
                                        <div>
                                            <input id="IMU"  class="IMU" type="file" path="files/"  thumbnailsFolders="files/archivos/" startOn='onSubmit:formAjax' ajax='true' ajaxInfoId='info' ajaxLoaderId='loader' multi='false' afterUpload='filename'  fileExt="docx,ppt,pptx,xml,docm" fileDesc="Images (*.docx, *.ppt, *.pptx, *.xml, *.docm)"/>
                                        
                                        <div id="mensaje3"><i>Archivo Requerido</i></div>
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
    $('#titulo').limit('100','.titulo');
    $('#titulo2').limit('50','.titulo2');
    $('#texto').limit('70','.texto');

</script>

