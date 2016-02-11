<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slidebox</title>
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {margin:0; padding:0; }
html {
height:100%;
}
#sepclearcajon {
clear:both;
height:1%;
}
#titulonoticiasult {
width:460px;
height:70px;
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 22px;
color: #464646;
text-transform: uppercase;
margin-top:35px;	
}
.fechaslide {
width:460px;	
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 12px;
color: #969699;
text-transform: uppercase;
}


#imgslidenot {
width:460px;
height:125px;
float:left;
background-image: url(images/bgimgslideini.png);
background-repeat: no-repeat;
padding-top:3px;
padding-left:4px;
line-height: 18px;
text-transform: none;
font-family: DejaVuSansCondensed;
font-weight: normal;
font-size: 14px;
color: #464646;
}


#textoimgnot {
width:300px;
height:100%
font-family: DejaVuSansCondensed;
font-weight: normal;
font-size: 14px;
color: #464646;
float:right
}


#slidebox{position:relative;  margin:0px auto;}
#slidebox, #slidebox .content{width:460px; height:500px;}


#textonoticia {
width:460px;
height:100%;
}
#slidebox, #slidebox .container, #slidebox .content{height:478px;}
#slidebox{overflow:hidden;}
#slidebox .container{position:relative; left:0;}
#slidebox .content{float:left;}
#slidebox .content div{
	height:100%;
	font-family: DejaVuSansCondensed;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
#slidebox .next, #slidebox .previous{position:absolute; z-index:2; display:block; width:24px; height:42px;}
#slidebox .next{right:0; margin-right:10px; margin-top:-130px; background:url(images/slidebox_next_2.png) no-repeat left top;}
#slidebox .next:hover{background:url(images/slidebox_next_hover_2.png) no-repeat left top;}
#slidebox .previous{margin-left:10px; margin-top:-130px; background:url(images/slidebox_previous_2.png) no-repeat left top;}
#slidebox .previous:hover{background:url(images/slidebox_previous_hover_2.png) no-repeat left top;}
#slidebox .thumbs{position:absolute; z-index:2; bottom:210px; right:10px;}
#slidebox .thumbs .thumb{
	display:block;
	margin-left:5px;
	float:left;
	font-family: DejaVuSansCondensed;
	text-decoration:none;
	padding:2px 4px;
	color:#fff;
	background-image: url(images/bullet2.png);
	background-repeat: no-repeat;
}
#slidebox .thumbs .thumb:hover{
	color:#000;
	
	background-image: url(images/bullet1.png);
	background-repeat: no-repeat;
}
#slidebox .selected_thumb{
	color:#000;
	display:block;
	margin-left:5px;
	float:left;
	font-family: DejaVuSansCondensed;

	text-decoration:none;
	padding:2px 4px;

	background-image: url(images/bullet1.png);
	background-repeat: no-repeat;
}
-->

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var autoPlayTime=7000;
	autoPlayTimer = setInterval( autoPlay, autoPlayTime);
	function autoPlay(){
		Slidebox('next');
	}
	$('#slidebox .next').click(function () {
		Slidebox('next','stop');
	});
	$('#slidebox .previous').click(function () {
		Slidebox('previous','stop');
	});
	var yPosition=($('#slidebox').height()-$('#slidebox .next').height())/2;
	$('#slidebox .next').css('top',yPosition);
	$('#slidebox .previous').css('top',yPosition);
	$('#slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
	$("#slidebox .content").each(function(i){
		slideboxTotalContent=i*$('#slidebox').width();	
		$('#slidebox .container').css("width",slideboxTotalContent+$('#slidebox').width());
	});
});

function Slidebox(slideTo,autoPlay){
    var animSpeed=1000; //animation speed
    var easeType='easeInOutExpo'; //easing type
	var sliderWidth=$('#slidebox').width();
	var leftPosition=$('#slidebox .container').css("left").replace("px", "");
	if( !$("#slidebox .container").is(":animated")){
		if(slideTo=='next'){ //next
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition==-slideboxTotalContent){
				$('#slidebox .container').animate({left: 0}, animSpeed, easeType); //reset
				$('#slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs a:last-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '-='+sliderWidth}, animSpeed, easeType); //next
				$('#slidebox .thumbs .selected_thumb').next().removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs .selected_thumb').prev().removeClass('selected_thumb').addClass('thumb');
			}
		} else if(slideTo=='previous'){ //previous
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition=='0'){
				$('#slidebox .container').animate({left: '-'+slideboxTotalContent}, animSpeed, easeType); //reset
				$('#slidebox .thumbs a:last-child').removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs a:first-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '+='+sliderWidth}, animSpeed, easeType); //previous
				$('#slidebox .thumbs .selected_thumb').prev().removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs .selected_thumb').next().removeClass('selected_thumb').addClass('thumb');
			}
		} else {
			var slide2=(slideTo-1)*sliderWidth;
			if(leftPosition!=-slide2){
				clearInterval(autoPlayTimer);
				$('#slidebox .container').animate({left: -slide2}, animSpeed, easeType); //go to number
				$('#slidebox .thumbs .selected_thumb').removeClass('selected_thumb').addClass('thumb');
				var selThumb=$('#slidebox .thumbs a').eq((slideTo-1));
				selThumb.removeClass('thumb').addClass('selected_thumb');
			}
		}
	}
}
</script>
</head>
<?php

		include_once './../php/clases.php';
	$imagenDAO = new imagenDAO();
	$imagen = new imagen();
	$imagenes = $imagenDAO->getBySeccionFlag(8,1);


?>
<body>
<div id="slidebox">
	<div class="next"></div>
	
	<div class="previous"></div>
	<!--
	<div class="thumbs">
		<a href="#" onClick="Slidebox('1');return false" class="thumb">&nbsp;</a> 
		<a href="#" onClick="Slidebox('2');return false" class="thumb">&nbsp;</a> 
		<a href="#" onClick="Slidebox('3');return false" class="thumb">&nbsp;</a> 
		<a href="#" onClick="Slidebox('4');return false" class="thumb">&nbsp;</a> 
	</div>-->
	<div class="container">		

	<?php if ($imagenes>0): ?>
	
		<?php foreach ($imagenes as $imagen): ?>
			
	    <div class="content">
        		<div><img src="../<?php echo $imagen->getImagen_I() ?>" width="460" height="224" /></div>
    	</div>

		<?php endforeach ?>
	
	<?php endif ?>
	</div>
</div>


</body>
</html>