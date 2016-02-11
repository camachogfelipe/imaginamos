<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>Simple Tabs with CSS &amp; jQuery</title> 
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
	







<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->

<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
	hs.graphicsDir = 'highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.wrapperClassName = 'dark borderless floating-caption';
	hs.fadeInOut = true;
	hs.dimmingOpacity = .75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .6,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>













<style type="text/css"> 



.container {
	width: 971px;
	margin-left:17px;
	

}
ul.tabs {
	margin: 0;
	float: left;
	list-style: none;
	height: 62px;
	width: 860px;
	padding-top: 15px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 10px;
	color:#5C5C5C;
	 font-family: DINMedium;
	font-size: 15px;	
	text-align: left;	
}




ul.tabs li {
	float: left;
	margin: 0;
	width: 170px;
	height: 62px;
	border-left: none;
	background-image:url(images/fd.png);
	overflow: hidden;
	position: relative;
	background-repeat: no-repeat;
	padding-top: 10;
	padding-right: 0;
	padding-bottom: 0;
	padding-left: 0;	
	background-position: top;
	line-height: 50px;
	color:#5C5C5C;
	font-family: DINMedium;
	font-size: 15px;	
	text-align: left;		
}


ul.tabs li a {
	text-decoration: none;
	color:#5C5C5C;
	display: block;
	font-size: 15px;
	padding: 0 20px;
	font-family: DINMedium;
	font-size: 15px;
	outline: none;
	height: 62px;
	text-align: left;	
}
ul.tabs li a:hover {
	background-image:url(images/fd2.png);
	height: 62px;
	color:#797979;
	font-family: DINMedium;
	font-size: 15px;
	background-repeat: no-repeat;
	text-align: left;	
}	


html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background-image:url(images/fd2.png);
	font-family: DINMedium;
	font-size: 15px;	
	color:#797979;
    background-repeat: no-repeat;
	text-align: left;		
}


.tab_container {
	
	border-top: 0px;
	clear: both;
	float: left; 
	width: 771px;
	margin-left:17px;

}
.tab_content {

}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;

	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}
.tab_content img {
	float: left;
	padding: 0px;
	margin-top: 0;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0;
}






#txtconttab1 {
width:900px;
height:100%;
float:left;
margin-left:15px;
padding-top:20px;
font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #616161;
	text-align:justify;
	line-height:20px;
}
#titulossectab {
width:900px;
height:35px;
float:left;
 font-family: DINMedium;
	font-size: 22px;
	color: #333333;
	text-align:justify;
	line-height:20px;

}

#coltxtizqcontab1 {
width:440px;
height:100%;
float:left;
font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #616161;
	text-align:justify;
	line-height:20px;

}


#imgsistint {
	width:350px;
	height:193px;
	float:left;
	background-image: url(images/bgsombimg.png);
	background-repeat: no-repeat;
	background-position: center bottom;
	margin-right: 20px;
	margin-bottom: 20px;
}


#coltxtizqcontabsist {
width:900px;
height:100%;
float:left;
font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #616161;
	text-align:justify;
	line-height:20px;

}


#coltxtdercontab1 {
width:440px;
height:100%;
float:right;
 font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #616161;
	text-align:justify;
	line-height:20px;

}
#sepcleartxttabs {
height:20px;
clear:both;
}




#thumbfac {
float:left;
	width:90px;
	height:71px;
	border: 1px solid #CCCCCC;
	padding:5px;
	margin-right:10px;
}


#sepcleartxttabssist {
height:80px;
clear:both;
}
#imgsistint2 {
	width:350px;
	height:193px;
	float:right;
	background-image: url(images/bgsombimg.png);
	background-repeat: no-repeat;
	background-position: center bottom;
	margin-bottom: 20px;
	margin-left: 20px;
}









#velobt  {
position:absolute;
margin: 0;
padding: 0;
width: 90px;
height:71px;
text-align: center;
background: url("images/velo.png") 0 0 no-repeat;
letter-spacing: -1px;
} 
#velobt  a {
padding-top: 12px;
width: 100%;
height: 100%;
display: block;
overflow: hidden;
font-family: DINMedium;
color: #ffffff;
font-weight: bold;
font-size: 12px;
text-decoration: none;
background: url("images/velo.png") 0 0 no-repeat;
letter-spacing: -1px;
} 
#velobt  a:hover {
font-family: DINMedium;
background-position: -90px 0;
color: #ffffff;
font-weight: bold;
font-size: 12px;
letter-spacing: -1px;
}
#velobt  a:active {
font-family: DINMedium;
background-position: -180px 0;
color: #ffffff;
font-weight: bold;
font-size: 12px;
letter-spacing: -1px;
}

