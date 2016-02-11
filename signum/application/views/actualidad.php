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

<div class="b1000">

      <h1>Actualidad</h1>
       <hr style="margin-bottom:30px;" />

	<h2><?php echo $actualidadO->title; ?></h2>
        <center><img src="<?php echo base_url().'assets/actualidad_img/'.$actualidadO->image; ?>" width="996" height="308" /></center>
  <div class="text_b">
      <p><?php echo strip_tags(substr($actualidadO->text,0,400)).'...'; ?></p>
   	<a href="<?php echo base_url().'site/getDetalle/'.$actualidadO->id; ?>" class="mas">Ver más</a>
     
    </div>
    <div class="clear"></div>
    <h1>Otras noticias</h1>
    <hr style="margin-bottom:30px;" />
    
    <div class="news">
    <?php $c=0; ?>    
    <?php foreach($actualidad as $a): ?>
        <?php $c++; ?>  
    <div class="box_staff">
    	<center><img src="<?php echo base_url().'assets/actualidad_img/'.$a->image; ?>" width="295" height="98" id="profile" /></center>
        <div class="name"><?php echo $a->title; ?></div>
        <div class="charge">Fecha Publicación: <?php echo substr(str_replace('-','/',$a->date),0,10); ?></div>

        <div class="text_b">
            <p><?php echo strip_tags(substr($a->text,0,300)).'...'; ?></p>
        </div>
        
        <div class="links">
        <a href="<?php echo base_url().'site/getDetalle/'.$a->id; ?>" class="mas">Ver más</a>
	     </div>
    </div>  
    
     <?php if($c==3): ?>   
    <div class="clear"></div>
    
    <?php $c=0; endif; ?>
    <?php endforeach; ?>
    </div>
    <div class="clear"></div>
	
    <div class="paginador">
     <?php echo $this->pagination->create_links(); ?>
     	
<!--     	<a href="#" class="activo_pg">1</a>
     	<a href="#">2</a>
     	<a href="#">3</a>
     	<a href="#">4</a>
	    <a id="points">    ...</a>
     	<a href="#">10</a>-->
<!--        <div class="clear"></div>-->
        
    </div>
    <br>
</div>


<div class="clear"></div>
<?php include "footer.php" ?>

</body>
</html>