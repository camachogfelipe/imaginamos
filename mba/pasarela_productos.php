<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>Documento sin t&iacute;tulo</title>






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
width: 620px; /*Width of Carousel Viewer itself*/
height: 220px; /*Height should enough to fit largest content's height*/
left: -10px;
margin:auto;
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
width: 620px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
margin-right:25px;
}

td img {display: block;}td img {display: block;}

</style>


































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












<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:false, moveby:1, pause:7000},
	panelbehavior: {speed:1000, wraparound:false, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/arrow_1.png', -100, 65], rightnav: ['images/arrow_2.png', 80, 65]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

  </script>
<div id="mygallery" class="stepcarousel">
  <div class="belt">
    <div class="panel"> 
	<div id="enlacecategoria">
	<div id="titprodcategoria"><a href="disolventes_aromaticos.php">Disolventes Acromáticos </a></div>
	<div id="imgcategenv"><img src="images/imgprod1.jpg" width="280" height="163" border="0" /> </div>
	
	</div>
	
		<div id="enlacecategoria2">
	<div id="titprodcategoria"><a href="#nogo">Disolventes Alifáticos </a></div>
	<div id="imgcategenv"><img src="images/imgprod2.jpg" width="280" height="163" border="0" />  </div>

	</div>
		
	</div>
	
	
	
	
    <div class="panel"> 
	
	
	<div id="enlacecategoria">
	<div id="titprodcategoria"><a href="#nogo">Título Categoría </a></div>
	<div id="imgcategenv"><img src="images/imgprod1.jpg" width="280" height="163" border="0" /> </div>
	
	</div>
	
		<div id="enlacecategoria2">
	<div id="titprodcategoria"><a href="#nogo">Título Categoría </a></div>
	<div id="imgcategenv"><img src="images/imgprod2.jpg" width="280" height="163" border="0" />  </div>

	</div> 
	
	
	
	</div>
	
	
	
	
    <div class="panel">
	
	
	
		<div id="enlacecategoria">
	<div id="titprodcategoria"><a href="#nogo">Título Categoría </a></div>
	<div id="imgcategenv"><img src="images/imgprod1.jpg" width="280" height="163" border="0" /> </div>
	
	</div>
	
		<div id="enlacecategoria2">
	<div id="titprodcategoria"><a href="#nogo">Título Categoría </a></div>
	<div id="imgcategenv"><img src="images/imgprod2.jpg" width="280" height="163" border="0" />  </div>

	</div> 
	
	
	
	
	
	 </div>
  </div>
</div>
</body>
</html>