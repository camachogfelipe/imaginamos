<!DOCTYPE html>
  <!--[if lt IE 8]>	<html lang="es" class="no-js lt-ie8">	<![endif]-->
  <!--[if IE 8]>		<html lang="es" class="no-js ie8">		<![endif]-->
  <!--[if IE 9]>		<html lang="es" class="no-js ie9">		<![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
	<head>
		<title>.: DAJER - Equipos :.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Keywords" content="palabras clave" lang="es" />
		<meta name="Description" content="texto empresarial" lang="es" />
		<meta name="date" content="2013" />
		<meta name="author" content="diseño web: imaginamos.com" />
		<meta name="robots" content="All" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no" />
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
                <script>var globals = <?= json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>  
                <link rel="stylesheet" type="text/css" href="<?php echo front_asset("css/dajer.css") ?>" />
                <script src="<?php echo front_asset("js/modernizr.custom.js") ?>"></script>
	</head>
	<body>
        

 
       <div id="preload"></div>
		<div class="con-bw"><div class="info-bw"><div class="head-bw cfx"><div class="logo-bw"><img src="<?php echo front_asset("img/browser/logo-bw.png"); ?>" width="200" height="100" alt=""></div>
                            <div class="tx-bw">
                                <h1>Oops!... Lo sentimos, este sitio se ha desarrollado para navegadores modernos con el fin de mejorar tu experiencia.</h1>
                                <h1>Para que lo puedas disfrutar es necesario actualizar tu navegador o simplemente descargar e instalar uno mejor.</h1>
                            </div></div>
                        <div class="con-icon-bw"><a href="https://www.google.com/intl/es/chrome/browser/?hl=es" target="_blank" class="over-bw"><div class="icon-bw"><img src="<?php echo front_asset("img/browser/b-1.png"); ?>" width="160" height="160" alt=""></div>
                                <h1>Chrome</h1></a>
                        </div><div class="con-icon-bw"><a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank" class="over-bw"><div class="icon-bw"><img src="<?php echo front_asset("img/browser/b-2.png"); ?>" width="160" height="160" alt="">
                                </div><h1>Firefox</h1></a>
                        </div><div class="con-icon-bw"><a href="http://support.apple.com/kb/DL1531?viewlocale=es_ES" target="_blank" class="over-bw"><div class="icon-bw"><img src="<?php echo front_asset("img/browser/b-3.png"); ?>" width="160" height="160" alt="">
                                </div><h1>Safari</h1></a>
                        </div><div class="con-icon-bw"><a href="http://www.opera.com/es-419/computer/" target="_blank" class="over-bw"><div class="icon-bw"><img src="<?php echo front_asset("img/browser/b-4.png"); ?>" width="160" height="160" alt="">
                                </div><h1>Opera</h1></a>
                        </div><div class="con-icon-bw"><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie" target="_blank" class="over-bw"><div class="icon-bw"><img src="<?php echo front_asset("img/browser/b-5.png"); ?>" width="160" height="160" alt=""></div><h1>Explorer</h1></a>
                        </div><div class="con-bt-bw cfx"><a class="over-bt-bw"><div class="bt-bw"></div></a></div></div></div>
       
        <?php echo $template['partials']['header'], $template['body'], $template['partials']['footer'] ?>
         <div class="errors"><?php
                if (!empty($alert_messages)) {
                    echo $alert_messages;
                }
                ?></div> 
            
    </body>
</html>