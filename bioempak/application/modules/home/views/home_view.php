<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS imaginamos V 1.0</title>

        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="Imaginamos.com">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>
        <style>
            label{display: block}
            label strong{color:red}
            textarea{width: 740px; height: 100px; resize: none; text-align: left}
            #errorDiv{color: red;font-weight: bold}
        </style>
        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->  



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
                    <!-- End header -->
                    <div class="content">


                        <div class="formEl_b">
                            <div>
                                <fieldset>
                                    <legend>Datos generales</legend>
                                    <form enctype="multipart/form-data" action="<?php echo base_url(); ?>home/edit" method="POST" onsubmit="return validate();" >
                                        <img src="<?php echo base_url(); ?>assets/home/1.png" width="200" />
                                        <br><br>
                                        <label>Imagen<strong> (548 x 592px) *</strong></label>
                                        <input type="file" name="userfile" id="userfile1" class="fileupload" />
                                        <input type="hidden" name="oldImage" value="<?php echo $data->image; ?>" />
                                        <br><br>
                                        <label>Direccion<strong> *</strong></label>
                                        <input type="text" class="large" name="address" id="address" value="<?php echo $data->address; ?>" />
                                        <br><br>
                                        <label>Telefono<strong> *</strong></label>
                                        <input type="text" class="large" name="phone1" id="phone1" value="<?php echo $data->phone; ?>" />
                                        <br><br>
                                        <label>Email<strong> *</strong></label>
                                        <input type="text" class="large" name="email" id="email" value="<?php echo $data->email; ?>" />
                                        <br><br>
                                        <label>Telefono 2<strong> *</strong></label>
                                        <input type="text" class="large" name="phone2" id="phone2" value="<?php echo $data->phone2; ?>" />
                                        <br><br>
                                        <label>Telefono 3<strong> *</strong></label>
                                        <input type="text" class="large" name="phone3" id="phone3" value="<?php echo $data->phone3; ?>" />
                                        <br><br>
                                        <input type="submit" class="uibutton" value="Actualizar" name="send" />
                                    </form>
                                </fieldset>
                                <br><br>
                                
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
<script>
    jQuery(document).ready(function(){
        jQuery("#text1,#text2,#text3").cleditor(); 
    });
    function validate(id){
        if(id == 1){
            if(jQuery('#title1').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
            if(jQuery('#subtitle1').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
            if(jQuery('#userfile1').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
            if(jQuery('#text1').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
        }
        return true;
    }
</script>
</html>