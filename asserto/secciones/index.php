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
  <?php $home1 = DbHandler::GetAll("SELECT * FROM texto_home WHERE idhome = 1");?>
  <?php $home2 = DbHandler::GetAll("SELECT * FROM texto_home WHERE idhome = 2");?>
  <?php $home3 = DbHandler::GetAll("SELECT * FROM texto_home WHERE idhome = 3");?>
  <?php $home4 = DbHandler::GetAll("SELECT * FROM texto_home WHERE idhome = 4");?>
  <?php $imagen = DbHandler::GetAll("SELECT * FROM home"); ?>

  <div class="home">
    <div class="con-home">
      <div class="con-cols-home">
        <a href="index.php?seccion=empresa">
          <div class="destacado des-1">
            <img src="admin/modules/home/imagenes/<?php echo $imagen [0]["imagen"]?>" height="196" width="114">
            <div class="info-des">
              <h2><strong>Quiénes</strong>somos</h2>
              <ul class="lis-des">
                  <?php
                    for($i=0;$i<sizeof($home1);$i++){
              ?>
                  <li><?php echo utf8_encode(nl2br($home1[$i]["texto"]));?></li>
              <?php 
                    }
              ?>
              </ul>
            </div>
           <div class="pick-des"></div>
          </div>
        </a>
        <a href="index.php?seccion=sabemos">
          <div class="destacado des-2">
            <img src="admin/modules/home/imagenes/<?php echo $imagen [1]["imagen"]?>" height="196" width="114">
            <div class="info-des">
              <h2><strong>Qué sabemos</strong>hacer</h2>
              <ul class="lis-des">
                  <?php 
                    for($j=0;$j<sizeof($home2);$j++){
                  ?>
                  <li><?php echo utf8_encode(nl2br($home2[$j]["texto"])); ?></li>
                <?php 
                    }
                ?>
              </ul>
            </div>
            <div class="pick-des"></div>
          </div>
        </a>
        <a href="index.php?seccion=herramientas">
          <div class="destacado des-3">
            <img src="admin/modules/home/imagenes/<?php echo $imagen [2]["imagen"]?>" height="196" width="114">
            <div class="info-des">
              <h2><strong>Herramientas</strong>útiles</h2>
              <ul class="lis-des">
                  <?php 
                    for($n=0;$n<sizeof($home3);$n++){
                  ?>
                  <li><?php echo utf8_encode(nl2br($home3[$n]["texto"]));?></li>
                <?php 
                    }
                ?>
              </ul>
            </div>
            <div class="pick-des"></div>
          </div>
        </a>
        <a href="index.php?seccion=ayuda">
          <div class="destacado des-4">
            <img src="admin/modules/home/imagenes/<?php echo $imagen [3]["imagen"]?>" height="196" width="114">
            <div class="info-des">
              <h2><strong>Cómo lo</strong>podemos ayudar</h2>
              <ul class="lis-des">
                  <?php 
                    for($c=0;$c<sizeof($home4);$c++){
                  ?>
                  <li><?php echo utf8_encode(nl2br($home4[$c]["texto"]));?></li>
                <?php 
                    }
                ?>
              </ul>
            </div>
            <div class="pick-des"></div>
          </div>
        </a>
      </div>
      <div class="indicadores">
        <h2>Indicadores</h2>
        <h2><strong>Económicos</strong></h2>
        <div id="bgBody">
          <script type="text/javascript">
            // <![CDATA[
            var bgHost = "http://www.applab.in/";
            var bgType = "CO-19284-1";
            var bgIndi = "9|10|3|6|7";
            (function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src='"+f+"' type='text/javascript'%3E%3C/script%3E")); })(document);
            // ]]>
          </script>
        </div>
      </div>
    </div>
  </div>

	<?php include("footer.php"); ?>
  
  <script type="text/javascript">
		$(document).ready(function(e){
			$(".main-nav a").first().addClass("nav-act");
      var r = document.getElementById('bgBody'); bgFormat(); function bgFormat(){var children = document.getElementById('bgBody').getElementsByTagName('li').length; $("#bgUl div").html("<h1>style</h1>"); if (children>0){$("#bgUl a").removeAttr("href")}};
    });
	</script>

</body>
</html>