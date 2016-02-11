<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bioempak</title>
<base href="<?php echo base_url().'assets/' ?>"></base>
<link href="css/all.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/tabs_style.css" type="text/css" media="screen">
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../assets/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="Empaques Flexibles, foil, laminados, aluminios, impresión, tapas, sachet, vasos." />
<meta name="Description" lang="es" content="Los usuarios en bioempak.com podrán encontrar noticias y últimas novedades de nuestra empresa, información oportuna y actualizada de toda nuestra línea de productos, podrán encontrar un medio abierto de información en donde podrá interactuar dejándonos sus comentarios y/o sugerencias, una página dinámica y moderna, que le permitirá tanto a los usuarios como a Bioempak estar en contacto con sus clientes. ¿Que esperan los usuarios? Los usuarios que hagan parte de Bioempak, esperan tener información a tiempo y respuesta oportuna a sus sugerencias y comentarios, esperan noticias actualizadas e información que sea útil en sus desarrollos, esperan estar informados de todos los cambios y proyectos que tenga Bioempak." />

<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-43470868-1', 'bioempka.com');
	ga('send', 'pageview');
</script>
  <script type="text/javascript" src="../assets/js/jquery.selectbox-0.1.3.js"></script>

<script type="text/javascript">document.documentElement.className += " js";</script>
    
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.carousel-1.1.js"></script>
    <script src="js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">

    $(document).ready(function(){
       
		 $('.text_valores') .hide();
		 $('.textoPolitica') .hide();
		
		
		$('.abrirValores').click(function() {
      		$('.text_valores').slideDown('slow', function() {
				});
			$(this).fadeOut('medium', function() {});
    	});
		
		$('.abrirPolitica').click(function() {
      		$('.textoPolitica').slideDown('slow', function() {
				});
			$(this).fadeOut('medium', function() {});
    	});
		$('.registro').click(function() {
			$('#registro').fadeIn('medium', function() {
				// Animation complete
			});
		});
		$('.btn_cerrar').click(function() {
			$('.form_cotiza').fadeOut('medium', function() {
				// Animation complete
			});
		});	
		$("#country_id7").change(function(){
									var valor = $("#country_id7 option:selected").val();
									if(valor == "empresa") { $("#empresa_r").show(); }
									else { $("#empresa_r").hide(); }
								});
   });
	 $(function () {
			$("#country_id").selectbox();
			$("#country_id2").selectbox();
			$("#country_id3").selectbox();
			$("#country_id4").selectbox();
			$("#country_id5").selectbox();
			$("#country_id6").selectbox();
			$("#country_id7").selectbox();
		});

    </script>
<style type="text/css">
.nosotros_on{
	 background:url(img/bg_menu_item.png) bottom; color:#1d5b8f !important;
}

</style>   
</head> 
<body>
    <?php include( 'header.php' ); ?>
    
  </div>
  <div class="content">
    <div class="content_noticia1 clearfix">
      <!--sombras-->
      <div class="sombra_bottom1"></div>
      <div class="sombra_left2"></div>
      <div class="sombra_right2"></div>
      <!--//-->
      <div class="img_noticia">
        <img src="img/img_noticia1.jpg" width="468" height="224" />
      </div>
      <div class="content_noticia2">
         <h2><span class="light_blue">Nuestra </span>historia</h2>
         <p>
         BIOEMPAK fue fundada en la ciudad de Bogotá en el año de 1994. Somos especialistas en la impresión conversión y troquelado de foil de aluminio y materiales laminados para la industria
farmacéutica y de alimentos.
         </p>
      </div>
      <!--<a class="ver_mas_noticia">Ver más</a>-->
    
    </div>
    <div class="content_noticia1 clearfix">
      <!--sombras-->
     
      <div class="sombra_left2"></div>
      <div class="sombra_right2"></div>
      <div class="sombra_bottom1"></div>
      <!--//-->
      <div style="margin-left:18px" class="content_noticia2">
         <h2><span class="light_blue">Misión</span> -Visión</h2>
         <h3 class="light_blue">Misión</h3>
         <p>
         Somos una empresa confiable, ofrecemos soluciones innovadoras para la industria farmacéutica y de alimentos, contribuimos a mejorar la calidad de vida de las personas y generamos riqueza en todo lo que hacemos.
         </p>
         <h3 class="light_blue">Visión</h3>
         <p>
         Consolidarnos como la empresa líder en los sectores en los cuales suministramos nuestros productos y servicios, siendo el proveedor más confiable por nuestra
