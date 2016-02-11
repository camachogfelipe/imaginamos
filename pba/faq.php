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
<link rel="stylesheet" href="css/styleold.css" type="text/css" media="all" />
<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript">
		
var windowHeight = $(window).innerHeight();

jQuery.fn.center = function () {
        this.css("position","absolute");
        this.css("top", ( $(window).height() - this.height() ) / 2+$(window).scrollTop() + "px");
        this.css("left", ( $(window).width() - this.width() ) / 2+$(window).scrollLeft() + "px");	
        return this;
}
jQuery(document).ready(function() {
        $('#imgd').center();
		$('#imgd').css({height:windowHeight})
});

</script>		
        
</head>

<body>

	<?php include 'header.php';?><!--contiene todo el footer-->
        
    <div class="contenido">
    	
        <div id="img"><img src="imagenes/2.JPG" /></div>
    	
    	<div id="contenido">
    	</div>
    </div>    
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
