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
label {
	display: block
}
label strong {
	color: red
}
textarea {
	width: 740px;
	height: 100px;
	resize: none;
	text-align: left
}
#errorDiv {
	color: red;
	font-weight: bold
}
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
          <div id="account_info"> <?php echo $administrator; ?> </div>
        </div>
<!-- End Header -->
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
                      <form enctype="multipart/form-data" action="<?php echo base_url(); ?>areas/updates" method="POST" onsubmit="return validate();" >
                <label>Titulo<strong> *</strong></label>
                <input type="text" name="service_title" value="<?php echo $data->service_title; ?>" id="service_title" class="large" />
                <br>
                <br>
                <label>Subtitulo<strong></strong></label>
                <input type="text" name="service_subtitle" value="<?php echo $data->service_subtitle; ?>" id="service_subtitle" class="large" />
                <br>
                <br>
                <img src="<?php echo base_url().'assets/area_img/'.$data->service_image; ?>" width="150" /> <br>
                <br>
                <label>Imagen<strong> (658 x 358px) </strong></label>
                <input class="file fileupload2" placeholder="Seleccionar archivo" style="display: inline; color: rgb(102, 102, 102); font-size: 11px; width: 142px;">
                <div class="filebtn" style="width: 190px; height: 30px; background-image: url(<?php echo base_url(); ?>/alcance/edit/images/addFiles.png); display: inline; position: absolute; margin-left: -168px; background-position: 100% 50%; background-repeat: no-repeat no-repeat;">
                	<input type="file" name="userfile" value="" title="Imagenes permitidas jpg|jpeg|png|gif" class="fileupload2" style="position: absolute; height: 30px; width: 170px; margin-left: 5px; display: inline; cursor: pointer; opacity: 0;">
                </div>
                <br>
                <br>
                <label>Texo<strong> *</strong></label>
                <textarea name="service_text" id="service_text" ><?php echo $data->service_text; ?></textarea>
                <br>
                <br>
                <input type="hidden" name="service_area_id" value="<?php echo $data->service_area_id; ?>" />
                <input type="hidden" name="service_id" value="<?php echo $data->service_id; ?>" />
                <input type="hidden" name="service_image" value="<?php echo $data->service_image; ?>" />
                <input type="submit" class="uibutton" value="Actualizar" name="send" />
              </form>
                    </fieldset>
          </div>
                </div>
      </div>
            </div>
    <!-- End content --> 
  </div>
          <!-- End full width --> 
          
          <!-- clear fix -->
          <div class="clear"></div>
          <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>
        </div>
<!--// End inner -->
</div>
<!--// End content -->
</body>
        <script>
    jQuery(document).ready(function(){
        jQuery("textarea").cleditor();
        <?php if($this->uri->segment(3) == 'img2'): ?>
                showError('No se pudo subir la imagen',3000);
        <?php endif; ?>        
    });
    function validate(){
            if(jQuery('#service_title').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
//            if(jQuery('#service_subtitle').val() == ""){
//                showError('Recuerde llenar los campos marcados con *',3000);
//                return false;
//            }
//            if(jQuery('#img').val() == ""){
//                showError('Recuerde llenar los campos marcados con *',3000);
//                return false;
//            }
            if(jQuery('#service_text').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
        return true;
    }
</script>
</html>