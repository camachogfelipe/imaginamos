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
<link rel="stylesheet" href="assets/player/mediaelementplayer.min.css" />
<link href="assets/css/style_slider.css" rel="stylesheet" />
<style type="text/css">body {float:left; height:100%; width:100%;}</style>
</head>

<body>
<div class="bg_home"></div>
<?php include 'header.php';
$dbhome = new Dbhome();
$idhome = $dbhome->getMaxId();
$home = $dbhome->getByPk($idhome);

?>

<div class="main_content_home">
  <div class="content_940 clearfix">
    <div class="content_video_home left">
      <video width="460" height="270" src="vid/home/<?php echo $home['imagen_video']; ?>" type="video/mp4" id="player1"  preload="auto"></video>
    </div>
    <div class="info_home right">
     <h2><!--span>3</span-->Bienvenidos</h2>
     <p>
     <?php echo $home['texto_mensaje']; ?>
     </p>
     <a href="<?php echo $home['link']; ?>" class="btn_masinfo_main">M&aacute;s informaci&oacute;n</a>  
    </div>
  </div>
</div>

<?php include'menu.php' ?>


<div class="title_home">
  <div class="content_940">
    <h2 class="left"><span>bienvenido</span> aoa se mueve contigo</h2>
    <div class="icon_title_home"></div>
  </div>
</div>
<div class="content_slider_home">
  <div class="content_940">
    <div class="slider">
      <ul>
          <?php $dbdestacados = new Dbdestacados(); $destacados = $dbdestacados->getList(); $contador = count($destacados); ?>
          <?php for($i=0; $i<$contador; $i++): ?>
        <li class="clearfix">
          <div class="left info_slide_home">
              <h3><?php echo $destacados[$i]['titulo']; ?> </h3>
            <p>
            <?php echo $destacados[$i]['texto']; ?>
            </p>
          </div>
          <div class="right clearfix">
            <div class="content_img_slide">
              <img src="img/destacados/<?= str_replace("original","redimension",$destacados[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" />
            </div>
            <div class="content_img_slide">
              <img src="img/destacados/<?= str_replace("original","redimension",$destacados[$i]["imagen_2"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" />
            </div>
          </div>
        </li>
          <?php endfor; ?>
      </ul>
    </div>
  </div>
</div>

<?php include'footer.php' ?>

<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/player/mediaelement-and-player.min.js"></script>
<script src="assets/js/jquery.sudoSlider.js"></script>	
<script src="assets/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>

$('audio,video').mediaelementplayer({
	success: function(player, node) {
		$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
	}
});

$(document).ready(function(e) {
    var sudoSlider=$(".slider").sudoSlider({
		numeric:false,
		continuous:true,
		prevNext:true,
		auto:true,
		speed:700,
		pause:4500
		
	});
});

</script>
</body>
</html>
