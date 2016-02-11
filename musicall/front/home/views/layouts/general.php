<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-42381541-1', 'musicall.co');
  ga('send', 'pageview');
 
</script>   
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" class="ie9"> <!--<![endif]-->
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $template['title']; ?></title>

        <meta property="og:site_name" content="<?php echo SITENAME ?>"/>
        <meta property="og:title" content="<?php echo $template['title']; ?>"/>
        <meta property="og:url" content="<?php echo current_url() ?>"/>

        <link rel="caninocal" href="<?php echo current_url() ?>" />

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo front_asset('img/favicon.ico') ?>" />
        <meta name="keywords" lang="es" content="" />
        <meta name="description" lang="es" content="" />
        <meta name="date" content="2012" />
        <meta name="author" content="Diseño web: imaginamos.com" />
        <meta name="robots" content="All" />

        <link href="css/all.css" rel="stylesheet" />
        <link href="css/reset.css" rel="stylesheet"  />
        <link href="css/style_slider.css" rel="stylesheet" />
        <link href="css/jquery.selectbox.css" type="text/css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="<?php echo front_asset('vendors/jquery.ui/css/musicall/jquery.ui.min.css') ?>" media="all" />

        <!-- Modernizr -->
        <script src="<?php echo global_asset('js/modernizr.2.6.js') ?>"></script>

        <script>var globals = <?= json_encode(array('site_url' => site_url())) ?>;</script>

        <!-- Bug: placeholder white -->
        <style>
            ::-webkit-input-placeholder {
                color: white;
            }

            :-moz-placeholder {  
                color: white;  
            } 
            .placeholder{ 
                color: white; 
            }
            .placeholder_dark ::-webkit-input-placeholder {
                color: #001320;
            }

            .placeholder_dark :-moz-placeholder {  
                color: #001320;  
            } 
            .placeholder_dark .placeholder{ 
                color: #001320; 
            }
        </style>
    </head>

    <body>

        <?php echo $template['body'], $template['partials']['quieres'], $template['partials']['tienes'], $template['partials']['footer'] ?>

        <div id="dialog-test" style="display: none;">
            <p>Hola mundo!</p>
        </div>

        <!-- Carga CDN con fallback jQuery & jQuery UI -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo global_asset('js/jquery.js') ?>"><\/script>')</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="<?php echo global_asset('js/jquery.ui.js') ?>"><\/script>')</script>

        <script src="<?php echo global_asset('js/jquery.livequery.js') ?>" ></script>
        <script src="js/jquery.sudoSlider.js" ></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.jscrollpane.min.js" ></script>
        <script src="js/jquery.selectbox-0.1.3.js"></script>
        <script src="js/test.js"></script>
		<script src="js/prueba.js"></script>
        <script src="js/easing.js" ></script>
        <script src="js/functions.js" ></script>
        <script src="js/outside_events.js"></script>

        <!-- Noty -->
        <script defer src="<?php echo front_asset('vendors/noty/jquery.noty.js') ?>"></script>
        <script defer src="<?php echo front_asset('vendors/noty/layouts/top.js') ?>"></script>

        <script defer src="<?php echo front_asset('vendors/noty/themes/default.js') ?>"></script>

        <script>
            (function($) {
                /* function to display file name when selected */
                $.fn.fileName = function() {
                    var $this = $(this),
                    $val = $this.val(),
                    valArray = $val.split('\\'),
                    newVal = valArray[valArray.length - 1],
                    $button = $this.siblings('.button');
                    if (newVal !== '') {
                        $button.text(newVal);
                    }
                };

                $().ready(function() {
                    /* on change, focus or click call function fileName */
                    $('input[type=file]').bind('change focus click', function() {
                        $(this).fileName()
                    });
                });



            })(jQuery);
        </script>

        <!-- jQuery HTML5 SUPPORT -->
        <script defer src="<?php echo global_asset('js/jquery.html5support.min.js') ?>"></script>
        <script defer src="<?php echo front_asset('js/musicall.js?' . time()) ?>"></script>

        <?php if ($this->input->get('uploaded_song') && $this->session->flashdata('message_upload')): ?>
            <script>
                $(function() {
                    noty({
                        text: <?= json_encode($this->session->flashdata('message_upload')) ?>,
                        type: <?= json_encode($this->session->flashdata('message_upload_type')) ?>,
                        timeout: 3000
                    });
                });
            </script>
        <?php endif; ?>

        <?php if ($this->input->get('edit_info') && $this->session->flashdata('message_edit')): ?>
            <script>
                $(function() {
                    noty({
                        text: <?= json_encode($this->session->flashdata('message_edit')) ?>,
                        type: <?= json_encode($this->session->flashdata('message_edit_type')) ?>,
                        timeout: 3000
                    });
                });
            </script>
        <?php endif; ?>

        <?php if ($this->input->get('content')): ?>
            <script defer>
                $(function() {
                    MusicAll.checkLogged('loadprofile', <?= json_encode($this->input->get('content')) ?>);
                });
            </script>
        <?php endif; ?>


        <script type="text/javascript">
            
            $(document).on('click', '.checkboxes-valid .checkbox', function(){
                var total = ($(this).parents('.checkboxes-valid').find('[type="checkbox"]:checked').length),
                    validate = total <= 3;
                
				 $("#todosUsosQ").click(function() {  
					alert("chequeado!!!");  
				}); 
				
				/*
				//if($(this).parents('.checkboxes-valid').find('[type="checkbox"]:checked').eq(0)){
				if($(this).parents('.checkboxes-valid').('input[type="checkbox"]:checked').get(0)){
				
					alert("chequeado!!!"); 
				}
				*/
				
                
                if(!validate){
                    $(this).css('background-position', '0 0').next().removeAttr('checked');
                    alert('Solo puedes escoger 3 opciones');
                }
                
                
                return validate;
                
            });
           
        </script>

    </body>
</html>