<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tiny Scrollbar: A lightweight jQuery plugin</title>
	<link rel="stylesheet" href="scrollbar/css/website.css" type="text/css" media="screen"/>
	
	
	
	
	
	
	
	
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript" src="scrollbar/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="scrollbar/js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
		});
	</script>	
		
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
        <li><a href="#tab1">Misión</a></li> 
        <li><a href="#tab2">Visión</a></li> 
		 <li><a href="#tab3">Política Integral  HSEQ</a></li> 
    </ul> 
    <div class="tab_container"> 
        <div id="tab1" class="tab_content"> 
			<div id="img_derint1_1"><img src="images/img_mision02.jpg" width="312" height="277" class="rounded"/></div>
		<div id="titulonqs2">Misión</div>
		
	
		  <div id="coltabt_izq">Nuestra  misión  es  ofrecer  un  servicio  ético,  ágil,  competitivo  y  de  primera  calidad  a  todos nuestros  clientes, como  socios  estratégicos  en  la  distribución  y  comercialización  de  nuestros  proveedores bajo  los  últimos  estándares  en  materia  de calidad,  seguridad  y  cuidado  del  medio  ambiente; estableciendo  relaciones  cercanas  y  a  largo  plazo  con  nuestros  clientes, con  un  recurso  humano  cálido, ético,  responsable  y  comprometido.<br />
		  <br />		
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
	  
	  
	  
	  
	  
	  
	  
	  
	    <div id="tab3" class="tab_content">
		
			<div id="img_derint03"><img src="images/img_polint.jpg" width="311" height="397" class="rounded"/></div>
		
	
		<div id="coltabt_izq2">
		
		<div id="titulonqs">Política Integral</div>
	

	<div id="scrollbar1">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
			 <div class="overview">
				<h3>Magnis dis parturient montes</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>
				
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>
				
				<p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>
				
				<h3>Adipiscing risus </h3>
				<p>Quisque vel felis ligula. Cras viverra sapien auctor ante porta a tincidunt quam pulvinar. Nunc facilisis, enim id volutpat sodales, leo ipsum accumsan diam, eu adipiscing risus nisi eu quam. Ut in tortor vitae elit condimentum posuere vel et erat. Duis at fringilla dolor. Vivamus sem tellus, porttitor non imperdiet et, rutrum id nisl. Nunc semper facilisis porta. Curabitur ornare metus nec sapien molestie in mattis lorem ullamcorper. Ut congue, purus ac suscipit suscipit, magna diam sodales metus, tincidunt imperdiet diam odio non diam. Ut mollis lobortis vulputate. Nam tortor tortor, dictum sit amet porttitor sit amet, faucibus eu sem. Curabitur aliquam nisl sed est semper a fringilla velit porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum in sapien id nulla volutpat sodales ac bibendum magna. Cras sollicitudin, massa at sodales sodales, lacus tortor vestibulum massa, eu consequat dui nulla et ipsum.</p>
				
				<p>Aliquam accumsan aliquam urna, id vulputate ante posuere eu. Nullam pretium convallis tincidunt. Duis vitae odio arcu, ut fringilla enim. Nam ante eros, vestibulum sit amet rhoncus et, vehicula quis tellus. Curabitur sed iaculis odio. Praesent vitae ligula id tortor ornare luctus. Integer placerat urna non ligula sollicitudin vestibulum. Nunc vestibulum auctor massa, at varius nibh scelerisque eget. Aliquam convallis, nunc non laoreet mollis, neque est mattis nisl, nec accumsan velit nunc ut arcu. Donec quis est mauris, eu auctor nulla. Fusce leo diam, tempus a varius sit amet, auctor ac metus. Nam turpis nulla, fermentum in rhoncus et, auctor id sem. Aliquam id libero eu neque elementum lobortis nec et odio.</p>                   
			</div>
		</div>
	</div>	
		</div>







</div>











    </div> 
</div> 
<div id="sepclear4"></div>
<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"><img src="images/sombraqs.png" /></div> 




















</body>
</html>
