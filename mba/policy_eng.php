<?
    include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/valores/view/files/";
    $politicas=Textos(3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>



	







<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />






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
			
					
	#contsbtpolitica {
	width:880px;
	height:54px;
	margin:auto;
	background-image: url(images/imgbtpolitica1.png);
	background-repeat: no-repeat;
	background-position: left top;				
			}	
			

#b1tab {
width:130px;
height:33px;
float:left;
margin-top:18px;
margin-left:25px;
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
}

#b1tab a {
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
text-decoration:none;
}


#b1tab a:hover {
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
text-decoration:none;
}



#b2tab {
width:130px;
height:33px;
float:left;
margin-top:18px;
margin-left:30px;
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
}

#b2tab a {
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
text-decoration:none;
}


#b2tab a:hover {
font-family: AvantGardeMdBTMedium;
text-align:center;
line-height:22px;
font-size:20px;
color:#676767;
text-decoration:none;
}



			
		</style>

	
	<link rel="stylesheet" type="text/css" href="style2/styles2.css" />

	<script type="text/javascript" src="js/jquery/1.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="js/jScrollPane-1.2.3.min.js"></script>

	<script type="text/javascript">
		$(function()
		{
			// this initialises the demo scollpanes on the page.
			$('#pane').jScrollPane({showArrows:true});
			
		});
	</script>












<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#contcajonesdest {
	color:#8D8D8D;
		  font-family: 'AvantGardeMdBTMedium', Arial;
		text-align:justify;
		font-size:14px;
		font-weight:normal;
	width: 505px;
	height:334px;
	text-align:justify;
	padding-right:15px;
}
-->
</style>  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>

<body>



<div id="contsbtpolitica">


<div id="b1tab"><a href="mision_eng.php">Mision</a></div>
<div id="b2tab"><a href="vision_eng.php">Vision</a></div>
<div id="b2tab"><a href="#nogo">HSEQ Policy</a></div>



</div>

<div id="conteinerpolitica"> 


  
		<div id="img_derint03"><img src="<?=$urlvalores.$politicas->imagen1 ?>" width="311" height="397" class="rounded"/></div>
		<div id="titulonqs2pol">HSEQ Policy</div>
		
	<div id="contcajonesdest">
<div class="holder">
			<div id="pane" class="scroll_pane" style="text-align:justify;">
<?=$politicas->titulo3 ?>

</div>
    
</div>

</div>
		  

</div>
</div> 
</div> <div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"><br/><img src="images/sombraqs.png" width="879" height="25" /></div>
<div id="sepclear4"></div>

























































</body>
</html>
