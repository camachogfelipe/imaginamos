<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GRUPO NORTH | Especiales</title>
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

</head>
<body>

	<div id="loader"><div id="progress"></div></div>

  <?php include("header.php"); 
   //Prog: Héctor Fernández
  // "Actividades Internas."
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  $actividades = DbHandler::GetAll("SELECT * FROM actividades_internas ORDER BY id DESC");
  $contadorAct = count($actividades);
  
  ?>
  
  <div class="info-general">
  	<div class="con-info-general">
    	<div class="con-actividades">
      	<img src="<?php echo Link::Build() ?>/imagenes/titulos/actividades-1.png" width="500" height="80" alt="">
    		<!--<h2>Actividades de</h2>
      	<h1>Cocina</h1>-->
    		<div class="paging_act">
          <ul class="content_actividad">
              <?php for($i=0; $i<$contadorAct; $i++):
                  $fecha = explode('-',$actividades[$i]['fecha']);
                  $fechaFinal = $fecha[2].'/'.$fecha[1].'/'.$fecha[0];
                  ?>
          	<li>
            	<div class="con-img-act">
              	<img src="<?php echo Link::Build() ?>/img/actividades_internas/<?php echo str_replace('original','redimension',$actividades[$i]['imagen']); ?>" width="500" height="330" alt="">
              	<div class="sombra-item-act"></div>
              </div>
              <div class="con-info-act">
              	<div class="scroll-act">
                	<h1><?php echo $actividades[$i]['titulo']; ?></h1>
                  <h2>Fecha <?php echo $fechaFinal; ?></h2>
                	<p><?php echo $actividades[$i]['texto']; ?></p>
                </div>
              </div>
            </li>
           <?php endfor; ?>
          </ul>
      		<div class="page_navigation"></div>
        </div>
    	</div>
      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>

	<?php include("footer.php"); ?>
  
	<script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.pajinate.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.easing.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jActividades.js"></script>

</body>
</html>