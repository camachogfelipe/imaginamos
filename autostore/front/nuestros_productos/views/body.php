<div class="container contenidos clearfix">
  <a class="bt_tienda bt_tiendainternas cargar_tienda" id="bt_tiendaflotante" style="cursor:pointer;">
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
  <div class="div_gris  "></div>
  <h2 class="tit_secciones">
    NUESTROS PRODUCTOS
  </h2>
  <div class="div_gris margin_bottom"></div>
  <div class="row">

    <div class="span3 cont_gris220 filtro_productos">
      <div class="div_gris"></div>
      <h2 class="tit_titblanco">
        Nuestros Productos
      </h2>
      <div class="div_gris margin_bottom"></div>

      <form action="" method="post" >
        <fieldset class="margin_bottom">
          <h3 class="tit_blanco">
            Categorias
          </h3>
          <div class="div_gris margin_bottom"></div>
          <?php foreach ($categorias as $categoria):  ?>
          <label class="radio">
              <input id="<?php echo "categoria_".$categoria->id; ?>" <?php  if(!empty($cat_select)) echo ($cat_select == $categoria->id)?"checked=\"true\"":""; ?> onclick="submit()" type="radio" name="radioCategoria" class="radioCategoria" value="<?php echo $categoria->id; ?>" >
            <?php echo $categoria->titulo; ?>
          </label>
          <?php endforeach; ?>
          
       
        </fieldset>
        <fieldset class="margin_bottom">
          <h3 class="tit_blanco">
            Marca
          </h3>
          <div class="div_gris margin_bottom"></div>
           <?php foreach ($marcas as $marca):  ?>
          <label class="radio">
              <input id="<?php echo "marca_".$marca->id; ?>" <?php  if(!empty($marca_select)) echo ($marca_select == $marca->id)?"checked=\"true\"":""; ?> onclick="submit()"  class="maraca_select" type="radio" name="radioMarca" value="<?php echo $marca->id; ?>" >
            <?php echo $marca->nombre; ?>
          </label>
          <?php endforeach; ?>
        
        </fieldset>
        <fieldset class="margin_bottom">
          <h3 class="tit_blanco">
            Tipo de vehículo
          </h3>
          <div class="div_gris margin_bottom"></div>
          <?php foreach ($modelos as $modelo):  ?>
          <label class="radio">
              <input id="<?php echo "modelo_".$modelo->id; ?>" <?php  if(!empty($modelo_select)) echo ($modelo_select == $modelo->id)?"checked=\"true\"":""; ?> onclick="submit()"  class="maraca_select" type="radio" name="radioModelo" value="<?php echo $modelo->id; ?>" >
            <?php echo $modelo->nombre; ?>
          </label>
          <?php endforeach; ?>
         
        </fieldset>
      </form>

      <div class="carrito_filtro">
        <div class="div_gris"></div>
        <img src="<?php echo base_url(); ?>assets/img/iconos/carrito_blanco.png">
        <h3 class="tit_blanco">
          Mi Carrito
        </h3>
        <div class="div_gris margin_bottom"></div>
        <div class="num_itemsfiltro">
          <?php echo $this->cart->total_items(); ?> Item(s) agregados
        </div>
      </div>

    </div>
    <div class="span9 cont_productos_mes">
      <div class="row">
        <ul id="ul_productosmes" class="gallery ui-helper-reset ui-helper-clearfix">
          
          <?php foreach ($productos as $producto):  ?>  
         <li data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>" class="span3 destacado articulo_droppable">
             <img src="<?php echo base_url().(!empty($producto->imagen_path)?$producto->imagen_path:"./uploads/dummy_150x150.gif"); ?>">
            <div class="info_destacado">
              <h2 class="tit_destacado">
                <?php echo strtoupper($producto->nombre); ?>
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
                <a  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>" href="#" class="add_to_cart float_right">
                  <p>Añadir al</p>
                  <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
                </a>
              </div>
            </div>
          </li>
          <?php endforeach;  ?> 
        
        </ul>
        <div class="paginador paginador_blanco span9">
          
          <?php //echo $paginador_productos; ?> 
      <!--   <a href="#" class="inline next_btpaginador">Ant</a>
          <a  href="#" class="numero_paginador inline paginador_activo">1</a>
          <a  href="#" class="numero_paginador inline">2</a>
          <a  href="#" class="numero_paginador inline">3</a>
          <a href="#" class="inline prev_btpaginador">Sig</a> -->
        </div>
      </div>
      </div>
    </div>

  </div>

</div><!-- contenidos -->
