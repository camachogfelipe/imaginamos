 <div class="contslider_home">
  <div class="slider_home1400">
    <div class="cont_buscador cont_buscadorheader inline">
      <form class="bs-docs-example form-search">
        <input class="input-medium search-query buscar_contbuscador" type="text" placeholder="Buscar...">
        <button class="btn_buscador" type="submit">BUSCAR</button>
      </form>
    </div>
    <div class="cont_tiendahome">
      <div class="container_tiendahome">
        <a href="<?php echo base_url(); ?>carrito/tienda" class="bt_tienda bt_tiendahome cargar_tienda">
          <p class="inline">Carrito</p>
        </a>
      </div>
    </div>
    <ul class="slider_home">
        <?php foreach ($banners as $banner) : ?>
        <li style="background:url('<?php echo base_url().$banner->imagen_path; ?>');">
        <div class="carreta_sliderhome">
          <h2 class="tit_sliderhome">
            <?php echo $banner->titulo_gris; ?> <span><?php echo $banner->titulo_naranja; ?></span>
          </h2>
          <p><?php echo $banner->titulo_blanco; ?></p>
        </div>
      </li>
      <?php endforeach; ?>
      <!--
      <li style="background:url('assets/img/slider_home/1.jpg');">
        <div class="carreta_sliderhome">
          <h2 class="tit_sliderhome">
            Lorem ipsum dolor sit amet, consectetur <span>elit.</span>
          </h2>
          <p>Nullam a iaculis magna, ut volutpat felis. Integer posuere mauris et metus lobortis mollis.</p>
        </div>
      </li>
      <li style="background:url('assets/img/slider_home/1.jpg');">
        <div class="carreta_sliderhome">
          <h2 class="tit_sliderhome">
            Lorem ipsum dolor sit amet, consectetur <span>elit.</span>
          </h2>
          <p>Nullam a iaculis magna, ut volutpat felis. Integer posuere mauris et metus lobortis mollis.</p>
        </div>
      </li>
      <li style="background:url('assets/img/slider_home/1.jpg');">
        <div class="carreta_sliderhome">
          <h2 class="tit_sliderhome">
            Lorem ipsum dolor sit amet, consectetur <span>elit.</span>
          </h2>
          <p>Nullam a iaculis magna, ut volutpat felis. Integer posuere mauris et metus lobortis mollis.</p>
        </div>
      </li> -->
    </ul>
  </div>
</div>
<div class="clear"></div>
<div class="container">
  <div class="carreta_home">
    <div class="logo_home inline">
      <img src="<?php echo base_url(); ?>assets/img/logo2.png">
    </div>
    <h2 class="bienvenidos_home inline">
      WELCOME
    </h2>
    <p><?php echo $bienvenida->texto; ?></p>
  </div>
</div>
<div class="container botones_tabdestacadoshome">
  <?php if(!empty($producto_ventas->nombre)):?>   
  <a href="#" class="bt_tabdestacadoshome bt_tabdestacadoshome1 bt_tabdestacadoshomeactivo" id="tab_destacados1">
    <div class="ico_tabdestacadoshome inline"></div>
    <p class="inline">LO MÁS VENDIDO</p>
  </a>
  <?php endif; ?>  
   
  <?php if(!empty($productos_prom->nombre)):?>     
  <a href="#" class="bt_tabdestacadoshome bt_tabdestacadoshome2<?php if(empty($producto_ventas->nombre)) : ?> bt_tabdestacadoshomeactivo<?php endif; ?>" id="tab_destacados2">
    <div class="ico_tabdestacadoshome inline"></div>
    <p class="inline">PROMOCIONES</p>
  </a>
      <?php endif; ?>  
</div>

<div class="cont_tabdestacadoshome clearfix">
  <div class="container contint_tabdestacadoshome">
    <div class="tab_destacados tab_destacados1 tab_destacadosactivo">
      <div class="row">       
        <?php foreach ($producto_ventas as $producto_venta): ?>	
          <div class="span3 destacado">
          <img src="<?php echo base_url().$producto_venta->imagen_path; ?>">
          <div class="info_destacado">
            <h2 class="tit_destacado">
              <?php echo strtoupper($producto_venta->nombre); ?>
            </h2>
            <div class="division_destacado"></div>
            <p class="codigo_destacado float_left">
              <?php echo $producto_venta->referencia; ?>
            </p>
            <p class="precio_destacado float_right">
              $<?php echo $producto_venta->precio; ?>
            </p>
            <div class="cont_botonesdestacados">
              <a href="<?php echo base_url(); ?>detalle_producto/info/<?php echo $producto_venta->id; ?>" class="float_left">
                <p>Ver más</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/icomas.png">
              </a>
              <a   data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto_venta->id; ?>" href="#" class=" add_to_cart float_right">
                <p>Añadir al</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
              </a>
            </div>
          </div>
        </div>
       <?php endforeach; ?> 
        
        <div class="paginador span12">
            <?php // echo $paginador_ventas; ?>
         <!-- <a href="#" class="inline next_btpaginador">Ant</a>
          <a  href="#" class="numero_paginador inline paginador_activo">1</a>
          <a  href="#" class="numero_paginador inline">2</a>
          <a  href="#" class="numero_paginador inline">3</a>
          <a href="#" class="inline prev_btpaginador">Sig</a> -->
        </div>
      </div>
    </div>
    <div class="tab_destacados tab_destacados2<?php if(empty($producto_ventas->nombre)) : ?> tab_destacadosactivo<?php endif; ?>">
      <div class="row">
        
           <?php foreach ($productos_prom as $producto): ?>	
          <div class="span3 destacado">
          <img src="<?php echo base_url().$producto->imagen_path; ?>">
          <div class="info_destacado">
            <h2 class="tit_destacado">
               <?php echo strtoupper($producto->nombre); ?>
            </h2>
            <div class="division_destacado"></div>
            <p class="codigo_destacado float_left">
               <?php echo strtoupper($producto->referencia); ?>
            </p>
            <p class="precio_destacado float_right">
              $ <?php echo strtoupper($producto->precio); ?>
            </p>
            <div class="cont_botonesdestacados">
              <a href="<?php echo base_url(); ?>detalle_producto/info/<?php echo $producto->id; ?>" class="float_left">
                <p>Ver más</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/icomas.png">
              </a>
              <a  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>" href="#" class=" add_to_cart float_right">
                <p>Añadir al</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?> 
          
         <!-- 
        <div class="span3 destacado">
          <img src="<?php echo base_url(); ?>assets/img/destacados/2.jpg">
          <div class="info_destacado">
            <h2 class="tit_destacado">
              VELOCIMETRO YAMAHA YBR
            </h2>
            <div class="division_destacado"></div>
            <p class="codigo_destacado float_left">
              32/760R24
            </p>
            <p class="precio_destacado float_right">
              $189.500
            </p>
            <div class="cont_botonesdestacados">
              <a href="<?php echo base_url(); ?>detalle_producto" class="float_left">
                <p>Ver más</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/icomas.png">
              </a>
              <a href="#" class="float_right">
                <p>Añadir al</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
              </a>
            </div>
          </div>
        </div> -->
        <div class="paginador span12">
         <!-- <a href="#" class="inline next_btpaginador">Ant</a>
          <a  href="#" class="numero_paginador inline paginador_activo">1</a>
          <a  href="#" class="numero_paginador inline">2</a>
          <a  href="#" class="numero_paginador inline">3</a>
          <a href="#" class="inline prev_btpaginador">Sig</a> -->
        </div>
      </div>
    </div>
  </div>
</div>

    