calidad y la excelencia con que realizamos nuestro trabajo.

         </p>
      </div>
      <div class="img_noticia">
        <img src="img/img_noticia2.jpg" width="468" height="224" />
      </div>
      
      <!--<a class="ver_mas_noticia" >Ver más</a>-->
      
    </div>
    <div class="content_noticia1 clearfix">
      <!--sombras-->
     
      <div class="sombra_left2"></div>
      <div class="sombra_right2"></div>
      <div class="sombra_bottom1"></div>
      <!--//-->
      <div class="img_noticia">
        <img src="img/img_noticia3.jpg" width="468" height="224" />
      </div>
      <div class="content_noticia2 clearfix">
         <h2><span class="light_blue">Nuestros </span>valores</h2>
         <h3>Honestidad:</h3>
         <p>
         Cumplimos con nuestro deber, reconocemos nuestros errores y buscamos la manera de superarlos.
         </p>
         <h3>Confianza:</h3>
         <p>
         Generamos confianza realizando nuestro trabajo con amor, nuestro propósito es ganarnos la fidelidad de nuestros clientes; que nos reconozcan como un equipo de trabajo satisfecho y orgulloso de pertenecer a Bioempak. <a class="abrirValores" href="<?php echo base_url().'site/us/' ?>#nogo"> ver más</a>
         </p>
         <div class="text_valores">
         <h3>Innovación:</h3>
         <p>
         Promovemos a todos los niveles de la organización la cultura de la creatividad, los cual nos permite generar valor en todo lo que hacemos.
         </p>
         <h3>Respeto:</h3>
         <p>
         Promovemos el respeto y el derecho de nuestra individualidad, conviviendo en armonía y paz con todo lo que nos rodea.
         </p>
         </div>
      </div>
      
      <!--<a class="ver_mas_noticia" >Ver más</a>-->
      
    </div>
    <div class="content_noticia1 clearfix">
      <!--sombras-->
      <div class="sombra_left2"></div>
      <div class="sombra_right2"></div>
      <div class="sombra_bottom1"></div>
      <!--<div class="sombra_Tab_right1"></div>
      <div class="sombra_Tab_left1"></div>-->
      <!--//-->
      <div class="clearfix">
      
      </div>
    
      <div style="margin-left:18px; width:930px; float:none;" class="content_noticia2 clearfix">
         <h2><span class="light_blue">Nuestra </span>promesa</h2>
         <p style="margin-top:30px;">
        Todos los días trabajamos para ganar la confianza de nuestros clientes por esta razón: <span class="light_blue" style="font-size:20px; font-family: 'MyriadPro-Bold';">LO QUE DECIMOS ES LO QUE HACEMOS</span>
         </p>
      </div>
      <div class="linea1"></div>
      <div style="margin-left:18px; width:930px; float:none;" class="content_noticia2 clearfix">
        <div class="clearfix">
         <h2 style="float:right;">Nuestra <span class="light_blue">política de calidad</span></h2>
        </div>
         <p style="font-style:italic">
         En BIOEMPAK estamos comprometidos a satisfacer a nuestros clientes, entregándoles servicios, diseños y productos inocuos, seguros y confiables que cubran sus expectativas. Buscamos constantemente realizar con excelencia, todo lo que hacemos para alcanzar nuestros objetivos y medir nuestro desempeño para lograr el mejoramiento continuo. <a class="abrirPolitica">Ver más</a>
         </p>
         <div class="textoPolitica">
         <p>
         Nuestro sistema de gestión de calidad está basado en los estándares ISO 9001, como en los requisitos exigidos por nuestros clientes a través de las auditorías.<br />
<br />

La garantía y seguridad que damos a nuestros clientes está basada en la selección de nuestros proveedores de materias primas e insumos, quienes cuentan con los mejores equipos de producción, control de calidad y equipo humano para realizar una producción confiable con los más altos estándares de calidad; basados en las normas internacionales y certificaciones que se requieran para cumplir con el compromiso de fabricar productos que protejan y mejoren la calidad de vida de las personas.


         </p>
         </div>
      </div>
      <!--<a class="ver_mas_noticia">Ver más</a>-->
    </div>
    
    
    <?php include( 'footer.php' ); ?>
  </div>
</div>

</body>
</html>
