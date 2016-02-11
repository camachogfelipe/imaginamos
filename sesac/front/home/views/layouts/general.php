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

        <!--[if IE 8]>
        
        <![endif]-->

        <!--[if IE 9]>
        
        <![endif]-->

        <!-- Plupload CSS -->
        <link rel="stylesheet" type="text/css" href="<?= front_asset("css/sesac.css") ?>" />
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
        <div id="preload"></div>
        <div class="con-bw">
            <div class="info-bw">
                <div class="head-bw cfx">
                    <div class="logo-bw">
                        <img src="<?= front_asset("img/logo-bw.png")?>" width="200" height="100" alt="">
                    </div>
                    <div class="tx-bw">
                        <h1>Oops!... Lo sentimos, este sitio se ha desarrollado para navegadores modernos para que tu experiencia sea la mejor.</h1><h1>Para que lo puedas visualizar es necesario actualizar tu navegador o simplemente descargar e instalar uno mejor.</h1>
                    </div>
                </div>
                <div class="con-icon-bw">
                    <a href="https://www.google.com/intl/es/chrome/browser/?hl=es" target="_blank" class="over-bw">
                        <div class="icon-bw">
                            <img src="<?= front_asset("img/browser/b-1.png") ?>" width="160" height="160" alt="">
                        </div>
                        <h1>Chrome</h1>
                    </a>
                </div>
                <div class="con-icon-bw">
                    <a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank" class="over-bw">
                        <div class="icon-bw">
                            <img src="<?= front_asset("img/browser/b-2.png") ?>" width="160" height="160" alt="">
                        </div>
                        <h1>Firefox</h1>
                    </a>
                </div>
                <div class="con-icon-bw"><a href="http://support.apple.com/kb/DL1531?viewlocale=es_ES" target="_blank" class="over-bw">
                        <div class="icon-bw">
                            <img src="<?= front_asset("img/browser/b-3.png") ?>" width="160" height="160" alt="">
                        </div>
                        <h1>Safari</h1>
                    </a>
                </div>
                <div class="con-icon-bw">
                    <a href="http://www.opera.com/es-419/computer/" target="_blank" class="over-bw">
                        <div class="icon-bw">
                            <img src="<?= front_asset("img/browser/b-4.png") ?>" width="160" height="160" alt="">
                        </div>
                        <h1>Opera</h1>
                    </a>
                </div>
                <div class="con-icon-bw">
                    <a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie" target="_blank" class="over-bw">
                        <div class="icon-bw">
                            <img src="<?= front_asset("img/browser/b-5.png") ?>" width="160" height="160" alt="">
                        </div>
                        <h1>Explorer</h1>
                    </a>
                </div>
                <div class="con-bt-bw cfx">
                    <a class="over-bt-bw">
                        <div class="bt-bw">Deseo seguir usando este navegador... >></div>
                    </a>
                </div>
            </div>
        </div>
        <?php if($this->router->class == "home") :?>
            <style type="text/css">.con-header {display:none;}</style>
        <?php endif; ?>
        <?php if($this->router->class == "zona_segura") :?>
            <style type="text/css">.nav-login .login-bt {display:none;} .grl-form {background:none; padding:0;} .grl-form .form-col {margin: 0 0 0 15px; width:auto;} .grl-form .form-col .con-campo input {margin: 0 0 0 15px;}</style>
        <?php endif; ?>
        <?php echo $template['partials']['header'], $template['body'], $template['partials']['footer'] ?>
    </body>
</html>