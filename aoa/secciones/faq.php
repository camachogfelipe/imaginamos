<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>AOA | Se mueve contigo</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/aoa.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php' ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">Preguntas <span>Frecuentes</span></h2>
  </div>
</div>

<div class="content_int content_940 clearfix pager-aoa-faq">
  <ul class="con-pager clearfix">
      <?php 
//      $dbfaq = new Dbfaq();
//      $faq = $dbfaq->getList();
      $faq = DbHandler::GetAll("SELECT * FROM faq ORDER BY id DESC");
      $contador = count($faq);
      for($i=0; $i<$contador; $i++):
      ?>
<li>
      <div class="item_acord">
        <div class="btn_acord">
            <h3><?php echo $faq[$i]['pregunta']; ?></h3>
          <div class="indic_btn_acord item_cerrado"></div>
        </div>
        <div class="content_acord">
          <div class="clearfix">
            <p><?php echo $faq[$i]['respuesta']; ?></p>
          </div>
        </div>
      </div>
    </li>
      <?php
      endfor;
      ?>
    
  </ul>
  <div class="pager-nav"></div>
</div> 

<?php include'footer.php' ?>



<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/jquery.pajinate.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(){
  $('input[placeholder]').placeholder();
});
</script>

</body>
</html>
