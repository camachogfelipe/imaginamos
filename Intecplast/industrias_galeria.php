<?php

    include_once './php/clases.php';
	$imagenDAO = new imagenDAO();
	$imagen = new imagen();
	$imagenes = $imagenDAO->getBySeccionFlag(2,8);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<meta name="Keywords" lang="es" content="palabras clave" />

<meta name="Description" lang="es" content="texto empresarial" />

<meta name="date" content="2011" />

<meta name="author" content="diseño web: imaginamos.com" />

<meta name="robots" content="All" />

<title>INTECPLAST S.A.</title>

<style type="text/css">

<!--



-->

</style>

<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<link href="css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

<!--

.Estilo1 {color: #00FFFF}

-->

</style>

<link href="style_acord/format.css" rel="stylesheet" type="text/css" />

<link href="style_acord/text.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>

<script type="text/javascript" src="includes/javascript.js"> </script>


<style type="text/css">





#fila_panel2 {

width:890px;

position:relative;

margin:auto;

padding-left:30px;

padding-top:28px;



}





#contcaj_imgpanel {

width:171px;

height:62px;

margin-right:25px;

float:left;



}





#contcaj_gal {

width:170px;

height:60px;

margin-right:25px;

float:left;



}



#contcaj_imgpanel2 {

width:171px;

height:62px;

margin-right:2px;

float:left;



}



#caj_imgpanel {

width:191px;

float:left;

}



#caj_imgpanel2 {

width:174px;

float:left;

}



#caj_imgpane3 {

width:198px;

float:left;

}



#caj_imgpanel4 {

width:228px;

float:left;

}

	

#envpasarelalogos {

margin:auto;

	width:961px;

	height:152px;

	background-image: url(images/bglogosinf.png);

	background-repeat: no-repeat;

	background-position: top;







}





</style>



<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>

<script type="text/javascript" src="js/stepcarousel.js">



/***********************************************

* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)

* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts

* This notice must stay intact for legal use

***********************************************/



</script>



<style type="text/css">





.stepcarousel{

position: relative; /*leave this value alone*/

border: 0px solid black;

overflow: scroll; /*leave this value alone*/

width: 880px; /*Width of Carousel Viewer itself*/

height: 152px; /*Height should enough to fit largest content's height*/

left: 0px;

margin-left:40px;

}



.stepcarousel .belt{

position: absolute; /*leave this value alone*/

left: 0px;

top: 0;

}



.stepcarousel .panel{

float: center; /*leave this value alone*/

overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/

left: 0px;



width: 961px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */

}



td img {display: block;}td img {display: block;}





#overthumb  {

position:absolute;

padding: 0;

width: 170px;

height: 60px;

text-align: center;

background: url("images_slide/overthum.png") 0 0 no-repeat;

letter-spacing: -1px;

} 

#overthumb  a {

width: 100%;

height: 100%;

display: block;

overflow: hidden;

font-family: DINMedium;

color: #ffffff;

font-weight: bold;

font-size: 12px;

text-decoration: none;

background: url("images_slide/overthum.png") 0 0 no-repeat;

letter-spacing: -1px;

} 

#overthumb  a:hover {

font-family: DINMedium;

background-position: -170px 0;

color: #ffffff;

font-weight: bold;

font-size: 12px;

letter-spacing: -1px;

}

#overthumb  a:active {

font-family: DINMedium;

background-position: -340px 0;

color: #ffffff;

font-weight: bold;

font-size: 12px;

letter-spacing: -1px;

}



</style>









<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>	





</head>



<body class="body">





<script type="text/javascript">



$(document).ready(function(){	

			$('.crear_foro').click(function() {

     $("#contcaj_gal").attr("src", "nuevo URL completa img");

    });

});	



stepcarousel.setup({

	galleryid: 'mygallery', //id of carousel DIV

	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs

	panelclass: 'panel', //class of panel DIVs each holding content

	autostep: {enable:true, moveby:1, pause:7000},

	panelbehavior: {speed:1000, wraparound:false, persist:true},

	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/prev.png', -13, 27], rightnav: ['images/next.png', -11, 27]},

	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels

	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']

});



function changeImgSliderBigHome( newPath, text ){

	$("#imgSliderBigHome").attr("src", newPath);
	$("#textSliderBigHome").html(text);


}



  </script>





<div id="wrapcontentintecplasttabs">

<!----------------------------HEADER INTECPLAST-------------------------------------------->





<?php include("includes/principalHeader.php"); ?>





<!----------------------------FIN HEADER INTECPLAST------------------------------------------->







<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->



<div id="subtit01tabs"></div>



<div id="subtit02">



<div id="btbackgal"><a href="mercados.php">&nbsp;</a></div>





&nbsp;Mercados </div>



<div id="cajmercadosgal">
	
<?php include "industrias.php"; ?>

</div>

<div id="sepgal"></div>

<div id="envcargal">  
	<div id="envpasarelalogos">
		<div id="mygallery" class="stepcarousel"> 
			<div class="belt">

				<div class="panel">
					<div id="fila_panel2">
				<?php for ($i=0; $i < 4 ; $i++): ?>
						<?php if (!$imagenes[$i]){
								
							break;
								
						}
						else{
						 ?>

						<div id="contcaj_gal">
							<div id="overthumb">
								<a href="#nogo" onclick="changeImgSliderBigHome( '.<?php echo $imagenes[$i]->getImagen_e() ?>', '<?php echo $imagenes[$i]->getDescripcion_e() ?>' );" id="enlaceajax">&nbsp;</a>
							</div>
							<img src=".<?php echo $imagenes[$i]->getImagen_e() ?>" width="170" height="60" border="0" />
						</div>

				<?php 
						}	
					endfor 

				?>
					</div>
				</div>

				<?php if (count($imagenes)>4): ?>
				<div class="panel">
					<div id="fila_panel2">
				<?php for ($i=4, $total=count($imagenes); $i<$total ; $i++): ?>

						
						<div id="contcaj_gal">
							<div id="overthumb">
								<a href="#nogo" onclick="changeImgSliderBigHome( '.<?php echo $imagenes[$i]->getImagen_e() ?>', '<?php echo $imagenes[$i]->getDescripcion_e() ?>' );" id="enlaceajax">&nbsp;</a>
							</div>
							<img src=".<?php echo $imagenes[$i]->getImagen_e() ?>" width="170" height="60" border="0" />
						</div>

				<?php endfor ?>
					</div>
				</div>


				<?php endif ?>

			</div>
		</div>
	</div> 
</div>



<div id="tabshistoria"></div>





<div id="sepdotted"><img src="images/seplineatabs.png" width="965" height="67" /></div>





<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->

</div>

<!----------------------------FOOTER INTECPLAST-------------------------------------------->



<?php include("includes/principalFooter.php"); ?>





<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->





</body>
</html>