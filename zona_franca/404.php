<?php
// Set codigo 404
header('HTTP/1.0 404 Not Found');
require_once 'include/config.php';
require_once PRESENTATION_DIR . 'link.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>E-Commerce Grupoemi | Pagina no encontrada (404)</title>
  </head>
  <body bgcolor="#FFFFFF">
    <div id="doc" class="yui-t7">
      <div id="bd">
        <div id="header" class="yui-g">
          <a href="<?php echo Link::Build(''); ?>"><img src="<?php echo Link::Build('images/logo.png'); ?>" alt="grupoemi logo" border="0" /></a>
        </div>

        <div id="contents" class="yui-g">
          <h1>La pagina que solicitaste no existe.</h1>
          <p>
            <a href="<?php echo Link::Build(''); ?>">Volver al inicio </a>.
          </p>
          <p>Gracias!</p>
          <p>Equipo Plasticolab</p>
        </div>
      </div>
    </div>
  </body>
</html>