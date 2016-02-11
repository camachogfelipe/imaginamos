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

        	
		<link rel="icon" href="favicon.ico" type="image/x-icon">	
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<meta name="viewport" content="width=1124, maximum-scale=2">

		<!-- HOJA DE ESTILOS GENERAL -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
                <link href="<?php echo base_url(); ?>assets/css/s_form.css" rel="stylesheet" type="text/css" />
		<!---->

		<!-- SELECT Y MULTISELECT -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/lib/select2/select2.css">
		<!---->

		<!-- MULTIUPLOAD -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/lib/plupload/js/jquery.plupload.queue/css/plupload-beoro.css">
		<!---->

		<!-- DATEPICKER -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/lib/bootstrap-datepicker/css/datepicker.css">
		<!---->

		<!-- UI Spinners -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/lib/jqamp-ui-spinner/css/jqamp-ui-spinner.css">
		<!---->      

		<!-- CHECK / RADIO STYLE -->
		<link href="<?php echo base_url(); ?>assets/js/ezmark/css/ezmark.css" rel="stylesheet" /> 
		<!---->      

		<style>
			.contenedor-big{
				max-width:960px;
				margin:0 auto;	
				font-family:Arial, Helvetica, sans-serif;
				width:100%;
				display:none;
			}
			.contenedor-medium{
				max-width:768px;
				margin:0 auto;
				font-family:Arial, Helvetica, sans-serif;
				width:100%;
			}
			.contenedor-small{
				max-width:500px;
				margin:0 auto;	
				font-family:Arial, Helvetica, sans-serif;
				width:100%;
				display:none;
			}
			.contenedor{
				margin-bottom:50px;	
			}
		</style>

        <!-- Plupload CSS -->
        <link rel="stylesheet" href="<?php echo global_asset('plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css') ?>"  />


        <!-- Variables de URL's globales para Javascript -->
        <script>var globals = <?= json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>

        <!-- Modernizr -->
        <script src="<?php echo global_asset('js/modernizr.2.6.js') ?>"></script>

        <!-- Carga CDN con fallback jQuery & jQuery UI -->
        <script src="<?php echo global_asset('js/jquery.js') ?>"></script>
        <script src="<?php echo global_asset('js/jquery.ui.js') ?>"></script>


        <!-- Plugins de la página -->


        <!-- Scripts para subida de archivos -->
        <script src="<?php echo global_asset('js/browserplus.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/plupload.full.js') ?>"></script>
        <script src="<?php echo global_asset('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>"></script>
    </head>
    <body>
        <?php echo $template['partials']['header'], $template['body'], $template['partials']['footer'] ?>
        
        <!-- JQUERY LIBRARY -->
		<script type="text/javascript" src="assets/js/lib/jquery-1.8.3.js"></script>
		<!---->

		<!-- FORM SLIDING -->
		<script src="<?php echo base_url(); ?>jquery.easing.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>form.js" type="text/javascript"></script>
		<!---->

		<!-- SELECT Y MULTISELECT -->
		<script src="<?php echo base_url(); ?>assets/js/lib/select2/select2.min.js"></script>
		<!---->

		<!-- UPLOAD -->
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-fileupload.js"></script>
		<!---->

		<!-- MULTIUPLOAD -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/plupload/js/plupload.full.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/plupload/js/i18n/es.js"></script>
		<!---->

		<!-- DATEPICKER -->
		<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<!---->

		<!-- CHECK / RADIO STYLE -->
		<script type="text/javascript" language="Javascript" src="<?php echo base_url(); ?>assets/js/ezmark/js/jquery.ezmark.js"></script>
		<!---->
		 
		<!-- PLACEHOLDER EXPLORE -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
		<!---->
		 
		 <!-- LLAMADOS PLUGINS -->
		<script src="<?php echo base_url(); ?>assets/js/s_form-general.js"></script>
        
    </body>
</html>