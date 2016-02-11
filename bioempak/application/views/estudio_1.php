<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="RTI - Producciones"/> 
<meta name="description" content="RTI - Producciones"/> 
<title>RTI - Producciones</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />




<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/stylos_rti.css" rel="stylesheet" type="text/css" />
<link href="css/subNavi.css" rel="stylesheet" type="text/css" />



<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-5.1.0-packed.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	$(".btn-slide").click(function(){
		$("#panel").slideToggle("slow");
		$(this).toggleClass("active"); return false;
	});
	
	 
});


/*	 slide images 	*/

$(function() {

  //	Basic carousel, no options
  $('#foo0').carouFredSel();

  //	Basic carousel + timer
  $('#foo1').carouFredSel({
	  auto: {
		  pauseOnHover: 'resume',
		  onPauseStart: function( percentage, duration ) {
			  $(this).trigger( 'configuration', ['width', function( value ) { 
				  $('#timer1').stop().animate({
					  width: value
				  }, {
					  duration: duration,
					  easing: 'linear'
				  });
			  }]);
		  },
		  onPauseEnd: function( percentage, duration ) {
			  $('#timer1').stop().width( 0 );
		  },
		  onPausePause: function( percentage, duration ) {
			  $('#timer1').stop();
		  }
	  }
  });

  //	Scrolled by user interaction
  $('#foo2').carouFredSel({
	  prev: '#prev2',
	  next: '#next2',
	  pagination: {
		  container: "#pager2"
	  },
	  auto: false
  });

  //	Variable number of visible items with variable sizes
  $('#foo3').carouFredSel({
	  width: 360,
	  height: 'auto',
	  prev: '#prev3',
	  next: '#next3',
	  auto: false
  });

  //	Fluid layout example 1
  $('#fooF0').carouFredSel({
	  items: {
		  visible: 1,
		  width: 'variable'
	  }
  });
  $(window).resize(function() {
	  var newWidth = $(window).width();
	  $('#fooF0').width( newWidth * $('#fooF0').children().length ); // set width of carousel, to ensure the items fit next to eachother
	  $('#fooF0').parent().width( newWidth ); // set width of carousel-wrapper
	  $('#fooF0').children().width( newWidth - 22 ); // set width of items, -22px for border and margin
  });

  //	Fuild layout example 2
  $(window).resize(function() {
	  var newWidth = $(window).width();
	  $('#fooF1').carouFredSel({
		  width: newWidth,
		  scroll: 2
	  });
  });
  
  $(window).resize();
});

</script>
<style type="text/css" media="all">
			
			a, a:link, a:active, a:visited {
				color: black;
				text-decoration: underline;
			}
			a:hover {
				color: #9E1F63;
			}
			#intro {
				width: 580px;
				margin: 0 auto;
			}
			.wrapper {
				background-color: white;
				width: 480px;
				margin: 40px auto;
				padding: 50px;
				box-shadow: 0 0 5px #999;
			}
			.list_carousel {
				margin: 0 0 30px 4px;
				width: 480px;
			}
			.list_carousel ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: block;
			}
			.list_carousel li {
				
				border: 2px solid  #FBFBFB;
				width: 110px;
				height: 100px;
				padding: 0;
				margin: 3px;
				display: block;
				float: left;
			}

			.clearfix {
				float: none;
				clear: both;
			}
			.prev {
				float: left;
				margin-left: 5px;
			}
			.next {
				float: right;
				margin-right: 5px;
			}
			.pager {
				float: left;
				width: 300px;
				text-align: center;
			}
			.pager a {
				margin: 0 5px;
				text-decoration: none;
			}
			.pager a.selected {
				text-decoration: underline;
			}
			.timer {
				background-color: #999;
				height: 6px;
				width: 0px;
			}
			.arrowLeft{
	position:absolute;
	top:588px;
	right:705px;
			}
			.arrowRight{
	position:absolute;
	top:591px;
	right:124px;
			}
		</style>

</head>

<body>


<div id="contenedor"><?php include "header_rti.php"; ?></div>




<div id="contenedorinternas">

<div id="centralinternas2">
<div id="topauxmenu_re"> <?php include "menuRecursos.php"; ?></div>
<div style="margin-bottom:0px; background-image: url(images/bgsubtitinterna.png); background-repeat:repeat-x; height:150px;"> <div id="titulo_int">Nombre del Recurso</div></div>

<div id="cont_est1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis, urna sit amet tempor posuere, eros felis scelerisque elit, a luctus arcu sapien quis enim. Mauris porta auctor neque, ut imperdiet augue bibendum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet adipiscing lacus. Nunc sed eros orci. Proin blandit pharetra mi ac faucibus. Morbi rutrum metus id lacus tincidunt consectetur.<br>
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet adipiscing lacus. Nunc sed eros orci. Proin blandit pharetra mi ac faucibus. Morbi rutrum metus id lacus tincidunt consectetur.<br>
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis, urna sit amet tempor posuere, eros felis scelerisque elit, a luctus arcu sapien quis enim. Mauris porta auctor neque, ut imperdiet augue bibendum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
<div id="cont_rec2" style="position:absolute; right:25px; top:150px;">
  <object width="290" height="300">
    <param name="movie" value="http://www.youtube.com/v/7AUh89F8Kfg?version=3&amp;hl=es_ES" />
    </param>
    <param name="allowFullScreen" value="true" />
    </param>
    <param name="allowscriptaccess" value="always" />
    <param name="wmode" value="transparent" />
    </param>
    <embed src="http://www.youtube.com/v/7AUh89F8Kfg?version=3&amp;hl=es_ES" width="290" height="300" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" movie="http://www.youtube.com/v/7AUh89F8Kfg?version=3&amp;hl=es_ES" wmode="transparent"></embed>
  </object>
</div>
</div>








<div id="centralinternas">


<div id="lat_empt">&nbsp;</div>


<div id="lat_der">


<div id="cont_pasarela_recursos">


<div id="mygallery" class="stepcarousel"> 
                            <div id="cont_vid_detalle" style="margin:0px; margin-top:0px;margin-left:130px; background:none; padding:0px;">
  <div id="mygallery" class="stepcarousel" style="margin:0px;"> 

                              
			<!--	galeria de las secciones detalle	-->	
            			 
							<div class="list_carousel">
				<ul id="foo2" style="background-color:;">
					<li><img src="images/directivos/img1.png" width="110" height="100" /></li>
					<li><img src="images/directivos/img1.png" width="110" height="100" /></li>
					<li><img src="images/directivos/img1.png" width="110" height="100" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
                	<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
					<li><img src="images/directivos/img1.png" width="115" height="110" /></li>
				</ul>
				<div class="clearfix"></div>
				<div class="arrowLeft"><a id="prev2" class="prev" href="#"><img src="images/prev.png" /></a></div>
				<div class="arrowRight"><a id="next2" class="next" href="#"><img src="images/next.png" /></a></div>
			</div>
</div>
</div>







</div>



</div>
</div>
<div id="sep">&nbsp;</div>
<div id="contenedorfootint"><?php include "footer_rti.php"; ?></div>
</div>
</body>
</html>
