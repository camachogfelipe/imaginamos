<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
width: 700px; /*Width of Carousel Viewer itself*/
height: 170px; /*Height should enough to fit largest content's height*/
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
width: 700px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}

td img {display: block;}td img {display: block;}

</style>


































<link href="css/stylos_waterbridge.css" rel="stylesheet" type="text/css" />
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
	autostep: {enable:true, moveby:1, pause:7000},
	panelbehavior: {speed:1000, wraparound:false, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/arrow_1.png', -185, 45], rightnav: ['images/arrow_2.png', 8, 45]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

  </script>
<div id="mygallery" class="stepcarousel">
                          <div class="belt">
                            <div class="panel">
                            <img src="images/img_prod1.png" width="162" height="170" border="0" /></a>
                                <img src="images/img_prod2.png" width="157" height="170" border="0" /></a>
                             
                            </div>
                            <div class="panel">
                            <img src="images/img_prod3.png" width="168" height="170" border="0" /></a>
                                <img src="images/img_prod4.png" width="157" height="170" border="0" /></a>
                                 
                            </div>
                            <div class="panel">
                            <img src="images/img_prod5.png" width="157" height="170" border="0" /></a>
                                  <img src="images/img_prod6.png" width="159" height="170" border="0" /></a>
                                
                              
                            </div>
                          </div>
                        </div>
</body>
</html>