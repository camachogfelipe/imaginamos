<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INTECPLAST S.A.</title>



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

</style>

	




</head>

<body><script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:7000},
	panelbehavior: {speed:1000, wraparound:false, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/prev.png', -13, 30], rightnav: ['images/next.png', -11, 30]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

  </script>

<div id="envpasarelalogos">

	<div id="mygallery" class="stepcarousel"> 

		<div class="belt">

			<div class="panel">
				<div id="fila_panel2">
					<div id="caj_imgpanel"><img src="images/dellmicrosoft4.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel2"><img src="images/marriot2.jpg" height="69" border="0" /></div>
					<div id="caj_imgpane3"><img src="images/mashable3.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel4"><img src="images/dellmicrosoft4.jpg" height="69" border="0" /></div>
				</div>
			</div>

			<div class="panel">
				<div id="fila_panel2">
					<div id="caj_imgpanel"><img src="images/nestle1.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel2"><img src="images/marriot2.jpg" height="69" border="0" /></div>
					<div id="caj_imgpane3"><img src="images/mashable3.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel4"><img src="images/dellmicrosoft4.jpg" height="69" border="0" /></div>
				</div>
			</div>

			<div class="panel">
				<div id="fila_panel2">
					<div id="caj_imgpanel"><img src="images/nestle1.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel2"><img src="images/marriot2.jpg" height="69" border="0" /></div>
					<div id="caj_imgpane3"><img src="images/mashable3.jpg" height="69" border="0" /></div>
					<div id="caj_imgpanel4"><img src="images/dellmicrosoft4.jpg" height="69" border="0" /></div>
				</div>
			</div>

		</div>

	</div>

</div>
</body>
</html>