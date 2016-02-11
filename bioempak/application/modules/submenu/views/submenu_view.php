<?php 
$idmenu = $this->uri->segment(4);
if($idmenu == ''){$idmenu = $this->uri->segment(3);}
?>
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
                    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos / Men&uacute; / Submen&uacute; / <?php echo $menu[0]->menu_title; ?></span>
                    <br /><?php echo anchor('menu/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>
                    </div><!-- End header -->
                    <div class="content">


                        <div class="formEl_b">

                            <div>
                                <fieldset>
                                    <div style="position: absolute;float: left;height: 60px;">
                                        <?php echo anchor("submenu/add/".$idmenu, "Nuevo", 'class="uibutton icon add" style="top: 100%"') ?>
                                        
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="tableName toolbar">
                                        <table class="display data_table2" >
                                            <thead>
                                                <tr>
                                                    <th><div class="th_wrapp">Nombre item del submen&uacute;</div></th>	
                                            <th><div class="th_wrapp">Modulo</div></th>	
                                            <th><div class="th_wrapp">Acciones</div></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if($records != ''):
                                                foreach ($records as $item): 
                                                ?>
                                                    <tr class="odd gradeX" >
                                                        <td class="center" style="width: 30%"><?php echo $item->submenu_title ?></td>
                                                        <td class="center" style="width: 35%"><?php echo $item->submenu_url ?></td>
                                                        <td class="center" style="width: 25%">
                                                            <?php echo anchor("submenu/edit/" . $item->submenu_id . "/" . $idmenu, "Editar", 'class="uibutton"') ?>
                                                            <?php echo anchor("submenu/delete/" . $item->submenu_id . "/" . $idmenu, "Eliminar", 'class="uibutton special"') ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;endif; ?>
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