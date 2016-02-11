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




	
<link rel="stylesheet" href="css/styles.css" type="text/css"/>

<script type="text/javascript" src="js/lib/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<link href="style/format.css" rel="stylesheet" type="text/css" />
<link href="style/text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>








<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />









<style type="text/css"> 


.container {width: 880px; margin:auto;  }
ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 44px;
	text-align:center;
	width: 880px;
	background-image: url(images/linetabs.png);
	background-repeat: no-repeat;
	background-position: left bottom;
	padding-left:13px;
	
}
ul.tabs li {
	float: left;
	margin: 0;
	margin-right:5px;
	padding: 0;
	width: 156px;
	height: 39px;
	line-height: 42px;
	border-left: none;
	margin-bottom: -1px;	
	background-image:url(images/fd.png);
	overflow: hidden;
	position: relative;
	color:#666666;
}
ul.tabs li a {
	text-decoration: none;
	color:#666666;
	display: block;
	font-size: 1.2em;
	padding: 0 20px;
	outline: none;
	height: 62px;
	text-shadow: 1px 1px #ffffff; 

}
ul.tabs li a:hover {
	background-image:url(images/images/fd2.png);
	height: 62px;
	text-shadow: 1px 1px #ffffff;  
	
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	background-image:url(images/fd2.png);
	color:#666666;
	text-shadow: 1px 1px #ffffff; 

}
.tab_container {
text-align:justify;
padding-top:30px;
font-size:14px;
line-height:22px;	
	border-top: none;
	clear: both;
	float: left; 
	width: 880px;
	
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.tab_content {	
	font-size: 14px;
	font-weight: normal;
	color:#8D8D8D;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;	
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}

#coltabt_izq {
width:490px;
height:100%;
float:left;
color:#8D8D8D;

}

#coltabt_izq2 {
width:510px;
height:100%;
float:left;
color:#8D8D8D;

}


#coltabt_der {
width:250px;
height:100%;
float:right;
color:#8D8D8D;

}








			

</style> 






  

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
						   
	//prepend span tag
	$(".jquery h1").prepend("<span></span>");
								  
});
</script>



























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

<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css" />

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
 
<div class="container"> 

    <ul class="tabs"> 
        <li><a href="#tab1">Mision</a></li> 
        <li><a href="#tab2">Vision</a></li> 
		 <li><a href="#tab3">HSEQ Policy</a></li> 
    </ul> 
    <div class="tab_container"> 
        <div id="tab1" class="tab_content"> 
		<div id="img_derint1_1"><img src="images/img_mision02.jpg" width="312" height="277" class="rounded"/></div>
		<div id="titulonqs2">Mision</div>
		
	
		  <div id="coltabt_izq">Being a strategic partner in distribution and commercialization from our suppliers, our mission is:
<ul><li>To offer a competitive, agile, ethic and prime quality service to all our customers; </li> 
<li>To create  added value  to sales process, under the latest  standards  in quality, safety  and  environmental care; </li>
<li>To establish a long, ethical, responsible and committed relationship with our clients.</li></ul>
<br />
		  <br />		
</div>
		
		


   
 
       
			
			
			
			
			
			
			
			
			
			
             
        </div> 
        <div id="tab2" class="tab_content">
		
		
	<div id="img_derint1_2"><img src="images/img_vision.jpg" width="312" height="246" class="rounded"/></div>
		
		
		
		
		
		
		<div id="titulonqs2">Vision</div>
		
		<div id="coltabt_izq">		
 Our goal is to become, by 2015, a consolidated and competitive company in the distribution of chemical products for the industry at both the national and regional level, with an adequate and sufficient infrastructure to meet the needs of the growing market, and be recognized for competitiveness, talented human resources known for their agility and for service quality provided to costumers.<br/><br/>
 
 Be a more attractive business, as well as a strategic partner for leading international chemical companies and clients.<br/><br/>
 
 To build, with the help of our customers, a new vision of the future, in a way that is ethical, professional, efficient and responsible.


</div>
		
		
		
		
		
		
 
 <div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
 
 <span class="textfrase"><br/><br/>
&quot;
  To build, with the help of our customers, a new vision of the future, in a way that is ethical, professional, efficient and responsible.
&quot;</span>
                  
    
      </div> 
	  
	  
	  
	  
	  
	  
	  
	  
	    <div id="tab3" class="tab_content">
		
			<div id="img_derint03"><img src="images/img_polint.jpg" width="311" height="397" class="rounded"/></div>
		
	
		<div id="coltabt_izq2">
		
		<div id="titulonqs">HSEQ Policy</div>
		
		
		  <iframe width="515" height="500" src="prueba_scrollvertical_eng.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>
		</div>





























</div>











    </div> 
</div> 
<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"><img src="images/sombraqs.png" /></div> 

</body> 
</html>
