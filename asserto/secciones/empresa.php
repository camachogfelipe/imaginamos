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
<!--   imagen principal-->
  <?php $imagen = DbHandler::GetAll("SELECT * FROM imagen_somos WHERE idimagen = 1"); ?>
<!--datos seccion verde-->
  <?php $verde = DbHandler::GetAll("SELECT * FROM contenido_somos WHERE idseccion =1");?>
<!--datos seccion naranja-->
  <?php $naranja = DbHandler::GetAll("SELECT * FROM contenido_somos WHERE idseccion =2");?> 
<!--  bullets seccion naranja -->
<?php $bullets = DbHandler::GetAll("SELECT * FROM bullets_somos"); ?>  
<!--datos seccion azul-->
<?php $azul = DbHandler::GetAll("SELECT * FROM contenido_somos WHERE idseccion = 3"); ?>

  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
      	<div class="con-main-img">
        	<div class="main-img"><img src="admin/modules/somos/imagenes/<?php echo $imagen [0]["imagen"]?>" alt=""></div>
          <div class="over-main-img"></div>
          <div class="tx-main-img">Quiénes somos</div>
        </div>
        <div class="con-grid">
        	<div class="grid grid-e1">
          	<div class="info-grid-e1">
              <h1 class="white br-bw"><?php echo utf8_encode(nl2br($verde [0]["texto1"]));?></h1>
              <p align="justify" class="white"><?php echo utf8_encode(nl2br($verde [0]["texto2"]));?></p>
            </div>
            <div class="icon-grid"><img src="assets/imagenes/icon-e1.png" width="30" height="30" alt=""></div>
            <div class="grid-e1-bg grid-bg"></div>
          </div> 
          <div class="grid grid-e2">
          	<div class="slider-asserto-e2">
              <div class="info-grid-e2 slide">
                  <h1 class="white br-bw"><?php echo utf8_encode($naranja [0]["texto1"]); ?></h1>
                  <p align="justify" class="white"><?php echo utf8_encode(nl2br($naranja [0]["texto2"])); ?></p>
              </div>
              <div class="info-grid-e2 slide">
                  <?php for($i=0;$i < sizeof($bullets);$i++){?>
                  <p align="justify" class="white">&bull; <?php echo utf8_encode($bullets[$i]["nombre"]);?></p>
                  <?php }?>
              </div>
            </div>
            <div class="icon-grid"><img src="assets/imagenes/icon-e2.png" width="30" height="30" alt=""></div>
            <div class="grid-e2-bg grid-bg"></div>
          </div>
          <div class="grid grid-e3">
          	<div class="slider-asserto-e3">
            	<div class="info-grid-e3 slide">
                <div class="img-grid"><img src="admin/modules/somos/imagenes/<?php echo $azul[0]["imagen1"]; ?>" width="470" height="190" alt=""></div>
              </div>
            	<div class="info-grid-e3 slide">
                    <h1 class="white br-bw"><?php echo utf8_encode($azul [0]["texto1"]);?></h1>
                    <p align="justify" class="white"><?php echo utf8_encode($azul[0]["texto2"]);?></p>
              </div>
              <div class="info-grid-e3 slide">
                  <div class="img-grid"><img src="admin/modules/somos/imagenes/<?php echo $azul[0]["imagen2"];?>" width="470" height="190" alt=""></div>
              </div>
              <div class="info-grid-e3 slide">
                  <h1 class="white br-bw"><?php echo utf8_encode($azul[0]["texto3"]);?></h1>
                  <p align="justify" class="white"><?php echo utf8_encode(nl2br($azul[0]["texto4"]));?></p>
              </div>
            </div>
            <div class="icon-grid"><img src="assets/imagenes/icon-e3.png" width="30" height="30" alt=""></div>
            <div class="grid-e3-bg grid-bg"></div>
          </div>
        </div>
    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>