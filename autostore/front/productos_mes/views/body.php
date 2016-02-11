<div class="container clearfix">
  <a href="#" class="bt_tienda bt_tiendainternas cargar_tienda" id="bt_tiendaflotante">
    <p class="inline">Carrito</p>
    <div class="tooltip_carrito clearfix">
      <div class="header_tooltip"></div>
      <div class="contenido_tooltip">
        <H2>ARRASTRA AL CARRITO PARA AGREGARLO A LA COMPRA</H2>
      </div>
      <div class="footer_tooltip"></div>
    </div>
    <div id="items-carro" class="numero_items">
      <?php echo $this->cart->total_items(); ?>
    </div>
  </a>
  <div class="div_gris"></div>
  <h2 class="tit_secciones">
    PRODUCTOS DEL MES
  </h2>
  <div class="div_gris margin_bottom"></div>
</div><!-- contenidos -->

<div class="mes-bg" style="background:url('assets/img/mes-bg.jpg');">
	<div class="mes-pt"></div>

  <div class="container cont_productos_mes">
    <div class="row">
      <ul id="ul_productosmes" class="pagination gallery ui-helper-reset ui-helper-clearfix">
      
         <?php foreach ($productos_mes as $producto) :?> 
          
          <li class="span3 destacado articulo_droppable">
          <img src="<?php echo base_url().$producto->imagen_path; ?>">
          <div class="info_destacado">
            <h2 class="tit_destacado">
             <?php echo $producto->nombre; ?>
            </h2>
            <div class="division_destacado"></div>
            <p class="codigo_destacado float_left">
              <?php echo $producto->referencia; ?>
            </p>
            <p class="precio_destacado float_right">
              $<?php echo $producto->precio; ?>
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
        </li>
        <?php endforeach; ?>  
        
      </ul>
    </div>
  </div>

</div>

