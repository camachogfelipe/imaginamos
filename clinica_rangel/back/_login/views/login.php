<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <link rel="icon" type="image/gif" href="<?php echo back_asset('beoro/img/ico-imaginamos.gif') ?>">
        <title>Imaginamos CMS 1.7</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' />
        <link rel="stylesheet" href="<?php echo back_asset('beoro/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/css/login.css') ?>">
        <link rel="stylesheet" href="<?php echo back_asset('beoro/js/lib/sticky/sticky.css') ?>">
        <?php if (!empty($public_assets['css'])) :foreach ($public_assets['css'] as $css) : ?>
                <link href="<?php echo $css ?>" rel="stylesheet" />
                <?php
            endforeach;
        endif;
        ?>
        <style tyle="text/css">
            .disabled{
                color: #fff !important;
            }
        </style>
    </head>
    <body>
        <div id="login-wrapper" class="clearfix">
            <div class="main-col">
                <img src="<?php echo back_asset('beoro/img/login_ahorranito.png') ?>" alt="" class="logo_img" />
                <div class="panel">
                    <p class="heading_main"><?php echo "Bienvenidos a ". SITENAME; ?></p>
                    <form id="login-validate" data-form="ajax" action="<?php echo cms_url('login/ingreso') ?>" method="post">
                        <label for="login_name">Email</label>
                        <input type="text" id="login_name" name="email" value="" />
                        <label for="login_password">Password</label>
                        <input type="password" id="login_password" name="password" value="" />
                        <div class="submit_sect">
                            <button id="login_button" type="submit" data-loading-text="Validando credenciales" class="btn btn-beoro-3">Login</button>
                        </div>
                    </form>
                </div>
                <div class="panel" style="display:none">
                    <p class="heading_main">Recuperar contraseña</p>
                    <form id="forgot-validate" data-form="ajax" action="<?php echo site_url('cms/login/recovery_password') ?>" method="post">
                        <label for="email_recovery">Ingrese su email y restauraremos su clave de acceso</label>
                        <input type="text" id="forgot_email" name="email_recovery" />
                        <div class="submit_sect">
                            <button type="submit" data-loading-text="Verificando..." class="btn btn-beoro-3">Recuperar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login_links">
                <a href="javascript:void(0)" id="pass_login"><span>Olvidó su contraseña?</span><span style="display:none">Ingresar</span></a>
            </div>
        </div>
        <!-- Objeto Global -->
        <script>
            var CMS = {};
            CMS.globals = {'base_url': '<?php echo base_url() ?>', 'site_url': '<?php echo site_url(); ?>'}
        </script>
        <!-- Carga de los Assets CDN jQuery y jQuery UI con sus respectivos fallback -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo back_asset('beoro/js/jquery.min.js') ?>"><\/script>')</script>
        <script src="<?php echo back_asset('beoro/js/lib/jquery-validation/jquery.validate.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/sticky/sticky.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/lib/bootbox/bootbox.min.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/common.js') ?>"></script>
        <script src="<?php echo back_asset('beoro/js/run_api.js') ?>"></script>
        <script type="text/javascript">
            (function(a){a.fn.vAlign=function(){return this.each(function(){var b=a(this).height(),c=a(this).outerHeight(),b=(b+(c-b))/2;a(this).css("margin-top","-"+b+"px");a(this).css("top","50%");a(this).css("position","absolute")})}})(jQuery);(function(a){a.fn.hAlign=function(){return this.each(function(){var b=a(this).width(),c=a(this).outerWidth(),b=(b+(c-b))/2;a(this).css("margin-left","-"+b+"px");a(this).css("left","50%");a(this).css("position","absolute")})}})(jQuery);
            $(document).ready(function() {
                if($('#login-wrapper').length) {
                    $("#login-wrapper").vAlign().hAlign()
                };
                if($('#login-validate').length) {
                    $('#login-validate').validate({
                        onkeyup: false,
                        errorClass: 'error',
                        rules: {
                            login_name: { required: true },
                            login_password: { required: true }
                        }
                    })
                }
                if($('#forgot-validate').length) {
                    $('#forgot-validate').validate({
                        onkeyup: false,
                        errorClass: 'error',
                        rules: {
                            forgot_email: { required: true, email: true }
                        }
                    })
                }
                $('#pass_login').click(function() {
                    $('.panel:visible').slideUp('200',function() {
                        $('.panel').not($(this)).slideDown('200');
                    });
                    $(this).children('span').toggle();
                });
            });
        </script>
        <?php if (!empty($public_assets['js'])) : ?>
            <?php foreach ($public_assets['js'] as $js) : ?>
                <script src="<?php echo $js ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (isset($alert_messages)) echo $alert_messages ?>
    </body>
</html>