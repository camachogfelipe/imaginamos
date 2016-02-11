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
                                    <legend>Editar</legend>
                                    <form enctype="multipart/form-data" action="<?php echo base_url(); ?>tech/update" method="POST" onsubmit="return validate();" >
                                        <img src="<?php echo base_url().'assets/tech_img/'.$data->image; ?>" width="150" />
                                        <br><br>
                                        <label>Imagen<strong> (437 x 334px) </strong></label>
                                        <input type="file" name="userfile" id="userfile1" class="fileupload" />
                                        <br><br>
                                        <input type="text" name="titulo" value="<?= $data->titulo; ?>" />
                                        <br><br>
                                        <textarea  name="text"><?php echo $data->text; ?></textarea>
                                        <br><br>
                                        <input type="hidden" name="oldImage" value="<?php echo $data->image; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $data->id; ?>" />
                                        <input type="submit" class="uibutton" value="Actualizar" name="send" />
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
<script>
    jQuery(document).ready(function(){
        jQuery("textarea").cleditor();
<?php if ($this->uri->segment(3) == 'ok'): ?>
            showSuccess('Proceso exitoso',3000)   
<?php endif; ?>
        
<?php if ($this->uri->segment(3) == 'fail'): ?>
            showError('Los textos no deben contener mas de 400 caracteres',3000)
<?php endif; ?>
    });
    function validate(){
//            if(jQuery('#userfile').val() == ""){
//                showError('Por favor seleccione una imagen.',3000);
//                return false;
//            }
            if(jQuery('#userfile2').val() == ""){
                showError('Por favor seleccione un archivo',3000);
                return false;
            }
            if(jQuery('#text').val() == ""){
                showError('Por favor escriba un texto',3000);
                return false;
            }
        return true;
    }
</script>
</html>
</html>