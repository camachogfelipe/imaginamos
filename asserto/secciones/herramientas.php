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
  <?php $a = DbHandler::GetAll("SELECT * FROM contenido_herramientas "); ?>
  <?php $l = DbHandler::GetAll("SELECT * FROM link_herramientas "); ?>

  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
      	<!--<div class="con-main-img">
        	<div class="main-img"><img src="imagenes/img-main-2.jpg" alt=""></div>
          <div class="over-main-img"></div>
          <div class="tx-main-img">Como lo podemos ayudar</div>
        </div>-->
        <div class="con-grid">
        	<h1 class="blue sw-tx">Herramientas útiles</h1> 
        	<div class="grid-col1">
            <div class="grid grid-h1">
                <a href="<?php echo $a[0]["link"]; ?>" target="_blank">
            	<div class="slider-asserto-h1">
                <div class="info-grid-h1 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[0]["texto1"]));?></p>
                </div>
                <div class="info-grid-h1 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[0]["texto2"]));?></p>
                </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-h1.png" width="30" height="30" alt=""></div>
              <div class="grid-h1-bg grid-bg"></div></a> 
            </div>
                    <a href="<?php echo $a[1]["link"];?>" target="_blank">
            <div class="grid grid-h2">
              <div class="info-grid-h2">
                  <p class="white"><?php echo utf8_encode(nl2br($a[1]["texto1"]));?></p>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-h2.png" width="30" height="30" alt=""></div>
              <div class="grid-h2-bg grid-bg"></div></a>
            </div>
                        <a href="<?php echo $a[2]["link"]; ?>" target="_blank">
            <div class="grid grid-h3">
            	<div class="slider-asserto-h3">
                <div class="info-grid-h3 slide">
                  <div class="img-grid"><img src="admin/modules/herramientas/imagenes/<?php echo $a[2]["imagen"]; ?>" width="225" height="140" alt=""></div>
                </div>
                <div class="info-grid-h3 slide">
                    <p class="white"><?php echo utf8_encode(nl2br($a[2]["texto1"]));?></p>
              </div>
              </div>
              <div class="icon-grid"><img src="assets/imagenes/icon-h3.png" width="30" height="30" alt=""></div>
              <div class="grid-h3-bg grid-bg"></div></a>
            </div>
          </div>
          <div class="grid-col2">
          	<div class="scroll-links">
              <ul class="list-links">
                  <?php 
                  $j=1;
                  for ($i=0;$i<sizeof($l);$i++){
                      
                      $j++;
                  
                  ?>
                  <a href="<?php echo $l[$i]["link"];?>" target="_blank"><li><span class="l<?php echo $j?>"></span><?php echo utf8_encode(nl2br($l[$i]["titulo_link"]));?></li></a>
                  <?php }?>
              </ul>
            </div>
          </div>
          <div class="con-form-calcular">
          	<div class="form-calcular">
              <h1 class="blue sw-tx">Calcular indicador</h1>
              <form id="form-calcular" action="#" method="post">
                <fieldset>
                  <input placeholder="Campo" type="text">
                </fieldset>
                <fieldset>
                  <input placeholder="Campo" type="text">
                </fieldset>
                <fieldset>
                	<label class="psel-t1">
                    <select class="sel-t1">
                      <option value="">Selección</option>
                      <option value="1">&nbsp; &bull; Selección 1</option>
                      <option value="2">&nbsp; &bull; Selección 2</option>
                      <option value="3">&nbsp; &bull; Selección 3</option>
                      <option value="4">&nbsp; &bull; Selección 4</option>
                      <option value="5">&nbsp; &bull; Selección 5</option>
                    </select>
                  </label>
                  <label class="psel-t1">
                    <select class="sel-t1">
                      <option value="">Selección</option>
                      <option value="1">&nbsp; &bull; Selección 1</option>
                      <option value="2">&nbsp; &bull; Selección 2</option>
                      <option value="3">&nbsp; &bull; Selección 3</option>
                      <option value="4">&nbsp; &bull; Selección 4</option>
                      <option value="5">&nbsp; &bull; Selección 5</option>
                    </select>
                  </label>
                </fieldset>
                <fieldset>
                  <label class="psel-t2">
                    <select class="sel-t2">
                      <option value="">Selección</option>
                      <option value="1">&nbsp; &bull; Selección 1</option>
                      <option value="2">&nbsp; &bull; Selección 2</option>
                      <option value="3">&nbsp; &bull; Selección 3</option>
                      <option value="4">&nbsp; &bull; Selección 4</option>
                      <option value="5">&nbsp; &bull; Selección 5</option>
                    </select>
                  </label>  
                </fieldset>
                <fieldset class="campo-bt">
                  <input type="submit" class="submit" value="Calcular">
                </fieldset>
              </form>
            </div>
            <div class="form-bg"></div>
          </div>
        </div>
    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>