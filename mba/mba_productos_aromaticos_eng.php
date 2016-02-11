<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RTI Producciones</title>
		<meta charset="UTF-8" />
       
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	    <link rel="stylesheet" type="text/css" href="jqueryui/css/smoothness/jquery-ui-1.7.2.custom.css">
	   <link rel="stylesheet" type="text/css" href="slider.css">
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	
	


<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>
	











	










	
	
	
	
	<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css">
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

							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
    <div id="sliderContent" class="ui-corner-all">
      <div class="viewer ui-corner-all">
        <div class="content-conveyor ui-helper-clearfix">
          
          <div class="item">
             <div id="bgmenuprods">
<div id="bt1productosfijo"><a href="disolventes_aromaticos_eng.php">Aromatic&nbsp;&nbsp;&nbsp;&nbsp;<br/>
  Solvents&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt2"><a href="#nogo">Aliphatic &nbsp;&nbsp; <br/>Solvents&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt3"><a href="#nogo">Bases&nbsp;&nbsp;&nbsp;&nbsp; Lubricantes&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt4"><a href="#nogo">Polietileno&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="bt5"><a href="#nogo">Parafinas&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>
            </div>
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		     <div class="item">
		       <div id="bgmenuprods">
<div id="bt1productos"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt2"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt3"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt4"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="bt5"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>            </div>
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		 <div class="item">
		 <div id="bgmenuprods">
<div id="bt1productos"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt2"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt3"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>

<div id="bt4"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="bt5"><a href="#nogo">Otro Producto&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>
            </div>
            </div>
        </div>
  <div id="slider"></div>
  </div>
    <script type="text/javascript" src="jqueryui/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript">
      $(function() {
        
		//vars
		var conveyor = $(".content-conveyor", $("#sliderContent")),
		item = $(".item", $("#sliderContent"));
		
		//set length of conveyor
		conveyor.css("width", item.length * parseInt(item.css("width")));
				
        //config
        var sliderOpts = {
		  max: (item.length * parseInt(item.css("width"))) - parseInt($(".viewer", $("#sliderContent")).css("width")),
          slide: function(e, ui) { 
            conveyor.css("left", "-" + ui.value + "px");
          }
        };

        //create slider
        $("#slider").slider(sliderOpts);
      });
    </script>							 
    </body>
</html>