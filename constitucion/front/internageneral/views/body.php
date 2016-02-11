<div class="container">
  <div class="contenedor_internas">
    <div class="cont_tit">
      <h1 class="inline"><?php echo $blog['cms_titulo'] ?></span></h1>
    </div>
    <div class="clearfix">
      <div class="cont_interna_general"> <img src="<?php echo base_url($blog['imagen_path']); ?>" alt="">
        <h2 class="color_azul"><?php echo $blog['cms_subtitulo'] ?></h2>
        <h3><?php echo date("d/m/Y", strtotime($blog['cms_fecha'])) ?></h3>
        <p><?php echo $blog['cms_texto'] ?></p>
      </div>
    </div>
  </div>
</div>
<div class="clear espacio_en_blancofooter"></div>
