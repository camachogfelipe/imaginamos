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
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->  

        <!-- Estilos del autor -->
        <link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />
        <!-- Fin Estilos del autor -->


        <style>
            small{color: #999;display: block;font-size: 11px;font-weight: normal;line-height: 13px;margin-top: 3px;text-transform: none;}
        </style>


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
                    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos / Men&uacute; / Nuevo</span>
                        <br /><?php echo anchor('menu/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>
                    </div><!-- End header -->
                    <div class="content">


                        <div class="formEl_b">

                            <div>


                                <div>
                                    <div class="imu_info" id="info"></div>



                                    <?php echo form_open_multipart('menu/new_record/') ?>
                                    <fieldset>

                                        <div>
                                            <p><label>Nombre del men&uacute; <strong style="color: red">*</strong></label></p>
                                            <div><input type="text" name="title" class="small" value="<?php echo set_value('title'); ?>" maxlength="30" title="30 caracteres maxímo" /></div>

                                        </div>

                                        <p>&nbsp;</p>

                                        <div>
                                            <p><label>Nombre del modulo</label></p>
                                            <div><input type="text" name="url" class="small" value="<?php echo set_value('url'); ?>" maxlength="50" title="50 caracteres maxímo" /></div>
                                            <small>En caso de tener submenus dejar vacio</small>

                                        </div>

                                        <p>&nbsp;</p>
                                        <div>
                                            <p><label>Icono del men&uacute; <strong style="color: red">*</strong></label></p>
                                            
                                            
                                           <?php $i=1; foreach ($records_icons as $item): ?> 
                                            <div style="width: auto;height: auto;margin-right: 3px;float: left;padding: 5px">
                                                <div style="width: auto;height: auto;margin-right: 1px;float: left">
                                                    <div style="float: left;width: 10px;margin-right: 5px;">
                                                        <img src="<?php echo base_url() ?>assets/images/icons/<?php echo $item->icons_name ?>.png" alt="icons">
                                                    </div>
                                                    <div style="float: left;width: 20px;margin-top: -4px">
                                                        <input type="radio" name="icon" id="icon<?= $i ?>" value="<?php echo $item->icons_name ?>" title="<?php echo $item->icons_name ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $i++; endforeach; ?>




                                        </div>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <div style="width: 100px;height: 30px;position: relative;top: 30px">
                                            <input name="id" type="hidden" value="" />
                                            <input type="submit" value="Guardar" class="uibutton confirm" />
                                        </div>
                                        
                                        <div style="width: auto;height: 500px;"></div>

                                    </fieldset>
                                    <br>
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