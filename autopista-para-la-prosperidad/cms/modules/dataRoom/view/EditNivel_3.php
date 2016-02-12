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
include("../model/tables.class4.php");
$tabla="nivel_3";
$htmlFormTableUser = new Tables4($db, $id="");
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
        <script type="text/javascript" src="../../../js/ckeditor/ckeditor.js"></script>

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
                            document.getElementById('info1').innerHTML = 'Subnivel editado correctamente!<br />';
                            $('#info1').show();
                        })
                    </script>
                    <?php
                }
                if ($erno == 2) {
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
                    <div class="header"><span><span class="ico gray window"></span>EDICIÓN SUBNIVELES</span>
                    </div><!-- End header -->	
                    <div class="content">
                        <div class="formEl_b">
                            <fieldset>
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = base64_decode($_GET['id']);
                                    if (!intval($id)) {
                                        header('Location: index.php');
                                        exit;
                                    }
                                    $Consultas = new Consultas;
                                    $arrayCampos[0] = 'id';
                                    $arrayCampos[2] = 'nombre';

                                    $query1 = $Consultas->Byid($tabla, $id, 'id', $arrayCampos);
                                }
                                ?>

                                <div>
                                    <legend><h1>Editar Subnivel</h1></legend>
                                    <form id="form" method="post" action="../controller/editNivel.php">
                                        <p>
                                            <div id="info1" class="imu_info"></div>
                                            <div>
                                                
                                                <div class="section">
                                                    <label>Nombre</label>
                                                    <div>
                                                        <input name="nombre" id="texto" class="large" value="<?php echo $query1[2];?>"/>
                                                        <input type="hidden" class="large"  name="id" id="id" value="<?php echo $query1[0]; ?>" />
                                                        <input type="hidden" class="large"  name="tabla" id="id" value="<?php echo $tabla; ?>" />
                                                        <input type="hidden" class="large"  name="ant" id="id" value="<?php echo $_GET["ant"]; ?>" />
                                                        <input type="hidden" class="large"  name="idt" id="id" value="<?php echo $_GET["idt"];?>" />
                                                        <input type="hidden" class="large"  name="idtt" id="id" value="<?php echo $_GET["idtt"];?>" />
                                                        <input type="hidden" class="large"  name="anttt" id="id" value="<?php echo $_GET["anttt"];?>" />
                                                    </div>
                                                </div>
                                                

                                                <div class="section">
                                                    <input type="submit" value="Guardar" class="uibutton" />
                                                    <a href="nivel_3.php?id=<?php echo $_GET["idt"];?>&ant=<?php echo $_GET["ant"];?>&idt=<?php echo $_GET["idtt"];?>&antt=<?php echo $_GET["anttt"];?>" class="uibutton" />Regresar</a>
                                                    <span class="imu_loader" id="loader">
                                                        <img src="ajax-loader.gif"/>
                                                    </span>
                                                </div>
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
    $('#titulo').limit('100','.titulo');
    $('#titulo2').limit('50','.titulo2');
    $('#texto').limit('70','.texto');
</script>