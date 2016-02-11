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
        <script>
                $(document).ready(function(){
                    $('#formAjax').validationEngine();
                });
        </script>
        
       
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
                            document.getElementById('info').innerHTML = 'Se agrego correctammente !<br />';
                            $('#info').show();
                        })
                    </script>
                    <?php
                }
                if ($erno == 2) {
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
                            document.getElementById('info').innerHTML = 'Campos vacios!';
                            $('#info').show();
                        })
                    </script>
                    <?php
                }
                 if ($erno == 4) {
                    ?>
                    <script language="javascript" type="text/javascript">
                        $(document).ready(function(){
                            document.getElementById('info').innerHTML = 'Falta la imagen Preview!';
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
                    <div class="header"><span><span class="ico gray window"></span>Actividades</span>
                    </div><!-- End header -->	
                    <div class="content">
                        <div class="formEl_b">
                            <fieldset>
                                <legend><h1>Nuevo Contenido</h1></legend>
                                <form id="formAjax" method="post" action="../controller/add_1.php">
                                    <p>
                                        <div class="imu_info" id="info"></div>

                                        <div class="section">
                                            <label>Titulo Contenido  </label>   
                                            <div> 
                                                <input type="text"  name="titulo" id="titulo" class="large validate[required]" data-validation-placeholder="titulo"  />
                                                <span class="f_help" style="margin-right: 200px;"> Límite de carácteres 19 / <span class="titulo"></span></span>
                                            </div>
                                        </div>

                                        

                                       
                                        <div class="section">
                                            <label>Texto descriptivo </label>   
                                            <div> 
                                                <textarea name="descriptivo" id="descriptivo" class="large validate[required]" data-validation-placeholder="descriptivo" ></textarea>
                                                <span class="f_help" style="margin-right: 200px;"> Límite de carácteres 48 / <span class="subtitulo"></span></span>
                                            </div>
                                        </div>
                                        

                                        
                                         <?php 
                                         $id = $_GET['id'];
                                         $id = base64_decode($id);
                                         ?>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
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
                        </fieldset>
                            <div class="formEl_b">
        
                    <fieldset >
                        
                    <?php
                    $id = $_GET['id'];
                    $id = base64_decode($id);
                    echo $htmlFormTableUser->printcontenido($id); ?>
                    </fieldset>
                    <div>
                     <?php 
					 $Consultas = new Consultas;
					 $total = $Consultas->total('cms_contenido');
					 //echo $total.' total';
                                if ($total<9)
                                {
                                ?>
                               
                                <?php
                                }
                                ?>
                     </div> 
                    </div>
                    </div>

                </div>
            </div>


            <!-- clear fix -->
            <div class="clear"></div>

            <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

        </div> <!--// End inner -->
        </div> <!--// End content -->


<script type="text/javascript" language="javascript">
  $('#titulo').limit('19','.titulo');
  $('#subtitulo').limit('48','.subtitulo');
</script>


    </body>
</html>