</style> 






  



























<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> 
<script type="text/javascript"> 
 
$(document).ready(function() {
 
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
 
});
</script> 







</head> 
 
<body> 
 
<div class="container"> 

    <ul class="tabs"> 
        <li><a href="#tab1">Historia</a></li> 
        <li><a href="#tab2">Sistema de calidad</a></li> 
		 <li><a href="#tab3">Facilidades</a></li> 
		    <li><a href="#tab02">Servicios</a></li> 

    </ul> 
    <div class="tab_container"> 
        <div id="tab1" class="tab_content">
		
		
		
		<div id="txtconttab1">
		
		<div id="titulossectab">Nuestra historia</div>
			<div id="coltxtdercontab1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.</div>
		<div id="coltxtizqcontab1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis.</div>
		<div id="sepcleartxttabs"></div>
		
			<div id="sepcleartxttabs"></div>
		
		
		</div>
		
		
		
		
		
		<iframe width="965" height="460" src="slide_lineatiempo.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe></div> 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div id="tab2" class="tab_content">
		
		
	
		
		
	<div id="txtconttab1">
		
		<div id="titulossectab">Sistema de calidad</div>
		<div id="coltxtizqcontabsist"><div id="imgsistint"><img src="images/imgprueba.jpg" width="350" height="180" /></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. </div>
		<div id="sepcleartxttabssist"><img src="images/sepsist.png" width="900" height="80" /></div>
		
		
		<div id="coltxtizqcontabsist"><div id="imgsistint2"><img src="images/imgprueba.jpg" width="350" height="180" /></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus.</div>
		
			<div id="sepcleartxttabs"></div>
		
		
		</div>
		
		
 
 <div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
 
 
                  
    
      </div> 
	  
	  
	  
	  
	  
	  
	  
	  
	    <div id="tab3" class="tab_content">
		
		<div id="txtconttab1">
		<div id="titulossectab">Facilidades</div>
		
		<div id="imgsistint"><img src="images/imgprueba.jpg" width="350" height="180" /></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. </div>
		<div id="sepcleartxttabssist"><img src="images/sepsist.png" width="900" height="80" /></div>
		
		
		<div id="coltxtizqcontabsist">		
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac2.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac2.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac2.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		<div id="thumbfac"><div id="velobt"><a  href="images/ampfac2.jpg" class="highslide" onclick="return hs.expand(this)">&nbsp;</a></div><img src="images/thumbfacilidades.jpg" width="90" height="71" /></div>
		</div>
		
			<div id="sepcleartxttabs"></div>
		
		
		
		</div>









	  
		
		
        <div id="tab02" class="tab_content">
		
		
	
		
		
	<div id="txtconttab1">
		
		<div id="titulossectab">Sistema de calidad</div>
		<div id="coltxtizqcontabsist"><div id="imgsistint"><img src="images/imgprueba.jpg" width="350" height="180" /></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. </div>
		<div id="sepcleartxttabssist"><img src="images/sepsist.png" width="900" height="80" /></div>
		
		
		<div id="coltxtizqcontabsist"><div id="imgsistint2"><img src="images/imgprueba.jpg" width="350" height="180" /></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus. Vestibulum at quam massa, at luctus quam. Praesent ac est nec massa lobortis adipiscing sed id lacus. Cras quam diam, posuere sed cursus et, porta quis lectus. Fusce at augue sed tortor pretium bibendum. Donec at libero nec magna bibendum congue. Proin vitae ante in dui vehicula eleifend. Phasellus rhoncus eleifend turpis sit amet mattis. Suspendisse venenatis interdum erat, at auctor dui cursus lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu augue sapien. Donec condimentum fringilla porta. Ut id pulvinar purus.</div>
		
			<div id="sepcleartxttabs"></div>
		
		
		</div>
		
		
 
 <div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
 
 
                  
    
      </div> 
	  
	  
















</div>











    </div> 
</div> 
<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"></div> 
</div>
</body> 
</html>
