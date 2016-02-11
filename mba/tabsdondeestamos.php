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
		$("#tabs6").tabs().addClass('ui-tabs-vertical ui-helper-clearfix');
		$("#tabs6 li").removeClass('ui-corner-top').addClass('ui-corner-left');
	});
	
	
// scripts
});
})(jQuery);
	
	
	</script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/tinyTips.css" />
	<script type="text/javascript" src="js/jquery.tinyTips.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('a.tTip').tinyTips('title');
			
			$('a.imgTip').tinyTips('<strong>Canadá</strong><br />Lorem ipsum dolor sit amet, consectetur<br/>');
			$('a.imgTip2').tinyTips(' <strong>EEUU</strong><br />Lorem ipsum dolor sit amet, consectetur<br/>');
			$('a.imgTip3').tinyTips(' <strong>México</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip4').tinyTips(' <strong>Venezuela</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip5').tinyTips(' <strong>Trinidad y Tobago</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip6').tinyTips(' <strong>Puerto Rico</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip7').tinyTips(' <strong>República Dominicana</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip8').tinyTips(' <strong>Ecuador</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip9').tinyTips(' <strong>Guatemala</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip10').tinyTips(' <strong>España</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip11').tinyTips(' <strong>Irlanda del Norte</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');		
			$('a.imgTip12').tinyTips(' <strong>Israel</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip13').tinyTips(' <strong>Exportaciones Actuales:</strong><br />Canadá / Estados Unidos / Puerto Rico / Trinidad y Tobago  / Venezuela<br/></div>');	
			$('a.imgTip14').tinyTips(' <strong>Exportaciones anteriores:</strong><br />México / República Dominicana / Guatemala / Ecuador  / Irlanda del Norte / España / Israel<br/></div>');		
			$('a.imgTip15').tinyTips(' <strong>Costa Rica</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip16').tinyTips(' <strong>Guatemala</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip17').tinyTips(' <strong>El Salvador</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip18').tinyTips(' <strong>Cuba</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');	
			$('a.imgTip19').tinyTips(' <strong>España</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip20').tinyTips(' <strong>Portugal</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip21').tinyTips(' <strong>Puerto Rico</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip22').tinyTips(' <strong>República Dominicana</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip23').tinyTips(' <strong>Hití</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
			$('a.imgTip24').tinyTips(' <strong>Jamaica</strong><br />Lorem ipsum dolor sit amet, consectetur<br/></div>');
						
						
			$('img.tTip').tinyTips('title');
			$('h1.tagline').tinyTips('tinyTips are totally awesome!');
		});
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





#imgpara_iso {
width:150px;
float:left;
margin-right:20px;

}



#contenedorinternasexcomap {
	width:630px;
	height:100%;
	background-image: url(images/mapamundo.png);
	background-repeat: no-repeat;
	background-position: 0px 50px;


}




	</style>
    <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/stylos_tabsinternos.css" rel="stylesheet" type="text/css">
    <link href="css/stylos_complementotabs.css" rel="stylesheet" type="text/css">
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





<div id="tabs6">
	<ul>
		
		<li  style=" font-family: 'LaneARegular'; font-size:21px; padding-left:25px;" ><a href="#tabs-31">EXCO EN COLOMBIA</a></li>
		<li  style=" font-family: 'LaneARegular'; font-size:21px; padding-left:25px;" ><a href="#tabs-32">EXCO EN EL MUNDO</a></li>
	
				
			
			
			
			
			
			
			
			
	</ul>
	<div id="tabs-31">
	

	<div id="contenedorinternasexco">
	
<div id="titulosecinterna">EXCO EN COLOMBIA</div>
		
		
		
				
<div id="capmaps">
		
<div id="envcajtexmap">		


<div id="vinetamapas"><img src="images/punto1.png" width="13" height="17"></div>
<div id="textomapa1"><strong>Medellín</strong><br/>
Oficina Comercial<br/>
PBX +57 4 3341027<br/>
Celular 311 3440110</div>

</div>


<div id="sepclearmap">&nbsp;</div>

<div id="envcajtexmap">		

<div id="vinetamapas"><img src="images/punto2.png" width="14" height="14"></div>
<div id="textomapa1"><strong>Pereira</strong> <br/>
Planta y sede Principal<br/>
Km 11 vía Cerritos entrada 7<br/>
PBX +57 3379538, +57 6 3379540<br/>
FAX +57 6 3379426<br/>
Correo: info@exco.com.co</div>


</div>



<div id="sepclearmap">&nbsp;</div>




<div id="vinetamapas"><img src="images/punto3.png" width="14" height="14"></div>
<div id="envcajtexmap">		
<div id="textomapa1"><strong>Bogotá</strong> <br/>
Oficina Comercial<br/>
Carrera 11A No. 93-93 Oficina 203<br/>
PBX +57 1 6167010<br/>
FAX +57 1 6167040</div>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


</div>
		
		




<div id="textointexco"><br/><br/>
		
		
		
		
<img src="images/mapa_colombiaexco.png">

</div>





</div>
	</div>
	<div id="tabs-32">
		
	<div id="contenedorinternasexcomap">
	
<div id="titulosecinterna">EXCO EN EL MUNDO</div>
		
	<div id="convenciones"><img src="images/convenciones.png"></div>	
<div id="paisdos">
<a class="imgTip" href="#nogo">&nbsp;</a></div>

<div id="paisuno">
<a class="imgTip2" href="#nogo">&nbsp;</a></div>
		
<div id="paistres">
<a class="imgTip3" href="#nogo">&nbsp;</a></div>
		 
<div id="paiscuatro">
<a class="imgTip4" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paiscinco">
<a class="imgTip5" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisseis">
<a class="imgTip6" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paissiete">
<a class="imgTip7" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisocho">
<a class="imgTip8" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisnueve">
<a class="imgTip9" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisdiez">
<a class="imgTip10" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisonce">
<a class="imgTip11" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<div id="paisdoce">
<a class="imgTip12" href="#nogo"><img src="images/iconpais.png" border="0"></a></div>
		
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>

</div><!-- End demo -->
<!-- End demo-description -->
</body>

<!-- Mirrored from jquery-ui.googlecode.com/svn/trunk/demos/tabs/vertical.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 06 Mar 2012 18:08:53 GMT -->
</html>
