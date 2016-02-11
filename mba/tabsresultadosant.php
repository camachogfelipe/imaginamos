<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jquery-ui.googlecode.com/svn/trunk/demos/tabs/vertical.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 06 Mar 2012 18:08:51 GMT -->
<head>
	<meta charset="UTF-8" />
	<title>jQuery UI Tabs - Vertical Tabs functionality</title>
	<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.tabs.js"></script>
	<link type="text/css" href="css/demos.css" rel="stylesheet" />
	<script type="text/javascript">
	
		(function($){
$(document).ready(function() {
	
	
	
	$(function() {
		$("#tabs8").tabs().addClass('ui-tabs-vertical ui-helper-clearfix');
		$("#tabs8 li").removeClass('ui-corner-top').addClass('ui-corner-left');
	});
	
	
// scripts
});
})(jQuery);
	
	
	</script>
	
	
	
	
	
	<style type="text/css">
	

	
/* Vertical Tabs
----------------------------------*/



#sombratop {
	background-image: url(images/sombtop.png);
	background-repeat: no-repeat;
	background-position: center top;
	height:67px;
	width: 930px;


}






.ui-tabs-vertical {
width: 900px;
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
line-height: 20px;
color: #333333;
text-align:justify;
margin-top:0px;	
}
.ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 260px; left:-30px; }
.ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; height:100%; }
.ui-tabs-vertical .ui-tabs-nav li a { display:block; }
.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-selected { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; background: url(images/bgbtov.png) no-repeat; }
.ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 600px;}



.subtitint {
font-family: Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 22px;
font-weight: bold;
color: #0B0B0B;
padding-top:0px;
height:45px;
}




#contenedorinternasexco3 {
width:930px;
height:100%;
padding-top:0px;
padding-left:40px;

}


#imgpara_iso {
width:150px;
float:left;
margin-right:20px;

}


#titulosecinterna2 {
width:100%;
height:45px;
margin-left:25px;
text-shadow: #799707 0px -1px 0px;
line-height:42px; font-size:42px;  font-family: 'LaneARegular'; font-weight:normal; color:#8E8E8E;
text-align:center;
}

#envcolcont {
width:460px;
height:260px;
float:left



}

#leftcol {

width:249px;
height:100%;
float:left;

}

#centcol {

width:172px;
height:100%;
float:right;

}

#envrightcolcont {
	width:438px;
	height:245px;
	float:right;


}

#rightcolcont {
	width:438px;
	height:245px;
	background-image: url(images/texareaform.png);
	background-repeat: no-repeat;

}

#campoform1 {
	width:249px;
	height:24px;
	margin-bottom:6px;
	background-image: url(images/campform.png);
	background-repeat: no-repeat;

}

#envselects {
	width:249px;
	height:24px;
	margin-bottom:6px;
	}
	
	#selectizq {
		width:112px;
	height:24px;
	float:left;
	
	
	}
	
		#selectright {
		width:112px;
	height:24px;
	float:right;
	
	
	}


		#rowcheck {
		width:152px;
	height:24px;
	margin-bottom:15px;
	padding-left:20px;

	
	
	}
	
	

	
	
	#sepclearcont {
	height:25px;
	clear:both;
	
	
	
	}
#envcontenidobusquedas {
	width:930px;
	height:100%;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
	line-height: 20px;
	text-align:justify;

}

    </style>



	<link rel="stylesheet" type="text/css" href="css/static.layout.css" media="screen" />

		<script type="text/javascript" src="js/selects/scripts.js"></script>




	<script type="text/javascript" charset="utf-8">
		
			var scrollSpeed = 10; 		// Speed in milliseconds
			var step = 1; 				// How many pixels to move per step
			var current = 0;			// The current pixel row
			var imageHeight = 2300;		// Background image height
			var headerHeight = 300;		// How tall the header is.
			
			//The pixel row where to start a new loop
			var restartPosition = -(imageHeight - headerHeight);
			
			function scrollBg(){
				
				//Go to next pixel row.
				current -= step;
				
				//If at the end of the image, then go to the top.
				if (current == restartPosition){
					current = 0;
				}
				
				//Set the CSS of the header.
				$('#wrapper').css("background-position","0 "+current+"px");
				
				
			}
			
			//Calls the scrolling function repeatedly
			var init = setInterval("scrollBg()", scrollSpeed);

			
	</script>	



<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>
<body>
<div id="sombratop">&nbsp;</div>
<div class="demo">



	

<div id="tabs8">
	
	<div id="tabs-37">
	

<div id="contenedorinternasexco3">	

		<div id="titulosecinterna2">RESULTADOS DE BÚSQUEDAS</div>
		<div id="titulosecinterna">&nbsp;</div>
		<div id="envcontenidobusquedas"><strong>
		
		Resultados 5 de 5:		</strong><br/>
<br/>

		
		
		
		<ul><li><strong>Lorem ipsum dolor sit amet, </strong>consectetur adipiscing elit. Duis congue ornare dapibus. Quisque dui orci, consectetur quis sodales vel, dapibus a tellus. Phasellus rutrum iaculis tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</li><br/>


<li><strong>Integer dictum orci sed nulla pretium molestie.</strong> Quisque ante nulla, porta ac imperdiet ut, feugiat varius tortor. Nam suscipit tellus sed risus vestibulum laoreet. Vestibulum commodo varius arcu, vitae tristique velit viverra at. Nulla sed magna eu sapien ultrices eleifend. Donec facilisis pellentesque velit eget accumsan.</li><br/>

<li><strong>Donec facilisis pellentesque velit eget accumsan.</strong> Cras non ipsum nulla. Aliquam non mauris ut ipsum adipiscing tristique. Donec magna turpis, bibendum nec porttitor eu, semper vitae lorem. Nunc venenatis ultrices nulla, eget consectetur nunc egestas sit amet. </li><br/>

<li><strong>Nunc sed velit ut elit malesuada congue vel nec risus.</strong> Nullam turpis tortor, feugiat nec malesuada in, ornare et lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis justo diam, molestie condimentum convallis tristique, consequat ut sem. </li><br/>

<li><strong>Suspendisse dictum molestie massa at luctus.</strong> Nulla fringilla felis id libero lacinia nec tincidunt elit laoreet. Sed lectus ante, pretium at porta eget, viverra a dolor. Nam erat dolor, vulputate id lobortis et, varius ut ligula. Nunc lectus ligula, iaculis non malesuada a, sodales et turpis.   </li>

</ul>
		
		
		
		
		
		
		
		
		

		<div id="sepclearcont">&nbsp;</div>


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	
	



<!-- End demo-description -->
</body>

<!-- Mirrored from jquery-ui.googlecode.com/svn/trunk/demos/tabs/vertical.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 06 Mar 2012 18:08:53 GMT -->
</html>
