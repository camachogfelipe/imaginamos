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
                    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos / Men&uacute;</span>
                    </div><!-- End header -->
                    <div class="content">


                        <div class="formEl_b">

                            <div>
                                <fieldset>
                                    <div style="position: absolute;float: left;height: 60px;">
                                        <?php echo anchor("menu/add/", "Nuevo", 'class="uibutton icon add" style="top: 100%"') ?>

                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="tableName toolbar">
                                        <table class="display data_table2" >
                                            <thead>
                                                <tr>
                                                    <th><div class="th_wrapp">Nombre</div></th>	
                                            <th><div class="th_wrapp">Nombre [Ingles]</div></th>	
                                            <th><div class="th_wrapp">Modulo</div></th>	
                                            <th><div class="th_wrapp">Modulo [Ingles]</div></th>	
                                            <th><div class="th_wrapp">Icono</div></th>	
                                            <th><div class="th_wrapp">Acciones</div></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($records != ''):
                                                    foreach ($records as $item):
                                                        ?>
                                                        <tr class="odd gradeX" >
                                                            <td class="center" style="width: 15%"><?php echo $item->menu_title ?></td>
                                                            <td class="center" style="width: 15%"><?php echo $item->menu_title_eng ?></td>
                                                            <td class="center" style="width: 20%"><?php
                                                if ($item->menu_url == '') {
                                                    echo "[Contenedor de submen&uacute;s]";
                                                } else {
                                                    echo $item->menu_url;
                                                }
                                                ?></td>
                                                            <td class="center" style="width: 20%"><?php
                                                if ($item->menu_url_eng == '') {
                                                    echo "[Contenedor de submen&uacute;s]";
                                                } else {
                                                    echo $item->menu_url_eng;
                                                }
                                                        ?></td>
                                                            <td class="center" style="width: 8%"><img src="<?php echo base_url() . 'assets/images/icons/' . $item->menu_icon ?>.png" alt="icons_imaginamos" /></td>
                                                            <td class="center" style="width: 20%">
                                                        <?php echo anchor("menu/edit/" . $item->menu_id, "Editar", 'class="uibutton"') ?>
                                                        <?php echo anchor("menu/delete/" . $item->menu_id, "Eliminar", 'class="uibutton special"') ?>
                                                        <?php echo anchor("submenu/index/" . $item->menu_id, "Sub Menús", 'class="uibutton confirm"') ?>
                                                            </td>
                                                        </tr>
    <?php endforeach;
endif;
?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- FIIINNNNNNN -->




                                </fieldset>
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