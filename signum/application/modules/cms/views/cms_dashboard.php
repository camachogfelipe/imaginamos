<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS imaginamos V 1.0</title>

        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="imaginamos.com | Brayan Acebo">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url() ?>assets/images/ico-imaginamos.gif"/>

        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->  

        <link href="../assets/css/cms_styles.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="dashborad">
        <div id="alertMessage" class="error"></div>
        <!-- Header -->
        <div id="header">
            <div id="account_info">
                <?php echo $administrator; ?>
            </div>
        </div><!-- End Header -->
        <div id="shadowhead"></div>

        <div id="left_menu">
            <ul id="main_menu" class="main_menu">
                <?php echo $index; ?>

            </ul>
        </div>

        <div id="content">
            <div class="inner">
                <div style="width: auto;height: 30px"></div>  

                <!-- full width -->
                <div class="widget">
                    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos</span>
                    </div><!-- End header -->
                    <div class="content">


                        <div class="formEl_b">

                            <div>
                                <fieldset>
                                    

                                    <form action="<?php echo base_url(); ?>cms/chagePass" method="post">
                                        <label>Clave actual<strong style="color:red"> *</strong></label>
                                        <input type="text" class="medium" name="oldpass" />
                                        <br/><br/>

                                        <label>Nueva clave<strong style="color:red"> *</strong></label>
                                        <input type="text" class="medium" name="newpass" />
                                        <br/><br/>
                                        <input type="submit" value="Actualizar" class="uibutton" />
                                    </form>
                                </fieldset>
                            </div>

                        </div>
                    </div>	

                </div><!-- End content -->
            </div><!-- End full width -->



            <!-- clear fix -->
            <div class="clear"></div>

            <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

        </div> <!--// End inner -->
    </div> <!--// End content -->



</body>
<?php echo $functions ?>
</html>