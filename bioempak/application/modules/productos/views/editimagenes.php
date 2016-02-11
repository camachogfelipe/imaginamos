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
label
{
	display: block
}
label strong
{
	color: red
}
textarea
{
	width: 740px;
	height: 100px;
	resize: none;
	text-align: left
}
#errorDiv
{
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
              <legend>Nueva imagen</legend>
              <?php echo form_open_multipart('productos/update_imagenes/', 'id="form"') ?>
                <div>
                    <div><p><label>Imagen</label><p/>
                        <div>
                            <img class="cuadro_edicion_fotos"  src="<?php echo base_url()."assets/prod_img/".$data['imagenes']->url; ?>" width="215">
                            <br />
                            <input type="file" name="userfile" id="fileUpload1" size="100" class="fileupload" />    
                            <input type="hidden" name="imagenold" id="imagenold"  value="<?php echo $data['imagenes']->url?>" />
                            <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>" />
                            <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $data['id_producto'] ?>" />
                        </div>
                    </div>
                </div>
                <div style="width: 100px;height: 30px;position: relative;top: 30px">
                    <input onclick="validar();" type="submit" value="Guardar" class="uibutton confirm" />
                    
                </div>
                <?php echo form_close() ?>
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
function validar(){
	if(jQuery('#fileUpload1').val() == ""){
		showError('Recuerde llenar los campos marcados con *',3000);
		return false;
	}
	return true;
}
</script>
</html>