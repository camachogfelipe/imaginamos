<?php

    include_once './php/clases.php';
   
    $noticiaDAO = new noticiaDAO();
    $noticia = new noticia();
    $noticias = $noticiaDAO->getUltimasNoticias();



?>




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
	font-weight: bold;
	font-size: 22px;
	color: #464646;
	text-transform: uppercase;
	margin-top:5px;
	font-family: Arial, Helvetica, sans-serif;	
}


.fechaslide {
	width:460px;	
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	color: #969699;
	text-transform: uppercase;
	
}


#imgslidenot {
	width:460px;
	height:125px;
	margin-top:30px;
	float:left;
	background-image: url(images/bgimgslideini.png);
	background-repeat: no-repeat;
	padding-top:3px;
	padding-left:14px;
	line-height: 18px;
	text-transform: none;
	font-family: DejaVuSansCondensed;
	font-weight: normal;
	font-size: 14px;
	color: #464646;
}


#textoimgnot {
	width:320px;
height:100%
	font-weight: normal;
	font-size: 14px;
	color: #464646;
	float:right;
	text-align:justify;
	font-family: Arial, Helvetica, sans-serif;
}

#btmasinfolnz {
float:right;
width:141px;
height:25px;
background-image: url(images/flechitaazul.png);
background-repeat: no-repeat;
background-position: left top;
padding-left:25px;
}
#btmasinfolnz a {
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 14px;
color: #464646;
padding-left:10px;
text-decoration:none;
}
#btmasinfolnz a:hover {
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 14px;
color: #3F89C5;
padding-left:10px;
text-decoration:none;
}

#btmasinfonoti {
float:right;
width:161px;
height:25px;
background-image: url(images/flechitaazul.png);
background-repeat: no-repeat;
background-position: left top;
padding-left:25px;
}
#btmasinfonoti a {
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 14px;
color: #464646;
padding-left:25px;
text-decoration:none;
}
#btmasinfonoti a:hover {
font-family: DejaVuSansCondensed;
font-weight: bold;
font-size: 14px;
color: #3F89C5;
padding-left:25px;
text-decoration:none;
}


#slidebox{position:relative;  margin:0px auto;}
#slidebox, #slidebox .content{width:460px; height:270px;}



#textonoticia {
width:460px;
height:100%;




}
#slidebox, #slidebox .container, #slidebox .content{height:270px;}
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
#slidebox .next, #slidebox .previous{position:absolute; z-index:2; display:block; width:21px; height:21px;}
#slidebox .next{right:0; margin-right:-5px; margin-top:-100px; background:url(images/slidebox_next.png) no-repeat left top;}
#slidebox .next:hover{background:url(images/slidebox_next_hover.png) no-repeat left top;}
#slidebox .previous{margin-left:350px; margin-top:-100px; background:url(images/slidebox_previous.png) no-repeat left top;}
#slidebox .previous:hover{background:url(images/slidebox_previous_hover.png) no-repeat left top;}
#slidebox .thumbs{position:absolute; z-index:2; bottom:220px; right:20px;}
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

#slidebox .thumbs{
  bottom: 0;
}

#slidebox .previous {
    margin-left: 370px;
    margin-top: 118px;
}

#slidebox .next {
    margin-top: 117px;
}
-->

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var autoPlayTime=17000;
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
    var animSpeed=1700; //animation speed
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

<body>
<div id="slidebox">
  <div class="next"></div>
  <div class="previous"></div>
  <div class="thumbs"> 
  	<?php 

  	if ($noticias != null) {
  	
  		$numNoticias = count($noticias);

  		for ($i=1; $i < $numNoticias + 1; $i++) { 
  		
  	 ?>
  	<a href="#" onclick="Slidebox('<?php echo $i ?>');return false" class="thumb">&nbsp;</a> 
  
<?php 
	}}
 ?>
  	<!--<a href="#" onclick="Slidebox('2');return false" class="thumb">&nbsp;</a> 
  	<a href="#" onclick="Slidebox('3');return false" class="thumb">&nbsp;</a> 
  	<a href="#" onclick="Slidebox('4');return false" class="thumb">&nbsp;</a> -->
  </div>

  <div class="container">
  <?php
                    function convertMes($num_mes){
                            
                        $meses=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

                        $num_mes= $num_mes-1;

                        $mes=$meses[$num_mes];
                        
                        return $mes;
                    }
?>

<?php   	if ($noticias != null): ?>

  <?php foreach ($noticias as $noticia): ?>
  <?php $fecha = $noticia->getFecha(); $year=substr($fecha, 0,-6); $day=substr($fecha, 8); $num_mes=substr($fecha, 5,2); ?>


  <div class="content">
  	<div>
        <div id="textonoticia">
          <div id="titulonoticiasult">&nbsp;
              <div class="fechaslide"><?php echo $day," de ",$mes=convertMes($num_mes)," de ",$year ?><br/>
                  <br/>
                  <div id="imgslidenot" style="padding-left:5px; padding-top:3px;"><img src=".<?php echo $noticia->getImagen_e() ?>" align="left" width="111" height="110"/>
                      <div id="textoimgnot" style="padding-left:20px"><strong><?php echo $noticia->getTitulo_e() ?></strong><br/>
                          <?php echo $noticia->getDescripcion_e() ?>
                        <div id="btmasinfonoti"><a href="noticias.php?mes=<?php echo $num_mes?>&anio=<?php echo $year ?>">Más información</a></div>
                      </div>
                    <div id="sepclearcajon"></div>
                  </div>
              </div>
          </div>
        </div>
      </div>



  </div>
  <?php endforeach   ?>
      <?php endif ?>
  </div>
</div>
</body>
</html>

