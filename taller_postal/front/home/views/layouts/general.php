
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1260, maximum-scale=2" />
<title><?php echo SITENAME; ?></title>
<link href="<?php echo base_url(); ?>favicon.ico" rel="shortcut icon" />
<link href="<?php echo base_url(); ?>assets/css/taller.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/style_slider.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/validationEngine.jquery.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<script>var globals = <?php echo json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>
</head>

<body>
<!--<div id="loader"><div id="progress"></div></div>-->
<!--<div class="fondo_cart"></div>-->
<div class="main_content content_940 clearfix">
<?php echo $template['partials']['header']; ?>
  <div class="content left">
    <?php echo $template['body']; ?>
  </div>
</div>    
<?php echo $template['partials']['footer']; ?>

<script src="<?php echo base_url(); ?>assets/js/jquery.sudoSlider.js"></script>
<script src="<?php echo base_url(); ?>assets/js/placeholder.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom_form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validationEngine.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validationEngine-es.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modal.min.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.number.js"></script>
<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>
