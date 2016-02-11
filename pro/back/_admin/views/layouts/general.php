<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo back_asset('css/cms.css') ?>" />

        <!-- Plupload CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo global_asset('plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css') ?>" media="all" />

        <!-- Load CMS API -->
        <script>window.CMS = {}</script>
        
        <!-- Load Globals -->
        <script src="<?php echo cms_url('admin/globals/js') ?>"></script>
        
        <!-- Load Important libraries -->
        <script src="<?php echo global_asset('js/modernizr.js') ?>"></script>
       

        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        
      
        <script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo global_asset('js/jquery.js') ?>"><\/script>')</script>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="<?php echo global_asset('js/jquery.ui.js') ?>"><\/script>')</script>

        <!-- Global assets -->
        <script src="<?php echo global_asset('plupload/js/plupload.full.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>"></script>
        <script src="<?php echo global_asset('js/jquery.livequery.js') ?>"></script>

       
        
        <!-- Components CMS -->
       
        <script src="<?php echo back_asset('components/ui/jquery.autotab.js') ?>"></script>
        <script src="<?php echo back_asset('components/ui/timepicker.js') ?>"></script>
        <script src="<?php echo back_asset('components/colorpicker/js/colorpicker.js') ?>"></script>
        <script src="<?php echo back_asset('components/checkboxes/iphone.check.js') ?>"></script>
        <script src="<?php echo back_asset('components/elfinder/js/elfinder.full.js') ?>"></script>
        <script src="<?php echo back_asset('components/datatables/dataTables.min.js') ?>"></script>
        <script src="<?php echo back_asset('components/datatables/ColVis.js') ?>"></script>
        <script src="<?php echo back_asset('components/scrolltop/scrolltopcontrol.js') ?>"></script>
        <script src="<?php echo back_asset('components/fancybox/jquery.fancybox.js') ?>"></script>
        <script src="<?php echo back_asset('components/jscrollpane/mousewheel.js') ?>"></script>
        <script src="<?php echo back_asset('components/jscrollpane/mwheelIntent.js') ?>"></script>
        <script src="<?php echo back_asset('components/jscrollpane/jscrollpane.min.js') ?>"></script>
        <script src="<?php echo back_asset('components/spinner/ui.spinner.js') ?>"></script>
        <script src="<?php echo back_asset('components/tipsy/jquery.tipsy.js') ?>"></script>
        <script src="<?php echo back_asset('components/editor/jquery.cleditor.js') ?>"></script>
        <script src="<?php echo back_asset('components/chosen/chosen.js') ?>"></script>
        <script src="<?php echo back_asset('components/confirm/jquery.confirm.js') ?>"></script>
        <script src="<?php echo back_asset('components/validationEngine/jquery.validationEngine.js') ?>"></script>
        <script src="<?php echo back_asset('components/validationEngine/jquery.validationEngine-en.js') ?>"></script>
        <script src="<?php echo back_asset('components/vticker/jquery.vticker-min.js') ?>"></script>
        <script src="<?php echo back_asset('components/sourcerer/sourcerer.js') ?>"></script>
        <script src="<?php echo back_asset('components/fullcalendar/fullcalendar.js') ?>"></script>
        <script src="<?php echo back_asset('components/flot/flot.js') ?>"></script>
        <script src="<?php echo back_asset('components/flot/flot.pie.min.js') ?>"></script>
        <script src="<?php echo back_asset('components/flot/flot.resize.min.js') ?>"></script>
        <script src="<?php echo back_asset('components/flot/graphtable.js') ?>"></script>
        <script src="<?php echo back_asset('components/uploadify/swfobject.js') ?>"></script>
        <script src="<?php echo back_asset('components/uploadify/uploadify.js') ?>"></script>
        <script src="<?php echo back_asset('components/checkboxes/customInput.jquery.js') ?>"></script>
        <script src="<?php echo back_asset('components/effect/jquery-jrumble.js') ?>"></script>
        <script src="<?php echo back_asset('components/filestyle/jquery.filestyle.js') ?>"></script>
        <script src="<?php echo back_asset('components/placeholder/jquery.placeholder.js') ?>"></script>
        <script src="<?php echo back_asset('components/Jcrop/jquery.Jcrop.js') ?>"></script>
        <script src="<?php echo back_asset('components/imgTransform/jquery.transform.js') ?>"></script>
        <script src="<?php echo back_asset('components/webcam/webcam.js') ?>"></script>
        <script src="<?php echo back_asset('components/rating_star/rating_star.js') ?>"></script>
        <script src="<?php echo back_asset('components/dualListBox/dualListBox.js') ?>"></script>
        <script src="<?php echo back_asset('components/smartWizard/jquery.smartWizard.min.js') ?>"></script>
        <script src="<?php echo back_asset('components/maskedinput/jquery.maskedinput.js') ?>"></script>
        <script src="<?php echo back_asset('components/highlightText/highlightText.js') ?>"></script>
        <script src="<?php echo back_asset('components/elastic/jquery.elastic.source.js') ?>"></script>
        <script src="<?php echo back_asset('js/jquery.cookie.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.custom.js') ?>"></script>
        
        <!-- CMS Scripts -->
        <script src="<?php echo back_asset('js/cms.load.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.modals.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.loading.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.delete.js') ?>"></script>
      
        <script src="<?php echo back_asset('js/cms.ajax.form.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.upload.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.plugins.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.sortable.js') ?>"></script>
        
        
        <style type="text/css">
            /* float clearing for IE6 */
            * html .clearfix{
                height: 1%;
                overflow: visible;
            }

            /* float clearing for IE7 */
            *+html .clearfix{
                min-height: 1%;
            }

            /* float clearing for everyone else */
            .clearfix:after{
                clear: both;
                content: ".";
                display: block;
                height: 0;
                visibility: hidden;
                font-size: 0;
            }
            
            /* -- Bugs fixed -- */
            
            .dataTables_filter input[type="text"]{
                height:auto;
            }
            
            .main_menu li{
                text-transform: none;
            }
        </style>

    </head>
    <body class="dashborad">
        <div id="alertMessage" class="error"></div>
        <!-- Header -->
        <div id="header">
            <div id="account_info">
                <?php echo $template['partials']['menu_administrators']; ?>
            </div>
        </div><!-- End Header -->
        <div id="shadowhead"></div>

        <div id="left_menu">
            <ul id="main_menu" class="main_menu">
                <?php echo $template['partials']['menu_panel']; ?>
            </ul>
        </div>

        <div id="content">
            <div class="inner">
                <div class="topcolumn">
                    <div class="logo"></div>
                    <ul id="shortcut">
                        <?php echo $template['partials']['menu_icons']; ?>
                    </ul>
                </div>
                <div class="clear"></div>

                <!-- full width -->
                <?php echo $template['body']; ?>
                <!-- End content -->
            </div><!-- End full width -->



            <!-- clear fix -->
            <div class="clear"></div>

            <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

        </div> <!--// End inner -->
    </div> <!--// End content -->



</body>
</html>