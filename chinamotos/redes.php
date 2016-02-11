<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: CHINA MOTOS :.</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/style.css" rel="stylesheet" />

</head>
<body>


	<div class="conIRedes">
    	<div class="redes">
           	<div class="item">
   				<div class="link icon_tyre"></div>
           		<div class="item_content">
                    <div class="conTRedes">
                    	Síguenos...
                    </div>
          			<div class="conLogRedes">
               			<a href="http://www.facebook.com/" target="_blank"><div class="red1"></div></a>
               			<a href="https://twitter.com/" target="_blank"><div class="red2"></div></a>
                  		<a href="http://www.youtube.com/" target="_blank"><div class="red3"></div></a>
                	</div>
           		</div>
     		</div>
 		</div>
    </div>


<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/jquery-css-transform.js"></script>
<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript">
	$('.item').hover(function(){
  		var $this = $(this);
  		expand($this);
	},function(){
 		var $this = $(this);
  		collapse($this);
 	});
 	function expand($elem){
 		var angle = 0;
      	var t = setInterval(function(){
       		if(angle == 2880){
         		clearInterval(t);
           		return;
      		}
      		angle += 40;
          	$('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
  		},10);
    	$elem.stop().animate({width:'250px'}, 750)
    	.find('.item_content').fadeIn(0,function(){
  			$(this).find('.conLogRedes').stop(true,true).fadeIn(2000);
    	});
 	}
	function collapse($elem){
		var angle = 2880;
    	var t = setInterval(function(){
      		if(angle == 0){
         		clearInterval(t);
             	return;
        	}
       		angle -= 40;
      		$('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
    	},10);
  		$elem.stop().animate({width:'52px'}, 750)
    	.find('.item_content').stop(true,true).fadeOut(100).find('.conLogRedes').stop(true,true).fadeOut(100);
	}
</script>


</body>
</html>