<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.: ASSERTO :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="palabras clave" lang="es" />
<meta name="Description" content="texto empresarial" lang="es" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=960, maximum-scale=2" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="assets/css/asserto.css" />

</head>
<body>

 	<div id="loader"><div id="progress"></div></div>
 
  <?php include("header.php"); ?>
  <?php $imagen = DbHandler::GetAll("SELECT * FROM sabemos_imagen"); ?>
  <?php $a = DbHandler::GetAll("SELECT * FROM contenido_sabemos "); ?>

  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
      
      	<div class="con-main-img">
        	<div class="main-img"><img src="admin/modules/sabemos/imagenes/<?php echo $imagen [0]["imagen"]; ?>" alt=""></div>
          <div class="over-main-img"></div>
          <div class="tx-main-img">Qué sabemos hacer</div>
        </div>
        
        <div class="con-grid">
        
        
        	<div class="grid-col1">

            <div class="grid grid-s1">
              <div class="info-grid-s1">
                  <p class="white"><?php echo utf8_encode(nl2br($a[0]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s1.png" width="30" height="30" alt=""></div>
              <div class="grid-s1-bg grid-bg"></div>
            </div>
            
            
            <div class="grid grid-s2">
            	<div class="slider-asserto-s2">
                <div class="info-grid-s2 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[1]["texto1"]));?></p>
                </div>
                <div class="info-grid-s2 slide">
                  <div class="img-grid"><img src="admin/modules/sabemos/imagenes/<?php echo $a [1]["imagen"]; ?>" width="170" height="160" alt=""></div>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s2.png" width="30" height="30" alt=""></div>
              <div class="grid-s2-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-s3">
              <div class="info-grid-s3">
                  <p class="white"><?php echo utf8_encode(nl2br($a[2]["texto1"])); ?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s3.png" width="30" height="30" alt=""></div>
              <div class="grid-s3-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-s4">
            	<div class="slider-asserto-s4">
              	<div class="info-grid-s4 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[3]["texto1"]));?></p>
                </div>
                <div class="info-grid-s4 slide">
                  <div class="img-grid"><img src="admin/modules/sabemos/imagenes/<?php echo $a [3]["imagen"]; ?>" width="470" height="110" alt=""></div>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s4.png" width="30" height="30" alt=""></div>
              <div class="grid-s4-bg grid-bg"></div>
            </div>
            
          
          </div>
          
          
          
          <div class="grid-col2">
          
          	<div class="grid grid-s5">
            	<div class="slider-asserto-s5">
                <div class="info-grid-s5 slide">
                  <div class="img-grid"><img src="admin/modules/sabemos/imagenes/<?php echo $a [4]["imagen"]; ?>" width="230" height="470" alt=""></div>
                </div>
                <div class="info-grid-s5 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[4]["texto1"]));?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s5.png" width="30" height="30" alt=""></div>
              <div class="grid-s5-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-s6">
              <div class="info-grid-s6">
                  <p class="white"><?php echo utf8_encode(nl2br($a[5]["texto1"])); ?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s6.png" width="30" height="30" alt=""></div>
              <div class="grid-s6-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-s7">
            	<div class="slider-asserto-s7">
                <div class="info-grid-s7 slide">
                  <div class="img-grid"><img src="admin/modules/sabemos/imagenes/<?php echo $a [6]["imagen"]; ?>" width="200" height="225" alt=""></div>
                </div>
                <div class="info-grid-s7 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[6]["texto1"]))?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-s7.png" width="30" height="30" alt=""></div>
              <div class="grid-s7-bg grid-bg"></div>
            </div>

          </div>

        </div>
        
        
        <div class="con-bt-sabemos">
        	<a href="contacto.php?seccion=5"><div class="bt-sabemos"><span></span>Contáctenos</div></a>
        </div>
        
      
    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>