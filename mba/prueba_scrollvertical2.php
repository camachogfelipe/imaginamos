<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>



	
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
	font-family: AvantGardeMdBTMedium;
	
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
	font-family: AvantGardeMdBTMedium;
	
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




<!-- styles specific to demo site -->
	
		<!-- styles needed by jScrollPane - include in your own sites -->
		<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />

		<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			
			
		
			#scroll-pane2
			{
				width: 480px;
				height: 100%;
				overflow: auto;				
				padding-left:4px;
				padding-right:20px;
				background-image: url(images/bgscroller.png);
	background-repeat: no-repeat;
	background-position: right top;
	color:#8D8D8D;
		font-family: AvantGardeMdBTMedium;
		text-align:justify;
		font-size:14px;
		font-weight:normal;



			}
			.horizontal-only
			{
				height: auto;
				max-height: 334px;
			}
			
			
			
				#conteinerpolitica {
		width:880px;
		height:100%;
		margin:auto;
		
		}	
			
			
			
			
			
		</style>

		<!-- latest jQuery direct from google's CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<!-- the mousewheel plugin -->
		<script type="text/javascript" src="script/jquery.mousewheel.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>
		<!-- scripts specific to this demo site -->


		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('#scroll-pane2').jScrollPane(
					{
						showArrows: true,
						arrowScrollOnHover: true
					}
				);
			});
		</script>

  












<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
						   
	//prepend span tag
	$(".jquery h1").prepend("<span></span>");
								  
});
</script>



<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
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

<div id="conteinerpolitica">

<div style="position:absolute; margin-left:340px; width:130px; margin-top:4px; z-index:2500;"><a href="prueba_scrollvertical3.php"><img src="images/btpolitic.png" width="135" height="29" border="0" /></a></div>

<div class="container"> 


    <ul class="tabs"> 
         <li><a href="#tab1">Misión</a></li> 
        <li><a href="#tab2">Visión</a></li> 
		
		  <li><a href="">Política</a></li> 
		  
    </ul> 
    <div class="tab_container"> 
	
	
	
	
	
	
	
	
		
		
		
			  
	    <div id="tab1" class="tab_content">
		
			
		
	
		<div id="coltabt_izq2">
		<div id="img_derint1_1"><img src="images/img_mision02.jpg" width="312" height="277" class="rounded"/></div>
		<a name="tabmision" id="tabmision"></a><div id="titulonqs">Misión</div>
		<br/>
		
		
		
		
		
		<div id="coltabt_izq">Nuestra  misión  es  ofrecer  un  servicio  ético,  ágil,  competitivo  y  de  primera  calidad  a  todos nuestros  clientes, como  socios  estratégicos  en  la  distribución  y  comercialización  de  nuestros  proveedores bajo  los  últimos  estándares  en  materia  de calidad,  seguridad  y  cuidado  del  medio  ambiente; estableciendo  relaciones  cercanas  y  a  largo  plazo  con  nuestros  clientes, con  un  recurso  humano  cálido, ético,  responsable  y  comprometido.<br />
		  <br />		
</div>
		
		
		


		
		
		
		
		
		
		
		
		 
		</div>







</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div id="tab2" class="tab_content">
		
			<div id="img_derint1_2"><img src="images/img_vision.jpg" width="312" height="246" class="rounded"/></div>
	
		
		
		
		
		
		<div id="titulonqs2">Visión</div>
		
		<div id="coltabt_izq">		
 En  el  2015  ser  una  empresa  consolidada  y  competitiva  en  materia  de  distribución  de  insumos  químicos para  la  industria, tanto  a  nivel  nacional  como  regional, con  una  infraestructura  a  disposición, adecuada para  satisfacer  las  necesidades  del mercado, reconocida en el  mercado  por  su  competitividad, talento humano, y  por  su  agilidad  y  calidad  en  el  servicio.<br />
		  <br />	
		  Ser  una  empresa  atractiva  como  socio  estratégico tanto  para  empresas  líderes  a  nivel  global  en  el  suministro  de  insumos  químicos, como  para  nuestros clientes.	
</div>
		
	
		
		
		
		
 
 <div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
 
 <span class="textfrase"><br/><br/>
&quot;
  Construimos de la mano de nuestros clientes un nuevo futuro de forma ética, profesional, eficiente y responsable.&quot;</span>
                  
    
      </div> 
	  
	  
	  
	  
	  
	  
	  






	
	
	






    </div> 
</div> 
<div id="sepclear4"></div>
<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"><img src="images/sombraqs.png" /></div> 








</div>















































</body>
</html>