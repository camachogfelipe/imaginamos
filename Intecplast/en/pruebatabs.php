<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<style type="text/css">

#envtabshistoria {
width:965px;
height:100%;
margin:auto;



}
#tabs{
  overflow: hidden;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
}

#tabs li{
width:190px;
  float: left;
  margin: 0 2px 0 0;
}

#tabs a{
width:190px;
	position: relative;
	background-image: url(images/fd.png);
	padding-top: 10px;
	padding-right: 15px;
	padding-bottom: 10px;
	padding-left: 10px;
	font-family: DINMedium;
	float: left;
	text-decoration: none;
	color: #444;
	text-shadow: 0 1px 0 rgba(255,255,255,.8);
	border-radius: 5px 0 0 0;
	box-shadow: 0 2px 2px rgba(0,0,0,0);
	background-color: #E3E3E3;
	background-repeat: repeat-x;
	background-position: top;
}

#tabs a:hover,
#tabs a:hover::after,
#tabs a:focus,
#tabs a:focus::after{
 
}

#tabs a:focus{
  outline: 0;
}

#tabs a::after{
  content:'';
  position:absolute;
  z-index: 1;
  top: 0;
  right: 1px;
  bottom: 0;
  width: 1px;
  background: #ddd;
  background-image: linear-gradient(to bottom, #fff, #ddd);
  box-shadow: 2px 2px 2px rgba(0,0,0,.8);
  transform: skew(10deg);
  border-radius: 0 5px 0 0;
}

#tabs #current a,
#tabs #current a::after{

  z-index: 3;
   bottom: 10;
   background-image: url(images/fd2.png);
   background-repeat: repeat-x;

}

#content
{
    background: #fff;
    padding: 2em;
    height: 220px;
    position: relative;
    z-index: 2;
    border-radius: 0 5px 5px 5px;
    box-shadow: 0 -2px 8px -2px rgba(0, 0, 0, .5);
}



</style>








<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
<script>
$(document).ready(function() {
        $("#content div").hide(); // Initially hide all content
        $("#tabs li:first").attr("id","current"); // Activate first tab
        $("#content div:first").fadeIn(); // Show first tab content

    $('#tabs a').click(function(e) {
        e.preventDefault();
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab
    });
})();
</script>









</head>

<body>





<div id="envtabshistoria">



<ul id="tabs">
    <li><a href="#" title="tab1">Historia</a></li>
    <li><a href="#" title="tab2">Sistema de Calidad</a></li>
    <li><a href="#" title="tab3">Facilidades</a></li>
    <li><a href="#" title="tab4">Servicios</a></li>
</ul>

<div id="content">
    <div id="tab1">Esto es una prueba </div>
    <div id="tab2">Segunda prueba</div>
    <div id="tab3">Tercera prueba</div>
    <div id="tab4">Cuatra prueba</div>
</div>




</div>



</body>
</html>
