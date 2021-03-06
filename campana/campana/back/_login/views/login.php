<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CMS imaginamos V 1.6</title>

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

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

        <?php echo assets_css(array('login.less', 'keyframes.css')) ?>

        <style type="text/css">
            html {
                background-image: none;
            }
            #versionBar {
                background-color:#212121;
                position:fixed;
                width:100%;
                height:35px;
                bottom:0;
                left:0;
                text-align:center;
                line-height:35px;
            }
            .copyright{
                text-align:center; font-size:10px; color:#CCC;
            }
            .copyright a{
                color:#A31F1A; text-decoration:none
            }
        </style>
    </head>
    <body>
        <a class="hiddenanchor" id="torecovery"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="alertMessage" class="error"></div>
        <div id="successLogin"></div>
        <div class="text_success"><img src="<?php echo cdn_imaginamos('images/loadder/ahorranitoLoader.png') ?>"  alt="CMS imaginamos V 1.0" /><span>imaginamos.com</span></div>

        <div id="login" class="box-form">
            <div class="ribbon"></div>
            <div class="inner">
                <div  class="logo" ><img src="<?php echo cdn_imaginamos('images/logo/logo_login.png') ?>" alt="CMS imaginamos V 1.0" /></div>
                <div class="userbox"></div>
                <div class="formLogin wrapper-inner">

                    <form class="animate" name="login" action="<?php echo cms_url('login/ingreso') ?>" method="post">
                        <div class="tip">
                            <input name="email" type="email" id="username_id"  title="email" autofocus required>
                        </div>
                        <div class="tip">
                            <input name="password" type="password" id="password"  title="Clave" required>
                        </div>

                        <div style="padding:20px 0px 0px 0px ;">
                            <div style="float:left; padding:0px 0px 2px 0px ;">

                                <span class="f_help"></span>
                            </div>
                            <div style="padding:2px 0px ;">
                                <div>
                                    <ul class="uibutton-group">
                                        <li><button class="uibutton normal" type="submit">Ingresar</button></li>
                                        <li><a class="uibutton  normal" href="#torecovery">Recuperar clave</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </form>

                    <?php echo form_open('cms/login/recovery_password', 'name="recovery"') ?>

                    <div class="tip">
                        <label for="email_recovery"><small>Ingrese su email y restauraremos su clave de acceso</small></label><br><br>
                        <input name="email_recovery" type="email"  id="email_recovery" title="email" style="width:200px;" required="required" />
                    </div>

                    <div style="padding:20px 0px 0px 0px;">
                        <div style="float:left; padding:0px 0px 2px 0px ;">
                            <span class="f_help"></span>
                        </div>
                        <div style="padding:2px 0px;">
                            <div>
                                <ul class="uibutton-group">
                                    <li><button class="uibutton normal" type="submit">Recuperar</button></li>
                                    <li><a class="uibutton special" href="#tologin">Volver</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php echo form_close() ?>

                </div>
            </div>
            <div class="clear"></div>
            <div class="shadow"></div>
        </div>



        <!--Login div-->
        <div class="clear"></div>
        <div id="versionBar" >
            <div class="copyright" > &copy; Copyright 2013 | <span class="tip"><a  href="#">CMS imaginamos</a> </span> </div>
            <!-- // copyright-->
        </div>
        <!-- Link JScript-->

        <!-- Carga de los Assets CDN jQuery y jQuery UI con sus respectivos fallback -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo global_asset('js/jquery.js') ?>"><\/script>')</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="<?php echo global_asset('js/jquery.ui.js') ?>"><\/script>')</script>



        <script type="text/javascript" src="<?php echo cdn_imaginamos('components/effect/jquery-jrumble.js') ?>"></script>
        <script type="text/javascript" src="<?php echo cdn_imaginamos('components/tipsy/jquery.tipsy.js') ?>"></script>
        <script type="text/javascript" src="<?php echo cdn_imaginamos('components/checkboxes/iphone.check.js') ?>"></script>
        <script type="text/javascript" src="<?php echo back_asset('scripts/login.min.js') ?>"></script>
    </body>
</html>