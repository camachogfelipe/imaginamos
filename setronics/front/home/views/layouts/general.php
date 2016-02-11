<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $template['title']; ?></title>

        <meta property="og:site_name" content="<?php echo SITENAME ?>"/>
        <meta property="og:title" content="<?php echo $template['title']; ?>"/>
        <meta property="og:url" content="<?php echo current_url() ?>"/>

        <link rel="caninocal" href="<?php echo current_url() ?>" />

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
        
        <link rel="stylesheet" href="<?php echo global_asset('css/setronics.css') ?>"  />


        <!--[if IE 8]>
        
        <![endif]-->

        <!--[if IE 9]>
        
        <![endif]-->

        <!-- Plupload CSS -->
        <link rel="stylesheet" href="<?php echo global_asset('plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css') ?>"  />


        <!-- Variables de URL's globales para Javascript -->
        <script>var globals = <?= json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>

        <!-- Modernizr -->
        <script src="<?php echo global_asset('js/modernizr.2.6.js') ?>"></script>

        <!-- Carga CDN con fallback jQuery & jQuery UI -->
        <script src="<?php echo global_asset('js/lib/jquery.min.js'); ?>"></script>
        <script src="<?php echo global_asset('js/actions.js') ?>"></script>
		<script src="<?php echo global_asset('js/jquery.plugs.min.js') ?>"></script>

        <!-- Plugins de la página -->


        <!-- Scripts para subida de archivos -->
        <script src="<?php echo global_asset('js/browserplus.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/plupload.full.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>"></script>
    </head>
    <body>
        <?php echo $template['partials']['header'], $template['body'], $template['partials']['footer'] ?>
      <?php if (isset($alert_messages)) echo $alert_messages ?>
    </body>
</html>