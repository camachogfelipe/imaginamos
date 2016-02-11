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
  <?php $imagen = DbHandler::GetAll("SELECT * FROM imagen_ayuda");?>
  <?php $ayuda = DbHandler::GetAll("SELECT * FROM contenido_ayuda");?>   
  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
      
      	<div class="con-main-img-help">
        	<div class="main-img-help"><img src="admin/modules/ayuda/imagenes/<?php echo $imagen [0]["imagen"];?>" alt=""></div>
          <div class="over-main-img-help"></div>
          <div class="tx-main-img-help">Como lo podemos ayudar</div>
        </div>
        
        
        <div style="width:410px; height:260px; padding:20px; float:right; background-color:#0097aa; margin:20px 0;">
        	<div class="scroll-help">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[9]["texto1"]));?></p>
          </div>
        </div>
        
        
        <div class="con-grid">
        
        
        
        	<div class="grid grid-a1">
            <div class="info-grid-a1">
              <h1 class="white">Contamos con experiencia específica en las siguientes áreas:</h1>
            </div>
            <!--<div class="icon-grid"><img src="imagenes/icon-a1.png" width="30" height="30" alt=""></div>-->
            <div class="grid-a1-bg grid-bg"></div>
          </div>
        
      

        	<div class="grid-col1">

            <div class="grid grid-a2">
            	<div class="slider-asserto-a2">
                <div class="info-grid-a2 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[0]["texto1"]));?></p>
                </div>
                <div class="info-grid-a2 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[0]["texto2"]));?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a2.png" width="30" height="30" alt=""></div>
              <div class="grid-a2-bg grid-bg"></div>
            </div>
            
            
            <div class="grid grid-a3">
              <div class="info-grid-a3">
                  <p class="white"><?php echo utf8_encode(nl2br($ayuda[1]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a3.png" width="30" height="30" alt=""></div>
              <div class="grid-a3-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a4">
              <div class="info-grid-a4">
                  <p class="white"><?php echo utf8_encode(nl2br($ayuda[2]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a4.png" width="30" height="30" alt=""></div>
              <div class="grid-a4-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a5">
            	<div class="slider-asserto-a5">
                <div class="info-grid-a5 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[3]["texto1"])); ?></p>
                </div>
                <div class="info-grid-a5 slide">
                  <div class="img-grid"><img src="admin/modules/ayuda/imagenes/<?php echo $ayuda[3]["imagen"];?>" width="225" height="140" alt=""></div>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a5.png" width="30" height="30" alt=""></div>
              <div class="grid-a5-bg grid-bg"></div>
            </div>
            
          
          </div>
          <div class="grid-col2">

          	<div class="grid grid-a6">
              <div class="info-grid-a6">
                  <p class="white"><?php echo utf8_encode(nl2br($ayuda[4]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a6.png" width="30" height="30" alt=""></div>
              <div class="grid-a6-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a7">
            	<div class="slider-asserto-a7">
                <div class="info-grid-a7 slide">
                  <div class="img-grid"><img src="admin/modules/ayuda/imagenes/<?php echo $ayuda[5]["imagen"];?>" width="210" height="140" alt=""></div>
                </div>
                <div class="info-grid-a7 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[5]["texto1"]));?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a7.png" width="30" height="30" alt=""></div>
              <div class="grid-a7-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a8">
            	<div class="slider-asserto-a8">
                <div class="info-grid-a8 slide">
                  <div class="img-grid"><img src="admin/modules/ayuda/imagenes/<?php echo $ayuda[6]["imagen"];?>" width="220" height="260" alt=""></div>
                </div>
                <div class="info-grid-a8 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[6]["texto1"]));?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a8.png" width="30" height="30" alt=""></div>
              <div class="grid-a8-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a9">
              <div class="info-grid-a9">
                  <p class="white"><?php echo utf8_encode(nl2br($ayuda[7]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a9.png" width="30" height="30" alt=""></div>
              <div class="grid-a9-bg grid-bg"></div>
            </div>
            
            <div class="grid grid-a10">
            	<div class="slider-asserto-a10">
                <div class="info-grid-a10 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($ayuda[8]["texto1"])); ?></p>
                </div>
                <div class="info-grid-a10 slide">
                  <div class="img-grid"><img src="admin/modules/ayuda/imagenes/<?php echo $ayuda[8]["imagen"]; ?>" width="210" height="120" alt=""></div>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-a10.png" width="30" height="30" alt=""></div>
              <div class="grid-a10-bg grid-bg"></div>
            </div>

          </div>
        
        </div>

    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>