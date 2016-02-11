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

        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <!--you can use this packed script and jQuery-->
        <!--<script type='text/javascript' src='js/jquery-1.7.min.js'></script>-->
        <!--<script type="text/javascript" src="js/upload.packed.js"></script>-->

        <!--or below scripts-->
        <!-- manejo de imagenes -->
        <script type='text/javascript' src='js/upload.min.js'></script>
        <script type='text/javascript' src='js/swfobject.js'></script>
        <script type='text/javascript' src='js/myupload.js'></script>
        <script type='text/javascript' src='js/myupload1.js'></script>
        <!-- fin manejo de imagenes-->


        <?php
        if (isset($_GET['erno'])) {
            $erno = $_GET['erno'];
            if (!intval($erno)) {
                ?>
                <script language="javascript" type="text/javascript">
                    window.location.href = 'index.php';
                </script>
                <?php
            } else {
                if ($erno == 1) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info').innerHTML = 'El producto se agrego correctammente !<br />';
                            $('#info').show();
                        })
                    </script>
                    <?php
                }
                if ($erno == 10) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info').innerHTML = 'Problemas al agregar!';
                            $('#info').show();
                        })
                    </script>
                    <?php
                }
                if ($erno == 3) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info').innerHTML = 'Ingrese Titulo y texto !';
                            $('#info').show();
                        })
                    </script>
                    <?php
                }
                if ($erno == 4) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info').innerHTML = 'Ingrese las imagenes !';
                            $('#info').show();
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
                    <div class="header"><span><span class="ico gray window"></span>Galeria - subcategoria</span>
                    </div><!-- End header -->	
                    <div class="content">
                        <div class="formEl_b">
                            <fieldset>
                                <legend><h1>Nueva Subcategoria</h1></legend>
                                <form id="formAjax" method="post" action="../controller/add.php">
                                    <p>
                                        <div class="imu_info" id="info"></div>

                                        <div class="section">
                                            <label>Texto Descriptivo </label>   
                                            <div> 
                                                <textarea type="text" style="resize: none;"  name="texto" id="texto" class="large"></textarea>  
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="section">
                                            <label>IMAGEN DE (800PX X 533PX) EN FORMATO JPG</label>

                                            <div>
                                                <input id="IMU"  class="IMU" type="file" path="../../../../imagenes/" thumbnails="550x400" thumbnailsFolders="../../../../imagenes/" startOn='onSubmit:formAjax' ajaxInfoId='info' ajaxLoaderId='loader' multi='false' afterUpload='filename'  fileExt="jpg,jpeg,png,gif" fileDesc="Images (*.jpg, *.jpeg, *.png, *.gif)"/></div>
                                        </div>

                                        <input type="submit" value="Guardar" class="uibutton" />
                                        <a href="index.php" class="uibutton" />Regresar</a>
                                        <span class="imu_loader" id="loader">
                                            <img src="ajax-loader.gif"/>
                                        </span>
                                    </p>
                                </form>

                                <br />
                                <br />
                        </div>
                        <br />
                                <br />
                                
                            <?php 
                            $id = $_GET['id'];
                            $id = base64_decode($id);
                            echo $htmlFormTableUser->printSubcategoria($id); ?>
                    
                     <div>
                     <?php 
					 $Consultas = new Consultas;
					 $total = $Consultas->total('cms_subcategoria');
					 //echo $total.' total';
					// if ($total<5)
					// {
					 ?>
                    </div>
                          
                </div>
            </div>


            <!-- clear fix -->
            <div class="clear"></div>

            <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

        </div> <!--// End inner -->
        </div> <!--// End content -->



    </body>
</html>
