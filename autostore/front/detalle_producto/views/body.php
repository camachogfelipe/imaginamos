<div class="container contenidos clearfix">
  <a href="#" class="bt_tienda bt_tiendainternas cargar_tienda" id="bt_tiendaflotante">
    <p class="inline">Carrito</p>
    <div class="numero_items">
      <?php echo $this->cart->total_items(); ?>
    </div>
  </a>
  <div class="div_gris"></div>
  <h2 class="tit_secciones">
    DETALLE PRODUCTO
  </h2>
  <div class="div_gris margin_bottom"></div>
  <div class="row">
    <div class="span6">
      <div class="cont_sliderdetalle">
        <ul class="slider_detalle">
          <?php foreach ($productos as $producto) : ?>  
            <li>
              <img src="<?php echo base_url().$producto->imagen_path; ?>">
            </li>   
          <?php endforeach;?>
        </ul>
      </div>
    </div>
    <div class="span6 cont_caracteristicasdetalle">
      <div class="div_gris"></div>
        <h3 class="subtitsecciones"><?php echo $productos->nombre ?></h3>
      <div class="div_gris margin_bottom"></div>
      <p class="caracteristicas_detalle precio-high">
        <span>Precio:</span> $<?php echo $productos->precio ?>
      </p>
      <?php foreach ($caracteristicas as $caracteristica) : ?>        
         <p class="caracteristicas_detalle">
            <?php echo "<span>".$caracteristica->tipo.":</span> ".$caracteristica->valor; ?>
         </p>      
      <?php endforeach;?>
   <!--   <p class="caracteristicas_detalle">
        <span>Ancho:</span> 100cm
      </p>
      <p class="caracteristicas_detalle">
        <span>Alto:</span> 200cm
      </p>
      <p class="caracteristicas_detalle">
        <span>Largo:</span> 300cm
      </p>
      <div class="div_gris margin_bottom espacio_en_blanco"></div> -->
      <a data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>" href="#" class="add_to_cart bt_anadir">
        <p>Añadir al</p>
        <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
      </a>
    </div>
    <div class="span12 espacio_en_blanco">
      <div class="div_gris"></div>
      <h3 class="subtitsecciones">Caracteristicas</h3>
      <div class="div_gris margin_bottom"></div>
      <p><?php echo $productos->descripcion; ?></p>
      
    </div>

  </div>
</div><!-- contenidos -->