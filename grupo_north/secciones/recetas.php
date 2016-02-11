<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRUPO NORTH | Recetas</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="<?php echo Link::Build() ?>/css/north.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/royalslider.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/inverted/rs-default-inverted.css" rel="stylesheet" />


</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php"); 
  //Prog: Héctor Fernández
  // Recetas e Items de Recetas.
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  ?>
  
  <div class="info-general">
  	<div class="con-info-general">
    	<a id="receta-big"></a>
      <img src="<?php echo Link::Build() ?>/imagenes/titulos/recetas-1.png" width="500" height="100" alt="">
    	<!--<h5>Recetas</h5>-->

			<div class="con-recetas-big">
      	<!--Receta-1-->
        <div class="con-recetas-info receta-1">
          <div class="royalSlider rsDefaultInv recetas-info">
          	<!--Cont. receta-->
                <?php $recetas = DbHandler::GetAll("SELECT * FROM recetas_internas ORDER BY id DESC"); 
                $contadorRec = count($recetas);
                for($i=0; $i<$contadorRec; $i++):
                    ?>
                <div class="rsContent">
                <div class="rsImg">
              <div class="con-img-receta">
                <img src="<?php echo Link::Build() ?>/img/recetas_internas/<?php echo str_replace('original','redimension',$recetas[$i]['imagen']) ?>"  width="1000" height="396" alt="">
                <div class="caption-receta">
                	<span></span>
                  <h1><?php echo utf8_encode($recetas[$i]['titulo']); ?></h1>
                  <h2><?php echo utf8_encode($recetas[$i]['subtitulo']); ?></h2>
                </div>
              </div>
              <div class="sombra-img-receta"></div>
              <div class="info-pasos-rec">
                <div class="con-prepa">
                  <h2><?php echo utf8_encode($recetas[$i]['titulo_inferior']); ?></h2>
                  <ul class="pasos-prepa">
                  	<div class="scroll-pasos">
                      <?php $pasos = DbHandler::GetAll("SELECT * FROM recetas_pasos WHERE recetas_internas_id =".$recetas[$i]['id']);
                      for($ip=0, $countpasos=count($pasos); $ip<$countpasos; $ip++):
                          ?><li style="text-align:justify"><span><?php echo ($ip+1); ?></span><?php echo utf8_encode($pasos[$ip]['descripcion']); ?></li><?php
                      endfor;
                      ?>
                        </div>
                  </ul>
                </div>
                <div class="con-ing">
                  <div class="tabla-ing">
                  	<div class="ing-lazo-1"></div>
                    <div class="ing-lazo-2"></div>
                  	<div class="ing-tabla-bg"></div>
                    <div class="arrow-ing"></div>
                    <div class="head-ing">Ingredientes</div>
                    <div class="info-ing">
                      <div class="scroll-ing">
                          <p><?php echo nl2br(utf8_encode($recetas[$i]['ingredientes'])); ?></p>
                      </div>
                    </div>
                    <div class="img-sarten"><img src="<?php echo Link::Build() ?>/imagenes/sarten.png" width="180" height="153" alt=""></div>
                    <div class="img-aceite"><img src="<?php echo Link::Build() ?>/imagenes/aceite.png" width="126" height="156" alt=""></div>
                  </div>
                </div>
              </div>
              </div>
              
              <div class="con-rec-more">
                <img src="<?php echo Link::Build() ?>/imagenes/titulos/recetas-3.png" width="500" height="50" alt="">
                <div class="br-prepa"></div>
              </div>
              
              <div>
              
              	<i class="rsTmb">
                	<a href="#receta-big" class="anchor-cus2">
                		<div class="con-item-mas2">
                	<img src="<?php echo Link::Build() ?>/img/recetas_internas/<?php echo str_replace('original','original',$recetas[$i]['imagen']) ?>" width="440" height="208" alt="">
                  <div class="over-item-mas2">
                    <div class="pick-over-mas2"><img src="<?php echo Link::Build() ?>/imagenes/pick-over-mas.png" width="78" height="78" alt=""></div>
                    <p><?php echo utf8_encode($recetas[$i]['titulo']); ?></p>
                  </div>
                  <div class="sombra-item-mas2"></div>
                </div>
                	</a>
                </i>
               
          		</div>
              
              
              
 			 			</div>
                    <?php
                endfor;
                ?>
        	</div>
        </div>
			</div> 
      
      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>
  
	<?php include("footer.php"); ?>
  
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery-ui-1.8.22.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.easing.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.royalslider.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jRecetas.js"></script>
  <script type="text/javascript">
    $('#logo_content img').each(function() {
    $('body .rsContainer').remove();
    var maxWidth = 150;
    var maxHeight = 100;
    var ratio = 0;
    var width = $(this).width();
    var height = $(this).height();
        
    if(width > maxWidth){
      ratio = maxWidth / width;
      $(this).css("width", maxWidth);
      $(this).css("height", height * ratio);
        height = height * ratio;
      }
      var width = $(this).width();
      var height = $(this).height();
      if(height > maxHeight){
        ratio = maxHeight / height;
        $(this).css("height", maxHeight);
        $(this).css("width", width * ratio);
        width = width * ratio;
      }
    });
    </script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>

</body>
</html>