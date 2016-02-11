<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title title="CMS imaginamos V.1.6 |">CMS imaginamos V.1.6</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="<?php echo back_asset('img/ico-imaginamos.gif') ?>"/>

        <!--css Files-->
        <link href="<?php echo back_asset('css/0ui-custom.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('css/buttons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('css/cms.style.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('css/icon.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('css/timepicker.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('css/ui-custom.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/colorpicker/css/colorpicker.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/elfinder/css/elfinder.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/datatables/dataTables.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/validationEngine/validationEngine.jquery.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/jscrollpane/jscrollpane.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/fancybox/jquery.fancybox.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/tipsy/tipsy.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/editor/jquery.cleditor.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/chosen/chosen.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/confirm/jquery.confirm.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/sourcerer/sourcerer.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo back_asset('components/Jcrop/jquery.Jcrop.css') ?>" rel="stylesheet" type="text/css" />

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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo global_asset('js/jquery.js') ?>"><\/script>')</script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="<?php echo global_asset('js/jquery.ui.js') ?>"><\/script>')</script>

        <!-- Global assets -->
        <script src="<?php echo global_asset('plupload/js/plupload.full.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>"></script>
        <script src="<?php echo global_asset('js/jquery.livequery.js') ?>"></script>



        <!-- Components CMS -->
        <script src="<?php echo back_asset('js/ajaxfileupload.js') ?>"></script>
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
        <script src="<?php echo back_asset('js/cms.delete.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.ajax.form.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.upload.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.plugins.js') ?>"></script>
        <script src="<?php echo back_asset('js/cms.sortable.js') ?>"></script>
        <script src="<?php echo global_asset('js/functions.js') ?>"></script>




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

            small{
                color: gray
            }

            input[type="number"]{
                background-position: 5px 5px;
                border: solid 1px #DDD;
                outline: 0;
                line-height: 28px;
                height: 28px;
                padding: 0px 7px 0px 7px;
                -moz-box-shadow: 1px 1px 2px #f5f5f5;
                -webkit-box-shadow: 1px 1px 2px whiteSmoke;
                box-shadow: 1px 1px 2px whiteSmoke;
                -webkit-transition: all 0.4s ease 0s;
                -moz-transition: all 0.4s ease 0s;
                -o-transition: all 0.4s ease 0s;
                transition: all 0.4s ease 0s;
            }

            .alert {
                padding: 8px 35px 8px 14px;
                margin-bottom: 20px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                background-color: #fcf8e3;
                border: 1px solid #fbeed5;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
            }

            .alert,
            .alert h4 {
                color: #c09853;
            }

            .alert h4 {
                margin: 0;
            }

            .alert .close {
                position: relative;
                top: -2px;
                right: -21px;
                line-height: 20px;
            }

            .alert-success {
                color: #468847;
                background-color: #dff0d8;
                border-color: #d6e9c6;
            }

            .alert-success h4 {
                color: #468847;
            }

            .alert-danger,
            .alert-error {
                color: #b94a48;
                background-color: #f2dede;
                border-color: #eed3d7;
            }

            .alert-danger h4,
            .alert-error h4 {
                color: #b94a48;
            }

            .alert-info {
                color: #3a87ad;
                background-color: #d9edf7;
                border-color: #bce8f1;
            }

            .alert-info h4 {
                color: #3a87ad;
            }

            .alert-block {
                padding-top: 14px;
                padding-bottom: 14px;
            }

            .alert-block > p,
            .alert-block > ul {
                margin-bottom: 0;
            }

            .alert-block p + p {
                margin-top: 5px;
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
                <div style="width: auto;height: 30px"></div>
                <div class="clear"></div>

                <!-- full width -->
                <div class="errors"><?php
                if (!empty($alert_messages)) {
                    echo $alert_messages;
                }
                ?></div>
                <?php echo $template['body']; ?>
                <!-- End content -->
            </div><!-- End full width -->



            <!-- clear fix -->
            <div class="clear"></div>

            <div id="footer"> &copy; Copyright 2013 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

        </div> <!--// End inner -->
    </div> <!--// End content -->
    <script>
        if($("#wisiwyg").length >= 1){
            $("#wisiwyg").cleditor();
        }
    </script>
</body>
</html>