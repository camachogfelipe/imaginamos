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
    <h2 class="left">Servicios <span></span></h2>
  </div>
</div>

<div class="content_940 clearfix pager-aoa-serv">
  <ul class="con-pager clearfix">
      <?php 
//      $dbservicios = new Dbservicios();
//      $serv = $dbservicios->getList();
      $serv = DbHandler::GetAll("SELECT * FROM servicios ORDER BY orden ASC");
      $contador = count($serv);
      ?>
      <?php for($i=0; $i<$contador; $i++): ?>
    <li>
      <div class="item_serv">
        <div class="content_940">
          <div class="title_serv_2">
            <h4><!--Soluciones y servicios para aseguradoras--></h4>
          </div>
          <div class="title_serv">
              <h3><?php echo $serv[$i]['titulo']; ?></h3>
          </div>
          <div class="content_item_serv clearfix">
            <div class="left texto_serv">
              <p><?php echo $serv[$i]['texto']; ?></p>
            </div>
            <div class="gal_serv right">
              <div class="content_img_serv">
              <img src="img/servicios/<?= str_replace("original","redimension",$serv[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="400" height="280" />
              </div>
              <div class="con-slider-logos">
                <ul class="logos_serv clearfix">
                    <?php $logos = DbHandler::GetAll("SELECT * FROM aseguradoras WHERE servicios_id='".$serv[$i]['id']."' ORDER BY orden ASC"); 
                    $countLogos = count($logos);
                    ?>
                   <?php for($j=0; $j<$countLogos; $j++): ?>
                  <li><img src="img/aseguradoras/<?= str_replace("original","redimension",$logos[$j]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="130"></li>
                  <?php endfor; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
   <?php endfor; ?>
  </ul>
  <div class="pager-nav"></div>
</div> 

<?php include'footer.php' ?>

<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.pajinate.min.js"></script>	
<script src="assets/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>

</body>
</html>
