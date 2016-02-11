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

<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>

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
	
	
    });

    </script>
<style type="text/css">
.tecno_on{
	background:#00a3ec;
	border-radius:15px;
	-moz-border-radius:15px;
	-ms-border-radius:15px;
	-o-border-radius:15px;
	-webkit-border-radius:15px;
	color:#1d5b8f !important;
}

</style>   
</head> 
<body>
<div class="bg_body"></div>
<div class="contenedor">
  <div class="header clearfix">
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
      <div class="tecno1">
        <h2></h2>
        <div class="clearfix">
          <p><?php echo $t1->text; ?></p>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$t1->image; ?>" width="431" />
        </div>
        
      </div>
      <div class="linea1"></div>
      <div class="tecno2">
        <h2></h2>
        <div class="clearfix">
          <p><?php echo $t2->text; ?></p>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$t2->image; ?>" width="431" />
        </div>
        
      </div>
      <div class="linea1"></div>
      <div class="tecno1">
        <h2></h2>
        <div class="clearfix">
          <p><?php echo $t3->text; ?></p>
          <img class="img_tecno" src="<?php echo base_url().'assets/tech_img/'.$t3->image; ?>" width="431" />
        </div>
        
      </div>
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
