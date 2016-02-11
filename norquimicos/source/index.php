<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Norquimicos</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2011" />
<meta name="author" content="diseÃ±o web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="css/norquimicos.css" rel="stylesheet" type="text/css" />

<?php include 'scripst.php';?>

</head>

<body onload="menuSlider.init('menu','slide')">


	<?php include 'header.php';?>


    <div class="banner" >
    	<div id="banner">
			<div id="carousel">
				<div id="contienebanner"><!--item banner-->
                    <div id="texbanner">
                    	<div id="titulobanner">
                        	Lorem ipsum consectur sit amet
                            <a class="btnbaner" href="#">Más <span id="regular">información</span></a>
                        </div>
                    </div>
                	<img class="imgbanner" src="imagenes/banner.png" />
                </div><!--item banner-->

				<div id="contienebanner"><!--item banner-->
                    <div id="texbanner">
                    	<div id="titulobanner">
                        	Lorem ipsum consectur sit amet
                            <a class="btnbaner" href="#">Más <span id="regular">información</span></a>
                        </div>
                    </div>
                	<img class="imgbanner" src="imagenes/banner.png" />
                </div><!--item banner-->

				<div id="contienebanner"><!--item banner-->
                    <div id="texbanner">
                    	<div id="titulobanner">
                        	Lorem ipsum consectur sit amet
                            <a class="btnbaner" href="#">Más <span id="regular">información</span></a>
                        </div>
                    </div>
                	<img class="imgbanner" src="imagenes/banner.png" />
                </div><!--item banner-->

				<div id="contienebanner"><!--item banner-->
                    <div id="texbanner">
                    	<div id="titulobanner">
                        	Lorem ipsum consectur sit amet
                            <a class="btnbaner" href="#">Más <span id="regular">información</span></a>
                        </div>
                    </div>
                	<img class="imgbanner" src="imagenes/banner.png" />
                </div><!--item banner-->

			</div>
			<div id="pager"></div>
		</div>
    </div>

    <div class="contenido">
    	<div class="contenedor">
        	<div id="destacado">
            	<p>"Nullam vehicula turpis nec sapien varius in lobortis elit pellentesque. Vestibulum vitae metus nec lorem sollicitudin tincidunt. Morbi volutpat enim sed tortor pretium id dictum massa</p>
            </div>
            <div id="imgdesyacado">
            	<div id="mascara"></div>
                <img src="imagenes/img_destacado.jpg" />
            </div>
            <div class="textobienvenida">
            	<h1>Bienvenidos<span id="verde">Aenean ante tortor, interdum vel auctor </span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et velit in elit euismod vulputate. Duis sagittis urna eget leo venenatis sed ornare nibh varius. Integer massa orci, commodo eu tempor vehicula, semper vitae elit. Maecenas semper aliquet nisl. Curabitur ultrices rutrum tincidunt. Sed eu purus risus, id dictum tortor. Pellentesque nec sem ac sem suscipit commodo nec quis risus. Donec eget diam non est luctus hendrerit. Vestibulum eros nisi, viverra id sodales eu, adipiscing non nisi. </p>
            </div>
        </div>
        <div class="griss">
        	<div class="contienesuscribcion">
            	<img class="imgsuscri" src="imagenes/imgsuscribete.png" />
                <div class="textosuscri">
                	<h2><span id="boldrojo">company</span><br />presentation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <a id="btnmore" href="company.php?seccion=5" class="<?php if ($_GET['seccion'] == '5'){echo 'activo';}?>"><span id="bold">more</span> information</a>
                </div>
                <div class="suscibase">
                	<h3>suscríbase</h3>
                    <p>Suscríbase y reciba las últimas actualizaciones, información de nuevos productos, consejos técnicos y ofertas exclusivas</p>
                    <div id="suscribir">
                        <form name="for1" method="get" action="#" id="topform">
                            <input type="text" id="texto" onblur="if(this.value=='') this.value='Ingrese su correo electrónico...'" onclick="if(this.value=='Ingrese su correo electrónico...') this.value=''" value="Ingrese su correo electrónico...";/>
                            <input type="submit" class="mas"  value="Suscribir"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div id="contenedorslider">
                <div id="colchonimg">
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo1.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo2.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo3.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo4.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo5.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo1.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo2.jpg" />
                    </div><!--item slider-->
                    <div class="lineascolchon"><!--item slider-->
                        <img src="imagenes/logo3.jpg" />
                    </div><!--item slider-->
                </div>
                <a id="prevline" class="prev" href="#">&lt;</a>
                <a id="nextline" class="next" href="#">&gt;</a>
            </div>
    	</div>
    </div>

	<?php include 'footer.php';?>

</body>

</html>
