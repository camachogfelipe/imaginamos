<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CMS imaginamos V 1.0</title>

    <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
    <meta name="author" content="imaginamos.com | Brayan Acebo">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url() ?>assets/images/ico-imaginamos.gif"/>

        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->

        <!-- Estilos del autor -->
        <link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />
        <!-- Fin Estilos del autor -->
      
        </head>
        <body class="dashborad">
            <div id="alertMessage" class="error"></div>
            <!-- Header -->
            <div id="header">
                <div id="account_info">
                    <?php echo $administrator; ?>
                </div>
            </div><!-- End Header -->
            <div id="shadowhead"></div>

            <div id="left_menu">
                <ul id="main_menu" class="main_menu">
                    <?php echo $index; ?>
                </ul>
            </div>

            <div id="content">
                <div class="inner">
                    <div style="width: auto;height: 30px"></div>  

                    <!-- full width -->
                    <div class="widget">
                        <div class="header"><span><span class="ico gray window"></span>CMS AKRO / Galerias / Editar</span>
                            <br /><?php echo anchor('galerias_factores/index/'. $record[0]->factores_id, 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>
                        </div><!-- End header -->
                        <div class="content">

                            <div class="formEl_b">

                                <div>

                                    <div>
                                        <div class="imu_info" id="info"></div>

                                        <?php echo form_open_multipart('galerias_factores/update/' . $record[0]->factores_id) ?>
                                        <fieldset>

                                            <div>
                                                <p><label>Imagen</label></p>
                                                <a href="<?php echo base_url('application/modules/galerias_factores/assets/images/'.$record[0]->imagen) ?>" target="_blank"><img src="<?php echo base_url('application/modules/galerias_factores/assets/images/'.$record[0]->imagen) ?>" alt="imaginamos.com" width="500"></a><br/>
                                                <?php echo form_upload('userfile', '', ' title="Imagenes permitidas jpg|jpeg|png|gif" class="fileupload" style="position: absolute; height: 30px; width: 170px; margin-left: 5px; display: inline; cursor: pointer; opacity: 0; "') ?>
                                                <br><small>Tama&ntilde;o recomendado 1350 x 355 px (No debe de pesar mas de 250 KB).</small>

                                            </div>

                                            <br>

                                            <div>
                                                <input type="hidden" name="id" value="<?php echo $record[0]->id_galerias ?>">
                                                <input type="submit" value="Guardar" class="uibutton confirm" />
                                            </div>

                                        </fieldset>

                                        <?php echo form_close() ?>
                                    </div>

                                </div>

                            </div>
                        </div>	

                    </div><!-- End content -->
                </div><!-- End full width -->

                <!-- clear fix -->
                <div class="clear"></div>

                <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

            </div> <!--// End inner -->
        </div> <!--// End content -->

    </body> 
    <?php echo $functions; ?>
    </html>