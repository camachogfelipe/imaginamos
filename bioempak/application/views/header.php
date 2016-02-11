
  <!--<a href="#form" class="registro">-->
  	<div class="registro"></div>
  <!--</a>-->
  <div class="bg_body"></div>
  <div class="contenedor">
    <div class="header clearfix">
     
      <div class="menu">
        <div class="clearfix">
          <ul class="lista_menu">
            <li><a class="home_on" href="<?php echo base_url() ?>site/index">Home</a></li>
            <li><a class="nosotros_on" href="<?php echo base_url() ?>site/us/#nogo">Nosotros</a></li>
            <li><a class="productos_on" href="<?php echo base_url() ?>site/productos">Productos</a></li>
            <li><a class="noticias_on" href="<?php echo base_url() ?>site/news">Noticias</a></li>
            <li><a class="tecno_on" href="<?php echo base_url() ?>site/tech">Tecnología</a></li>
            <li style="margin-right:0;"><a class="contacto_on" href="<?php echo base_url() ?>site/contact">Contáctenos</a></li>
          </ul>
          <div class="redes clearfix">
            <a  target="_blank"class="facebook" href="http://www.facebook.com/bioempak.sa?fref=ts">facebook</a>
            <a target="_blank" class="twitter" href="https://twitter.com/bioempak">Twitter</a>
          </div>
        </div>
        <?php if(isset($session) and isset($session['logged_in'])) : ?>
        <div class="login"><?= $session['nombre'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="salir">Salir</a></div>
        <?php endif; ?>
      </div>
      <a href="<?php echo base_url() ?>site/index"><img class="logo" src="../assets/img/logo.png" width="412" /></a>