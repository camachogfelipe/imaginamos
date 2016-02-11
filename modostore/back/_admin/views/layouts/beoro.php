<!DOCTYPE HTML>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <title>CMS imaginamos V.1.7</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/gif" href="<?php echo back_asset('beoro/img/ico-imaginamos.gif') ?>">

        <!-- common stylesheets-->
        <!-- bootstrap framework css -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/bootstrap/css/bootstrap-responsive.min.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/sticky/sticky.css') ?>">
        <!-- iconSweet2 icon pack (16x16) -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/img/icsw2_16/icsw2_16.css') ?>">
         <!-- iconSweet2 icon pack (32x32) -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/img/icsw2_32/icsw2_32.css') ?>">
       
        <!-- splashy icon pack -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/img/splashy/splashy.css') ?>">
        <!-- flag icons -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/img/flags/flags.css') ?>">
        <!-- power tooltips -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/powertip/jquery.powertip.css') ?>">
        <!-- google web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">

        <!-- aditional stylesheets -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/datatables/css/datatables_beoro.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/datatables/extras/TableTools/media/css/TableTools.css') ?>">
        <!-- jQuery UI theme -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/jquery-ui/css/Aristo/Aristo.css') ?>">
        <!-- 2 col multiselect -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/multi-select/css/multi-select.css') ?>">
        <!-- enchanced select box, tag handler -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/select2/select2.css') ?>">
        <!-- datepicker -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/bootstrap-datepicker/css/datepicker.css') ?>">
        <!-- timepicker -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/bootstrap-timepicker/css/timepicker.css') ?>">
        <!-- colorpicker -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/bootstrap-colorpicker/css/colorpicker.css') ?>">
        <!-- switch buttons -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/ibutton/css/jquery.ibutton.css') ?>">
        <!-- UI Spinners -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/jqamp-ui-spinner/css/jqamp-ui-spinner.css') ?>">
        <!-- multiupload -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/plupload/js/jquery.plupload.queue/css/plupload-beoro.css') ?>">
        <!-- colorbox -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/colorbox/colorbox.css') ?>">
        <!--fullcalendar -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/fullcalendar/fullcalendar_beoro.css') ?>">
        <!-- main stylesheet -->
        <link rel="stylesheet" href="<?php echo back_asset('beoro/css/beoro.css') ?>">

        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo back_asset('beoro/css/ie8.css') ?>"><![endif]-->
        <!--[if IE 9]><link rel="stylesheet" href="<?php echo back_asset('beoro/css/ie9.css') ?>"><![endif]-->

        <!--[if lt IE 9]>
            <script src="<?php echo back_asset('beoro/js/ie/html5shiv.min.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/ie/respond.min.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/excanvas.min.js') ?>"></script>
        <![endif]-->
        <style type="text/css">
            #fade-menu{
                font-family:Arial, sans-serif;
                font-weight: bold;
            }
            #fade-menu ul li ul li{width:180px}
        </style>
    </head>
    <body class="bg_d">
        <div class="main-wrapper">
            <?php echo $template['partials']['menu_panel']; ?>
            <?php echo $template['partials']['toolbar']; ?>
            <?php echo $template['body']; ?>
            <?php echo $template['partials']['modals']; ?>
        </div>
        <br/><br/><br/>
        <!-- footer --> 
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <div>&copy; Imaginamos 2013</div>
                    </div>
                    <div class="span7">
                       <!-- <ul class="unstyled">
                            <li><a href="#">First link</a></li>
                            <li>·</li>
                            <li><a href="#">Second link</a></li>
                        </ul> --> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- Common JS -->
        <!-- Objeto Global -->
        <script>
            var CMS = {};
            CMS.globals = {'base_url': '<?php echo base_url() ?>', 'site_url': '<?php echo site_url(); ?>'}
        </script>
        <!-- jQuery framework -->
        <script src="<?php echo back_asset('beoro/js/jquery.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/jquery-migrate.js') ?>"></script>
        <!-- jQuery UI -->
        <script src="<?php echo back_asset('beoro/js/lib/jquery-ui/jquery-ui-1.10.2.custom.min.js') ?>"></script>
        <!-- touch event support for jQuery UI -->
        <script src="<?php echo back_asset('beoro/js/lib/jquery-ui/jquery.ui.touch-punch.min.js') ?>"></script>
        <!-- bootstrap Framework plugins -->
        <script src="<?php echo back_asset('beoro/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/jquery-validation/jquery.validate.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/sticky/sticky.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/bootbox/bootbox.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/common.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/run_api.js') ?>"></script>
        <!-- top menu -->
        <script src="<?php echo back_asset('beoro/js/jquery.fademenu.js') ?>"></script>
        <!-- top mobile menu -->
        <script src="<?php echo back_asset('beoro/js/selectnav.min.js') ?>"></script>
        <!-- actual width/height of hidden DOM elements -->
        <script src="<?php echo back_asset('beoro/js/jquery.actual.min.js') ?>"></script>
        <!-- jquery easing animations -->
        <script src="<?php echo back_asset('beoro/js/jquery.easing.1.3.min.js') ?>"></script>
        <!-- power tooltips -->
        <script src="<?php echo back_asset('beoro/js/lib/powertip/jquery.powertip-1.1.0.min.js') ?>"></script>
        <!-- date library -->
        <script src="<?php echo back_asset('beoro/js/moment.min.js') ?>"></script>
        <!-- common functions -->
        <script src="<?php echo back_asset('beoro/js/beoro_common.js') ?>"></script>
      
        <!-- colorbox -->
        <script src="<?php echo back_asset('beoro/js/lib/colorbox/jquery.colorbox.min.js') ?>"></script>
        <!-- fullcalendar -->
        <script src="<?php echo back_asset('beoro/js/lib/fullcalendar/fullcalendar.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/datatables/js/jquery.dataTables.bootstrap.min.js') ?>"></script>
        <!-- datatables column reorder -->
        <script src="<?php echo back_asset('beoro/js/lib/datatables/extras/ColReorder/media/js/ColReorder.min.js') ?>"></script>
        <!-- datatables column toggle visibility -->
        <script src="<?php echo back_asset('beoro/js/lib/datatables/extras/ColVis/media/js/ColVis.min.js') ?>"></script>
        <!-- datatable table tools -->
        <script src="<?php echo back_asset('beoro/js/lib/datatables/extras/TableTools/media/js/TableTools.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/datatables/extras/TableTools/media/js/ZeroClipboard.js') ?>"></script>
        <!-- progressbar animations -->
        <script src="<?php echo back_asset('beoro/js/form/jquery.progressbar.anim.min.js') ?>"></script>
        <!-- 2col multiselect -->
        <script src="<?php echo back_asset('beoro/js/lib/multi-select/js/jquery.multi-select.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/multi-select/js/jquery.quicksearch.min.js') ?>"></script>
        <!-- combobox -->
        <script src="<?php echo back_asset('beoro/js/form/fuelux.combobox.min.js') ?>"></script>
        <!-- enchanced select box, tag handler -->
        <script src="<?php echo back_asset('beoro/js/lib/select2/select2.min.js') ?>"></script>
        <!-- datepicker -->
        <script src="<?php echo back_asset('beoro/js/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
        <!-- timepicker -->
        <script src="<?php echo back_asset('beoro/js/lib/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
        <!-- colorpicker -->
        <script src="<?php echo back_asset('beoro/js/lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
        <!-- metadata -->
        <!-- switch buttons -->
        <script src="<?php echo back_asset('beoro/js/lib/ibutton/js/jquery.ibutton.beoro.js') ?>"></script>
        <!-- textarea counter -->
        <script src="<?php echo back_asset('beoro/js/lib/jquery-textarea-counter/jquery.textareaCounter.plugin.min.js') ?>"></script>
        <!-- plupload and the jQuery queue widget -->
         <script src="<?php echo back_asset('beoro/js/form/bootstrap-fileupload.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo back_asset('beoro/js/lib/plupload/js/plupload.full.js') ?>"></script>
        <script type="text/javascript" src="<?php echo back_asset('beoro/js/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js') ?>"></script>
        <!-- navigation -->
         <script src="<?php echo back_asset('beoro/js/jnavigate.jquery.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/pages/beoro_ajax_content.js') ?>"></script> 
        <!-- validacion -->
         <script src="<?php echo back_asset('beoro/js/pages/beoro_form_validation.js') ?>"></script>
         <!-- price_format -->
         
            <script src="<?php echo back_asset('beoro/js/jquery.price_format.1.8.js') ?>"></script>
          
             <script src="<?php echo back_asset('beoro/js/highcharts.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.resize.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.pie.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.orderBars.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.tooltip.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.time.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.stack.js') ?>"></script>
            <script src="<?php echo back_asset('beoro/js/lib/flot-charts/jquery.flot.threshold.js') ?>"></script>
        
        <!-- WYSIWG Editor -->
        <script src="<?php echo back_asset('beoro/js/lib/ckeditor/ckeditor.js') ?>"></script>
        <?php if (!empty($public_assets['js'])) : ?>
            <?php foreach ($public_assets['js'] as $js) : ?>
                <script src="<?php echo $js ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (isset($alert_messages)) echo $alert_messages ?>
    </body>
</html>
