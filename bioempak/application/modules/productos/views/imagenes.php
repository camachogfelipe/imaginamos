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
              <legend>Listado de imagenes</legend>
              <div class="tableName toolbar">
              	<a class="uibutton icon special answer" href="<?php echo base_url().'productos'; ?>">Volver</a>
                <a class="uibutton icon answer" href="<?php echo base_url().'productos/addimagenes/'.$data['id']; ?>">Nueva</a>
                <table class="display data_table2" >
                  <thead>
                    <tr>
                      <th><div class="th_wrapp">No</div></th>
                      <th><div class="th_wrapp">Imagen</div></th>
                      <th><div class="th_wrapp">Accion</div></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($data['imagenes'] as $imagen): ?>
                    <tr class="odd gradeX">
                      <td class="center" width="30"><?php echo $i; $i++; ?></td>
                      <td class="center" width="70px">
                      	<img src="<?php echo base_url()."assets/prod_img/".$imagen->url; ?>" width="215" />
                      </td>
                      <td class="center" width="200px">
                      	<a class="uibutton" href="<?php echo base_url().'productos/editimagenes/'.$data['id'].'/'.$imagen->id; ?>">Editar</a>
                        <a class="uibutton special eliminar" href="<?php echo base_url().'productos/delimagenes/'.$data['id'].'/'.$imagen->id; ?>">Eliminar</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
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
	jQuery(".eliminar").click(function(){
		if(confirm("¿Seguro desea eliminar este producto?") == true) return true;
		else return false;
	});
});
function validate(){
	if(jQuery('#userfile1').val() == ""){
		showError('Recuerde llenar los campos marcados con *',3000);
		return false;
	}
	if(jQuery('#userfile2').val() == ""){
		showError('Recuerde llenar los campos marcados con *',3000);
		return false;
	}
	return true;
}
</script>
</html>