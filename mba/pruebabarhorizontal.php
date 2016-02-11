<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
<title>FancyBox 1.3.4 | Demonstration</title>
	
	
	
	     <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	    <link rel="stylesheet" type="text/css" href="jqueryui/css/smoothness/jquery-ui-1.7.2.custom.css">
	   <link rel="stylesheet" type="text/css" href="slider.css">

	
	<link href="css/stylos_rti.css" rel="stylesheet" type="text/css">
	
	
	
	

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
	
	
	<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:90px;
}

#slideshow IMG {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}

#slideshow IMG.active {
    z-index:10;
    opacity:1.0;
}

#slideshow IMG.last-active {
    z-index:9;
}

</style>

	
	
	
	
	
	

	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


 <table width="982" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td ><table width="865" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="2" valign="bottom">
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
    <div id="sliderContent" class="ui-corner-all">
      <div class="viewer ui-corner-all">
        <div class="content-conveyor ui-helper-clearfix">
          
          <div class="item">
 <div id="bgmenuprods">
<div id="bt1"><a href="#nogo">&nbsp;</a></div>

<div id="bt2"><a href="#nogo">&nbsp;</a></div>

<div id="bt3"><a href="#nogo">&nbsp;</a></div>

<div id="bt4"><a href="#nogo">&nbsp;</a></div>
<div id="bt5"><a href="#nogo">&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>>
            </div>
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		     <div class="item">
		    <div id="bgmenuprods">
<div id="bt1"><a href="#nogo">&nbsp;</a></div>

<div id="bt2"><a href="#nogo">&nbsp;</a></div>

<div id="bt3"><a href="#nogo">&nbsp;</a></div>

<div id="bt4"><a href="#nogo">&nbsp;</a></div>
<div id="bt5"><a href="#nogo">&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>
            </div>
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		  
		    
		 <div class="item">
		 <div id="bgmenuprods">
<div id="bt1"><a href="#nogo">&nbsp;</a></div>

<div id="bt2"><a href="#nogo">&nbsp;</a></div>

<div id="bt3"><a href="#nogo">&nbsp;</a></div>

<div id="bt4"><a href="#nogo">&nbsp;</a></div>
<div id="bt5"><a href="#nogo">&nbsp;</a></div>
<div id="sepsegments"></div>
</div>
<div id="sepsegments"></div>
            </div>
            </div>
        </div><table width="865" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="207">&nbsp;</td>
    <td width="658"><div id="slider"></div></td>
  </tr>
</table>
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
    </script>							  </td>
                            </tr>
                            <tr>
                              <td width="207" class="btvermas" id="link" style="text-align:right"><table width="191" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="images/navega_tiempo.png" width="191" height="43"></td>
                                </tr>
                              </table></td>
                              <td width="658" class="bgtimeline" id="link" style="text-align:right">&nbsp; </td>
                            </tr>
                          </table></td>
  </tr>
  <tr>
   
  </tr>
</table>

















</body>
</html>