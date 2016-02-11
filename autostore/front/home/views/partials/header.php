<header class="container header_prin clearfix">
  <div class="row">
    <div class="span4 cont_logoprin">
      <a href="<?php echo base_url(); ?>home" class="logo_prin">
        <img src="<?php echo base_url(); ?>assets/img/logo.png">
      </a>
    </div>
    <div class="span8 cont_navprin">
    	<a class="chat-bt talk">
      	<img src="<?php echo base_url(); ?>assets/img/header/chat-bg.png">
      	<span>chat</span>
      </a>
      <ul class="nav_prin inline">
        <li class="linav_prin">
          <a href="<?php echo base_url(); ?>productos_mes" class="bt_navprincipal bt1">Productos del mes</a>
          <div class="borde_gris2btder"></div>
        </li>
        <li class="linav_prin btproductos_nav">
          <div class="borde_gris2btizq"></div>
          <a href="<?php echo base_url(); ?>nuestros_productos" class="bt_navprincipal bt2">productos</a>
          <div class="borde_gris2btder"></div>
          
          
          <ul class="submenu_navprin">
            
              <?php foreach ($categorias as $categoria): ?>
              <li class="li_subnivel2">
              <a class="bt_segundonivel"><?php echo $categoria->titulo; ?></a>
              <ul class="ul_nivel3">
                <?php foreach ($categoria->get_categoria('categoria_basic') as $subcategoria) : ?>   
                <li class="li_subnivel3"><a href="<?php echo base_url(); ?>nuestros_productos/productos_catgoria/<?php echo $subcategoria->id; ?>" class="bt_tercernivel"><?php echo $subcategoria->titulo;  ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php endforeach; ?>
        
          </ul>
          
          
        </li>
        <li class="linav_prin">
          <div class="borde_gris2btizq"></div>
          <a href="<?php echo base_url(); ?>quienes" class="bt_navprincipal bt3">quiénes  somos</a>
          <div class="borde_gris2btder"></div>
        </li>
        <li class="linav_prin">
          <div class="borde_gris2btizq"></div>
          <a href="<?php echo base_url(); ?>contactenos" class="bt_navprincipal bt4">contáctenos</a>
        </li>
      </ul>
    </div>
  </div>
  
</header>
