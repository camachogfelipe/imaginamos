<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signum Consulting</title>
<base href="<?php echo base_url().'assets/' ?>"></base>
<link href="css/signum.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<link href="css/slides.css" rel="stylesheet" type="text/css" />
<?php include "meta.php" ?>
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script>
	$(function(){
		$('#slides').slides({
 		    pagination: false,
			preload: true,
			generateNextPrev: true
		});
		
		$('#slides_b').slides({
			effect: 'fade',
 		    pagination: false,
			preload: true,
			generateNextPrev: true
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){

     $(window).resize(function(){
          $('#slides').css({
               position:'absolute',
			   width: $(window).width(),
			   
          });
          

	});

// Ejecutamos la función
$(window).resize();

});

</script>
<style type="text/css">
#b5 {
	color:#718f99;
	border-bottom:solid 4px #718f99;
}
body {
	overflow-x:hidden;
}
</style>
</head>

<body>
<?php include "header.php" ?>

<div class="b1000 news_b">

      <h1>Actualidad</h1>
       <hr style="margin-bottom:30px;" />
       <a href="<?php echo base_url().'site/actualidad' ?>" class="bt_mas">Volver</a>
       <?php if(!empty($a->pdf)) : ?>
       <a href="<?php echo base_url().'assets/actualidad_pdf/'.$a->pdf ?>" target="_blank" class="bt_pdf">Ver pdf</a>
       <?php endif; ?>

	<h2><?php echo $a->title; ?></h2>
  <h3>Fecha Publicación: <?php echo substr(str_replace('-','/',$a->date),0,10); ?></h3>
    <center><img src="<?php echo base_url().'assets/actualidad_img/'.$a->image; ?>" width="996" height="308"  /></center>
        <div class="text_b">
            <p><?php echo $a->text; ?></p>
     
     </div>
    <div class="clear"></div>
</div>


<div class="clear"></div>
<?php include "footer.php" ?>

</body>
</html>