<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="dicermex" lang="es" content="texto empresarial" />
<meta name="dicermex" content="2012" />
<meta name="calvo" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PBA Panama Holding Group</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
		
var windowHeight = $(window).innerHeight();

jQuery.fn.center = function () {
        this.css("position","absolute");
        this.css("top", ( $(window).height() - this.height() ) / 2+$(window).scrollTop() + "px");	
        return this;
}
jQuery(document).ready(function() {
        $('#wrapper').center();
});


			$(function() {
				$('#carousel').carouFredSel({
					width: $(window).width(),
					height: $(window).height(),
					align: false,
					items: {
						visible: 1,
						start: 0,
						width: 'variable',
						height: 'variable'
					},
					
					scroll: {
						items: 1,
						duration: 1000,
						timeoutDuration: 3000
					},
					prev: '#prev',
					next: '#next'
				});
			});
		</script>
        
</head>

<body>

	

    <div id="header"><!--header-->
    	<div class="contheader">
             <div id="logo"><a href="#"></a></div>
        
             <div id="redes">
            	<div id="fac"><a href="#"></a></div>
                <div id="tiw"><a href="#"></a></div>
             </div>
            
            <div id="menu">
           		<ul class="menu"> 
                                                                    
                	<li><a href="#"><span id="texmen1">HOME</span></a></li>
                    <li><a href="servicios.html"><span id="texmen2"><span id="circulo">&#9679;</span>ABOUT US</span></a></li>
                    <li><a href="proyectos.html" class="parent"><span id="texmen3"><span id="circulo">&#9679;</span>ABOUT PANAMA</span></a></li>
                    <li><a href="publicaciones.html"><span id="texmen4"><span id="circulo">&#9679;</span>SERVICES</span></a>
                    	<div id="subm">
                        	<ul>
                                <li id="sub"><a href="categoria3.html" ><span class="sub">MEETING PLANNER<span id="flecha">&rsaquo;</span></span></a></li>
                                <li id="sub"><a href="categoria4.html" ><span class="sub">DESTINATION MANAGEMENTS<span id="flecha">&rsaquo;</span></span></a></li>
                                <li id="sub"><a href="categoria5.html" ><span class="sub">FOUNDATIONS<span id="flecha">&rsaquo;</span></span></a></li>
                                <li id="sub"><a href="categoria5.html" ><span class="subno">TESTIMONIALS<span id="flecha">&rsaquo;</span></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="noticias.html"><span><span id="circulo">&#9679;</span>CONTACT US</span></a></li>   
                                        
                </ul>
        	</div>
        </div>
    </div><!--fin header-->
    
	<div id="wrapper"><!--banner-->
    
        <div id="texbanner">WELCOME ADIPISCING<br /><span id="link"><a href="#">LOREM IPSUM DOLOR SIT AMET CONSECUTER</a></span></div>        
    	
        
        <div id="carousel"><!--carussel-->
        
        	<div id="c1"><img src="imagenes/1.JPG" width="2000"/></div>
        	<div id="c2"><img src="imagenes/2.JPG" width="2000"/></div>
        	<div id="c3"><img src="imagenes/3.JPG" width="2000"/></div>
        	<div id="c4"><img src="imagenes/4.JPG" width="2000"/></div>
        	<div id="c5"><img src="imagenes/5.JPG" width="2000"/></div>
        	<div id="c6"><img src="imagenes/6.JPG" width="2000"/></div>
        	<div id="c7"><img src="imagenes/7.JPG" width="2000"/></div>
        	<div id="c8"><img src="imagenes/8.JPG" width="2000"/></div>
            
        </div><!--fin carussel-->
			<a href="#" id="prev" title="Show previous"> </a>
			<a href="#" id="next" title="Show next"> </a>
                
    </div><!--fin banner-->
        
    <div id="footer"><!--footer-->
    	<div id="contefooter">
        	<div id="logofoter"></div>
            <div id="copi">Copy Rigth 2012 <span id="amarillo">PBA HOLDING GROUP.</span> Todos los derechos reservados</div>
            <div class="footer-autor"><span id="ahorranito2"></span><a href="http://www.imaginamos.com">Diseño Web: </a><a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a></div>
            <div id="sigeunos">
            	<div id="texsig">SÍGUENOS</div>
            	<div id="faceb"><a href="#"></a></div>
            	<div id="titer"><a href="#"></a></div>
            	<div id="email"><a href="#"></a></div>
            </div>
        </div>
    </div><!--fin footer-->
        
</body>
</html>
