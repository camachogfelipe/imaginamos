<?
    include 'cms/core/mapping/front.mapping.php'; 
   // $banner=Banner();
    $urlvalores="cms/modules/valores/view/files/";
    $mision=Textos(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<style type="text/css"> 

#coltabt_izq {
width:490px;
height:100%;
float:left;
color:#8D8D8D;
font-family: AvantGardeMdBTMedium;
text-align:justify;
line-height:22px;
font-size:14px;
}

#coltabt_izq2 {
width:510px;
height:100%;
float:left;
color:#8D8D8D;
font-family: AvantGardeMdBTMedium;
line-height:22px;
font-size:14px;
}


#coltabt_der {
width:250px;
height:100%;
float:right;
color:#8D8D8D;

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



<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css" />

		<style type="text/css">
			
				#conteinerpolitica {
		width:880px;
		height:100%;
		margin:auto;
		
		}	
			
			#conttab {
			width:880px;
			height:100%;
			margin:auto;				
			}
			
			#contsbtpolitica {
	width:880px;
	height:54px;
	margin:auto;
	background-image: url(images/imgbtmision1.png);
	background-repeat: no-repeat;
	background-position: left top;			
			
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

<div id="contsbtpolitica">

<div id="b1tab"><a href="#nogo">Mission</a></div>
<div id="b2tab"><a href="vision_eng.php">Vision</a></div>
<div id="b2tab"><a href="policy_eng.php">HSEQ Policy</a></div>
</div>



<div id="conttab">






<div id="coltabt_izq2">
    <div id="img_derint1_1"><img src="<?=$urlvalores.$mision->imagen1 ?>" width="312" height="277" class="rounded"/></div>
    <div id="titulonqs2pol">Mission</div>
    <br/>		
    <div id="coltabt_izq"><?=$mision->titulo3 ?></div>		
</div>




</div>



	
<div style="clear: both; display: block; text-align:center; padding: 10px 0; text-align:center;"><br/><br/><br/><br/><br/><img src="images/sombraqs.png" width="879" height="25" /></div>
	
	
	
	
		
		



</div>















































</body>
</html>
