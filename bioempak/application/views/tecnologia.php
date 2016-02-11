<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bioempak</title>
<base href="<?php echo base_url().'assets/' ?>"></base>
 <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="css/all.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/tabs_style.css" type="text/css" media="screen">
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
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
        $(".tabs").accessibleTabs({
            tabhead:'h2',
            fx:"fadeIn"
        });
		
		$('.carousel1_tecno').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
		$('.carousel2_tecno').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
		
		$('.btn_solicita').click(function() {
      		$('.form_cotiza').fadeIn('medium', function() {
        		// Animation complete
      		});
    	});
		
		$('.bg_cotiza').click(function() {
      		$('.form_cotiza').fadeOut('medium', function() {
        		// Animation complete
      		});
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
.tecno_on{
	 background:url(img/bg_menu_item.png) bottom; color:#1d5b8f !important;
}

.texto_tecno2{
	width:459px;
	float:right;
	margin-right:30px
}

.texto_tecno1{
	width:459px;
	float:left;
	margin-left:30px
}
.texto_tecno1 p{width:auto;}

</style>   
</head> 
<body>
    <?php include( 'header.php' ); ?>
    
  </div>
  <div class="content">
    <div class="content_tecno1 clearfix">
      <!--sombras-->
      <div class="sombra_bottom1"></div>
      <div class="sombra_Tab_right1"></div>
      <div class="sombra_Tab_left1"></div>
      <!--//-->
	  <h1 class="tittle_tecno">Nuestra <span class="light_blue">tecnología</span></h1>
      <h3>Contamos con equipo de <span class="light_blue">alta tecnología</span> en el área de preprensa y diseño, maquinaria para el corte de aluminios, laminados y <span class="light_blue">una nueva linea</span> para la impresión flexográfica de <span class="light_blue">seis tintas</span>.</h3>
      <!--<h3><span class="light_blue">Lorem ipsum dolor sit amet</span>, consectetur adipiscing elit. In mi leo, ultricies sita </h3>
      <h3>Pellentesque elementum sagittis pulvinar. <span class="light_blue">Aenean sollicitudin nulla</span> </h3>-->
      <div class="sombra_slide3"></div> 
      <?php
			if(!empty($tecnologia)) :
				$total = count($tecnologia);
				$i = 1;
				foreach($tecnologia as $tech) :
      ?>
      <div class="tecno<?php if($i%2 == 0) echo 2; else echo 1; ?>">
        <h2></h2>
        <div class="clearfix">
          <div class="texto_tecno<?php if($i%2 == 0) echo 2; else echo 1; ?>">
          	<font size="5"><b>
							<?php $titulo = explode(" ", $tech->titulo); if(count($titulo) > 1) : ?>
              <font color="#999999"><?= $titulo[0] ?></font> 
              <?php unset($titulo[0]); endif; ?>
              <font color="#33ccff"><?= implode(" ", $titulo); ?></font>
            </b></font><br /><br />
          	<?php echo $tech->text; ?>
          </div>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$tech->image; ?>" width="431" />
        </div>        
      </div>
      <?php if($i < $total) : ?><div class="linea1"></div><?php endif; ?>
      <?php
					$i++;
				endforeach;
			endif;
			?>
      <!--<div class="tecno2">
        <h2></h2>
        <div class="clearfix">
          <div class="texto_tecno2">
          	<font size="5"><b>
							<?php $titulo = explode(" ", $t2->titulo); if(count($titulo) > 1) : ?>
              <font color="#999999"><?= $titulo[0] ?></font> 
              <?php unset($titulo[0]); endif; ?>
              <font color="#33ccff"><?= implode(" ", $titulo); ?></font>
            </b></font><br /><br />
          	<?php echo $t2->text; ?>
          </div>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$t2->image; ?>" width="431" />
        </div>
        
      </div>
      <div class="linea1"></div>
      <div class="tecno1">
        <h2></h2>
        <div class="clearfix">
          <div class="texto_tecno1">
          	<font size="5"><b>
							<?php $titulo = explode(" ", $t3->titulo); if(count($titulo) > 1) : ?>
              <font color="#999999"><?= $titulo[0] ?></font> 
              <?php unset($titulo[0]); endif; ?>
              <font color="#33ccff"><?= implode(" ", $titulo); ?></font>
            </b></font><br /><br />
          	<?php echo $t3->text; ?>
          </div>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$t3->image; ?>" width="431" />
        </div>
        
      </div>-->
    </div>
    
      
<!--      <div class="tecno1">
        <h2><span class="light_blue">Troquelado</span></h2>
        <div class="clearfix">
          <p>
          El proceso de troquelado lo realizamos con un sistema de embutido, utilizando herramientas de muy alta calidad y precisión.<br />
<br />
Dependiendo del diseño que requiera cada cliente se puede elaborar la herramienta.  Contamos con troqueles en stock para las formas más comunes. El grabado de la tapa se fabrica de acuerdo al diseño que requiera el cliente y puede hacerse en alto relieve.


          </p>
          <img class="img_tecno" src="img/img_tecno3.jpg" width="431" />
        </div>
        
      </div>-->
    
    <?php include( 'footer.php' ); ?>
  </div>
</div>

</body>
</html>
