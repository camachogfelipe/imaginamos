<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS imaginamos V 1.0</title>

        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="imaginamos.com | Brayan Acebo">
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url() ?>assets/images/ico-imaginamos.gif"/>

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
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
        <div id="alertMessage" class="error"></div>
        <div id="successLogin"></div>
        <div class="text_success"><span><small><a href="index.php">Haga clic acá para ir al inicio y usar su nueva clave</a></small></span></div>

        <div id="login" >
            <div class="ribbon"></div>
            <div class="inner">
                <div  class="logo" ><img src="http://cms.imaginamos.com/images/logo/logo_login.png" alt="CMS imaginamos V 1.0" /></div>
                <div class="userbox"></div>
                <div class="formLogin">
                    <form name="formLogin"  id="formLogin" action="<?php echo base_url() ?>cms/recovery_" method="POST">

                        <div class="tip">
                            <small>Ingrese su email y restauraremos su clave de acceso</small><br><br>
                            <input name="emailRecovery" type="text"  id="emailRecovery"  title="email" />
                        </div>

                        <div style="padding:20px 0px 0px 0px ;">
                            <div style="float:left; padding:0px 0px 2px 0px ;">

                                <span class="f_help"></span>
                            </div>
                            <div style="float:center;padding:2px 0px ;">
                                <div> 
                                    <ul class="uibutton-group">
                                        
                                        <li><?php echo form_submit("Recuperar", "Recuperar", 'class="uibutton normal" id="but_forgot"') ?></li>
                                        <li><?php echo anchor("cms", "Volver", 'class="uibutton special"') ?></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="clear"></div>
            <div class="shadow"></div>
        </div>

        <!--Login div-->
        <div class="clear"></div>
        <div id="versionBar" >
            <div class="copyright" > &copy; Copyright 2012 | <span class="tip"><a  href="#">CMS imaginamos</a> </span> </div>
            <!-- // copyright-->
        </div>
        <!-- Link JScript-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://cms.imaginamos.com/components/effect/jquery-jrumble.js"></script>
        <script type="text/javascript" src="http://cms.imaginamos.com/components/ui/jquery.ui.min.js"></script>     
        <script type="text/javascript" src="http://cms.imaginamos.com/components/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="http://cms.imaginamos.com/components/checkboxes/iphone.check.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>application/modules/cms/assets/js/login.js"></script>
    </body>
    <?php echo $functions ?>
</html>