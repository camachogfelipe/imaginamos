    <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" class="ie9"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $template['title']; ?></title>

        <meta property="og:title" content="<?php echo $template['title']; ?>"/>
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo current_url() ?>"/>
		<meta property="og:description" content="<?php echo $template['title']; ?>" />
		<meta property="og:site_name" content="<?php echo SITENAME ?>"/>
		
        <link rel="caninocal" href="<?php echo current_url() ?>" />

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo front_asset('images/favicon.ico') ?>" />
        <meta name="keywords" lang="es" content="Inshaka, Música, Comunidad musical, géneros musicales, musica, Colombia, Rock" />
        <meta name="description" lang="es" content="<?php echo $template['title']; ?>" />
        <meta name="date" content="2011" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery.jscrollpane.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/colorbox.css" />
        <link href="css/dd.css" rel="stylesheet" type="text/css" />
        <!--<link href="css/calendario.css" rel="stylesheet" type="text/css">
        -->        <link rel="stylesheet" href="css/colorbox.css" />
        <link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
        <!--<link rel="stylesheet" href="css/jquery-ui.css" /> -->

        <link rel="stylesheet" href="css/jquery-ui/jquery-ui-1.9.1.custom.css" />

        <link rel="stylesheet" href="css/inshaka.css" />
        <link rel="stylesheet" href="css/tabs.css" />
        <link href="css/demotable.css" rel="stylesheet" type="text/css" />
        <link href="css/demopage.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr -->
        <script src="<?php echo global_asset('js/modernizr-2.6.1-custom.js') ?>"></script>

        <!-- Plupload CSS -->
        <link rel="stylesheet" href="<?php echo global_asset('plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css') ?>"  />

<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo global_asset('js/jquery.js') ?>"><\/script>')</script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script>window.jQuery.ui || document.write('<script src="<?php echo global_asset('js/jquery.ui.js') ?>"><\/script>')</script>-->

        <script src="<?php echo global_asset('js/jquery.js') ?>"></script>
        <script src="<?php echo global_asset('js/jquery.ui.js') ?>"></script>


        <script type="text/javascript" src="js/banner.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/slides.min.jquery.js"></script>

        <script type="text/javascript" src="js/plugin.scrollbar.js"></script>
        <script src="js/jquery.jscrollpane.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.colorbox.js"></script>
        <script src="js/jquery.dd.js"></script>

        <script src="js/jquery.si.js" type="text/javascript"></script>
        <script type="text/javascript">document.documentElement.className += "js";</script>
        <script type="text/javascript" src="js/jquery.tabs.js"></script>
        <script src="js/jquery.featureCarousel.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/timepicker.js"></script>
        <script src="js/jquery.dataTables.js"></script>

<!--        <script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>-->

        <script src="<?php echo global_asset('plupload/js/plupload.full.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>"></script>

        <!-- Datepicker en espaÃ±ol -->
        <script src="<?php echo global_asset('js/jquery.ui.datepicker-es.js') ?>"></script>
        
       

        <script>
            $(function() {
                $(".tabs").accessibleTabs({
                    tabhead: 'h2',
                    fx: "fadeIn"
                });
                $('#slides').slides({
                    preload: true,
                    preloadImage: 'images/loading.gif',
                    play: 5000,
                    pause: 4000,
                    hoverPause: true
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#basic_example_1').datetimepicker();

                $('#scroll1').jScrollPane({
                    autoReinitialise: true
                });

                $(function() {
                    $('#scroll2').jScrollPane();
                });
                $(function() {
                    $('#scroll3').jScrollPane();
                });
                $('#scroll4').jScrollPane({

                    autoReinitialise: true
                });
                $(function() {
                    $('#scroll9').jScrollPane();
                });

                $('input').attr('checked', false);



                $(".comboBox1").msDropDown().data("dd");

                $('.date-picker').datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1900:2012",
                    showAnim: "drop",
                    showOn: "button",
                    buttonImage: <?php echo json_encode(front_asset("imagenes/picker-date.jpg")) ?>,
                    buttonImageOnly: true,
                    showOtherMonths: true,
                    selectOtherMonths: true
                });

            });
        </script>

        <script>var globals = <?php echo json_encode(array('site_url' => site_url(), 'current_profile' => !empty($urls->current_profile) ? $urls->current_profile : null)) ?>;</script>

    </head>

    <body>
        <?php echo $template['partials']['header'], $template['partials']['banner'], $template['partials']['header-perfil'] ?>

        <div role="main">
            <?php echo $template['body'] ?>
        </div>

        <div class="clr"></div>
        <?php echo $template['partials']['footer'] ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=420842527964948";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


        <script defer src="<?php echo global_asset('js/jquery.bbq.js') ?>"></script>

        <script>
        (function($) {
            $('.tabs-ui').tabs();

            /* GalerÃ­a de imagenes en dialogo con FancyBox */
            var fancy_gallery = $("a[rel=fancy-gallery]");

            fancy_gallery.fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                overlayShow: true,
                cyclic: true
            });

            $("a[rel=fancy-gallery-iframe]").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                type: 'iframe'
            });

            /* Cerrar alertas */
            $(document).on('click', '.alert .close', function(e){
                $(this).parent().slideUp(function(){
                    return $(this).remove();
                });
                return e.preventDefault();
            });
        })(jQuery);
        </script>
    </body>
</html>